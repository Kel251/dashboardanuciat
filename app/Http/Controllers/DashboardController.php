<?php

namespace Anunciate\Http\Controllers;

//use Anunciate\Http\Request;
use Illuminate\Http\Request;
use Anunciate\Http\Requests\ValForms;
use Illuminate\Support\Facades\DB;
//Esta linea evita el uso constante de \Anunciate\Anuncio:: al llamar el modelo y metodo
use Anunciate\Anuncio;
use Anunciate\Estados;
use Anunciate\Municipios;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redirect;
use Closure;
use Illuminate\Http\Response;

class DashboardController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    /// FUNCIÓN QUE REALIZA VARIAS CONSULTAS Y LAS CARGA EN LA VISTA INICIAL DEL SISTEMA DE ADMINISTRACIÓN
    public function index(Request $request) {
//        $consultaimg = DB::select("SELECT imagen, tipo_imagen FROM det_imagenes WHERE Id_img=663");
//        foreach ($consultaimg as $cons) {
//            $cons->imagen; // Datos binarios de la imagen.
//       $tipo = $cons->tipo_imagen;  // Mime Type de la imagen.
//        // Mandamos las cabeceras al navegador indicando el tipo de datos que vamos a enviar.
//        //header("Content-type: $cons->tipo_imagen;");
//        // A continuación enviamos el contenido binario de la imagen.
//        $img = $cons->imagen;
//        }

        
        $count = DB::table('cat_suscripcion')
                ->count();
        $count2 = DB::table('det_comentarios')
                ->count();
        $count3 = Anuncio::count();
        $percent = explode('.', $count2 / $count3);
        $consulta = DB::select("SELECT a.anuncio, a.precio, a.activo FROM det_comentarios c INNER JOIN det_anuncios a ON c.id_anun=a.id_anun GROUP BY c.id_anun,a.anuncio,a.precio,a.activo ORDER BY COUNT(c.id_coment) DESC LIMIT 5");

        $query = DB::select("SELECT id,username, banned, Tipo_user,created, Foto_perfil FROM users ORDER BY created DESC LIMIT 12");

        $users = \Anunciate\Users::where('Tipo_user', '<>', 3)->count();

        //dd($request->get('name'));
//        $anuncios = Anuncio::All();
//        $anuncios = DB::table('det_anuncios')->simplePaginate(10);
        //$anuncios = \Anunciate\Anuncio::paginate(10);
        $anuncios = Anuncio::name($request->get('name'))->paginate(10);
        return view("dashboard/content", compact('anuncios', 'count', 'count2', 'count3', 'percent', 'consulta', 'query', 'users'));
    }

    /// CREAR UN NUEVO ANUNCIO --------PRUEBA EN LARAVEL ------------
    public function create() {
//         $anun = DB::table('det_anuncios')
//                ->get();
//        $est = DB::table('cat_estados')->select('Nom_est')->get();
        $estado = Estados::All('Nom_est', 'Id_est');
        $categoria = DB::table('cat_categorias')->select('Nom_cat', 'Id_cat')->get();
        //$categoria = Estados::All('Nom_cat', 'Id_cat');
        return view("dashboard/anuncio", compact('estado', 'categoria'));
    }

    // CONSULTA LOS MUNICIPIOS EN LA TABLA DE MUNCICIPIOS DE LA BASE DE DATOS PARA EL COMBO DEPENDIENTE
    public function getMunicipio(Request $request, $id) {
        if ($request->ajax()) {
            $municipios = Municipios::muni($id);
            return response()->json($municipios);
        }
    }

    // CONSULTA LOS MUNICIPIOS EN LA TABLA DE MUNCICIPIOS DE LA BASE DE DATOS PARA EL COMBO DEPENDIENTE
    public function getMunicipios(Request $request) {
        $id_estado = $request->id_estado;

        $munis = Municipios::where('id_est', $id_estado)
                ->get();

        return response()->json($munis);
    }

    // ALMACENA LOS DATOS RECIBIDOS DEL FORMULARIO PARA CREAR UN NUEVO ANUNCIO EN LA TABLA RESPECTIVA DE LA BD
    public function store(ValForms $request) {
        //obtenemos el campo de file definido en el formulario
        $file = $request->file('archivo');

        //obtenemos el nombre del archivo
        $img = $file->getClientOriginalName();
//        $name = $request->file('archivo')->getClientOriginalName();
//        /indicamos ue queremos guardar un nuevo archivo eb el disco local
        \Storage::disk('local')->put($img, \File::get($file));

        \Anunciate\Anuncio::create([
            'Anuncio' => $request['Anuncio'],
            'Descripcion' => $request['Descripcion'],
            'telefono' => $request['telefono'],
            'email' => $request['email'],
            'precio' => $request['precio'],
            'Id_est' => $request['Id_est'],
            'Id_mun' => $request['Id_mun'],
            'Id_cat' => $request['Id_cat'],
            'archivo' => $img
        ]);

        return redirect('/dashboard')->with('message', 'Anuncio creado correctamente');
    }

    // OBTIENE LOS DATOS DE LA BD PARA PODER MODIFICAR UN RESPECTIVO ANUNCIO
    public function edit($Id_anun) {
        $categoria = DB::table('cat_categorias')->select('Nom_cat', 'Id_cat')->get();
        $anun = Anuncio::find($Id_anun);
//        foreach($anun as $an){
//            $Id_est = $an->Id_est;
//        }
        $Id_est = $anun->Id_est;
        $Id_cat = $anun->Id_cat;
        $estadoa = Estados::where('Id_est', $Id_est)->get();
        $categoriau = \Anunciate\Categorias::where('Id_cat', $Id_cat)->get();
        $estado = Estados::All('Nom_est', 'Id_est');
//        $anun = DB::table('det_anuncios')
//                ->where('Id_anun', '=', $id)
//                ->get();  select * from det_anuncios anu inner join cat_categorias cate on anu.id_cat=cate.id_cat where id_anun = 29;
//        $anun = DB::table('det_anuncios')->select('*')->where('Id_anun', '=', $id)->get();
//        $anun = DB::table('det_anuncios')
//            ->join('cat_categorias', 'anun.Id_cat', '=', 'cat_categorias.Id_cat')
////            ->join('orders', 'users.id', '=', 'orders.user_id')
//            ->select('*')
//            ->where('Id_anun', '=', $Id_anun)
//            ->get();
        return view('dashboard.Editanun', compact('anun', 'estadoa', 'categoria', 'estado', 'categoriau'));
    }

    /// RECIVE LA INFORMACION DEL FORMULARIO EDITA ANUNCIO Y REALIZA EL UPDATE DEL ANUNCIO
    public function update($Id_anun, ValForms $request) {
        $anun = Anuncio::find($Id_anun);
        $anun->fill($request->all());
        $anun->save();
        Session::flash('message', 'Anuncio modificado correctamente.');
        return Redirect::to('/dashboard');
    }

    // ELIMINA EL ANUNCIO 
    public function destroy($id) {
        Anuncio::destroy($id);
        Session::flash('message', 'Anuncio eliminado correctamente.');
        return Redirect::to('/dashboard');
    }

    // CONSULTA LOS DATOS DE LOS USUARIOS REGISTRADOS EN EL SISTEMA Y LOS CARGA EN LA VISTA INFO USERS
    public function info() {
        $users = DB::table('users')
                ->limit(20)
                ->get();
//        $users = \Anunciate\Users::All();
        return view('dashboard.infousers', compact('users'));
//       return Redirect::to('/dashboard');
    }

    // ACTUALIZA EL STATUS DEL USUARIO REGISTRADO EN EL SISTEMA
    public function status($id, $bann) {
        $idu = base64_decode($id);
        $banned = base64_decode($bann);
        if ($banned == 1) {
            DB::table('users')
                    ->where('id', $idu)
                    ->update(['banned' => 0]);
        } elseif ($banned == 2) {
            DB::table('users')
                    ->where('id', $idu)
                    ->update(['banned' => 0]);
            return Redirect::to('/dashboard');
        } else {
            DB::table('users')
                    ->where('id', $idu)
                    ->update(['banned' => 1]);
        }
        //Session::flash('message', 'Usuario modificado correctamente.');
        return Redirect::to('/deshboard/info');
    }

    // OBTIENE LA INFORMACIÓN DE LA BD CON PARA VER EL DETALLE DE ESTE USUARIO
    public function profile(Request $request, $id) {
        $idu = base64_decode($id);

        $user = \Anunciate\User::find($idu);
        $id_est = $user->Id_est;
        $id_mun = $user->Id_mun;
        $estado = Estados::find($id_est);
        $mun = Municipios::find($id_mun);

        $anuncios = DB::table('det_anuncios')
                        ->select('*')
                        ->where('id', '=', $idu)->get();

        $imagenes = DB::table('det_anuncios')
                ->join('det_imagenes', 'det_imagenes.Id_anun', '=', 'det_anuncios.Id_anun')
                ->select('det_imagenes.nom_img')
                ->where('det_anuncios.id', '=', $idu)
                ->get();
        $followers = DB::select("SELECT infofollower(id) AS info FROM det_actividad WHERE id_follow = '$idu' GROUP BY id");

        $ubicacion = DB::select("SELECT * FROM reg WHERE idu = '$idu'");

        return view('dashboard/profile', compact('user', 'estado', 'mun', 'anuncios', 'imagenes', 'followers', 'ubicacion'));
    }

    // PRUEBA DE TESTEO PARA DETERMINADAS FUNCIONES 
    public function test() {

        return view('test');
    }

    // CONSULTA EL DETALLE DE UN ANUNCIO ESPECIFICO DE UN USUARIO PARA VERIFICAR QUE LA INFORMCIÓN EN EL SEA VALIDA
    public function anunciosuser(Request $request) {
        $id_a = $request->id_a;
        $anuncios = DB::select("SELECT a.id, a.Anuncio,a.Descripcion,a.Fecha,a.archivo,a.precio,e.Nom_est,m.Nom_mun, c.Nom_cat, s.Nom_subcat FROM det_anuncios a INNER JOIN cat_estados e ON a.Id_est = e.Id_est INNER JOIN cat_municipios m ON m.Id_mun = a.Id_mun INNER JOIN cat_categorias c ON c.Id_cat = a.Id_cat INNER JOIN cat_subcategoria s ON s.Id_subcat = a.Id_subcat WHERE Id_anun = '$id_a'");
        return response()->json($anuncios);
    }

    // OBTIENE LOS PAGOS DE QUE AH REALIZADO UN USUARIO DENTRO DEL SISTEMA
    public function getPagos(Request $request) {
        $id_u = $request->id_u;
//        $pagos = DB::Table('cat_tipo_suscripcion AS t')
//                ->join('cat_suscripcion AS s', 't.Id_tiposus', '=', 's.Id_tiposus')
//                ->select('t.Nom_sus', 't.precio', 's.fecha_ini', 's.fecha_fin', 's.activo')
//                ->where('id', $id_u)
//                ->get();

        $pagos = DB::table('subscriptions')->where('user_id', '=', $id_u)->get();

        //$suma = DB::select("SELECT SUM(t.precio) AS total FROM cat_tipo_suscripcion t INNER JOIN cat_suscripcion s ON t.Id_tiposus = s.Id_tiposus WHERE s.id =1");
        return response()->json($pagos);
    }

    // CONSULTA EL MONTO TOTAL DE TODOS LOS PAGOS QUE AH REALIZADO UN USUARIO ESPECIFICO
    public function total(Request $request) {
        $id_u = $request->id_u;
        $suma = DB::select("SELECT SUM(costo) AS total FROM subscriptions WHERE user_id ='$id_u'");
        return response()->json($suma);
    }

    // OBTIENE LOS ANUNCIOS PENDIENTES QUE AH REGISTRADO UN USUARIO DENTRO DEL SISTEMA PARA PODER CAMBIAR SU STATUS
    public function pendientes(Request $request, $id = NULL) {

        if ($request->input('id_user') && $id_cat = $request->input('id_cat')) {
            $id_cat = $request->input('id_cat');
            $id_u = $request->input('id_user');

            $user = \Anunciate\User::find($id_u);
            $id_est = $user->Id_est;
            $id_mun = $user->Id_mun;
            $estado = Estados::find($id_est);
            $mun = Municipios::find($id_mun);

            $categoria = DB::table('cat_categorias')->get();

            $anuncios = DB::table('det_anuncios')
                    ->select('*')
                    ->where('id', '=', $id_u)
                    ->where('activo', '<>', 0)
                    ->where('id_cat', '=', $id_cat)
                    ->get();

            $imagenes = DB::table('det_anuncios')
                    ->join('det_imagenes', 'det_imagenes.Id_anun', '=', 'det_anuncios.Id_anun')
                    ->select('det_imagenes.nom_img')
                    ->where('det_anuncios.id', '=', $id_u)
                    ->get();
            $followers = DB::select("SELECT infofollower(id) AS info FROM det_actividad WHERE id_follow = '$id_u' GROUP BY id");
        } else {
            $idu = base64_decode($id);
            $user = \Anunciate\User::find($idu);
            $id_est = $user->Id_est;
            $id_mun = $user->Id_mun;
            $estado = Estados::find($id_est);
            $mun = Municipios::find($id_mun);

            $categoria = DB::table('cat_categorias')->get();

            $anuncios = DB::table('det_anuncios')
                    ->select('*')
                    ->where('id', '=', $idu)
                    ->where('activo', '<>', 0)
                    ->get();

            $imagenes = DB::table('det_anuncios')
                    ->join('det_imagenes', 'det_imagenes.Id_anun', '=', 'det_anuncios.Id_anun')
                    ->select('det_imagenes.nom_img')
                    ->where('det_anuncios.id', '=', $idu)
                    ->get();
            $followers = DB::select("SELECT infofollower(id) AS info FROM det_actividad WHERE id_follow = '$idu' GROUP BY id");
        }
        return view('dashboard/profilep', compact('user', 'estado', 'mun', 'anuncios', 'imagenes', 'followers', 'categoria'));
    }

    // CAMBIA EL STATUS DE UN ANUNCIO
    public function statusanuncio($id_a, $val, $idu) {
        if ($val == 1) {
            DB::table('det_anuncios')
                    ->where('id_anun', $id_a)
                    ->update(['activo' => 0]);
            return redirect()->action('DashboardController@pendientes', ['id' => base64_encode($idu)]);
        } elseif ($val == 2) {
            DB::table('det_anuncios')
                    ->where('id_anun', $id_a)
                    ->update(['activo' => 0]);
            return redirect()->action('DashboardController@pendientes', ['id' => base64_encode($idu)]);
        } else {
            return Redirect::to('deshboard/pendientes')->whit($idu);
        }
    }

    // BLOQUEA UN DETERMINADO ANUNCIO 
    public function blockanun($id_a, $val, $idu) {
        if ($val == 1) {
            DB::table('det_anuncios')
                    ->where('id_anun', $id_a)
                    ->update(['activo' => 2]);
            return redirect()->action('DashboardController@pendientes', ['id' => base64_encode($idu)]);
        } else {
            return redirect()->action('DashboardController@pendientes', ['id' => base64_encode($idu)]);
        }
    }

    //OBTIENE LA INFORMACION DE LA UBICACION REGISTRADA POR UN USUARIO PARA 
    public function ubicacionuser(Request $request) {
        $id_a = $request->id_u;
        $anuncios = DB::select("SELECT a.Anuncio,a.Descripcion,a.Fecha,a.archivo,a.precio,e.Nom_est,m.Nom_mun, c.Nom_cat, s.Nom_subcat FROM det_anuncios a INNER JOIN cat_estados e ON a.Id_est = e.Id_est INNER JOIN cat_municipios m ON m.Id_mun = a.Id_mun INNER JOIN cat_categorias c ON c.Id_cat = a.Id_cat INNER JOIN cat_subcategoria s ON s.Id_subcat = a.Id_subcat WHERE Id_anun = '$id_a'");
        return response()->json($anuncios);
    }

    public function suscribe($id) {

        if (base64_decode($id)) {
            $iduser = base64_decode($id);
            $id_u = \Anunciate\Users::find($iduser);
            if (isset($id_u)) {
                $iduser = base64_decode($id);
                Session::put('key', $iduser);
                $session = Session::get('key');
//        Cache::put('keyc',1);
//        $session =  Cache::get('keyc');
                return view('dashboard.Suscribe', compact('iduser', 'session'));
            }return "error";
        }return "error";
    }

    public function pruebasession() {
        $session = Session::get('key');
        return view('test', compact('session'));
    }

}
