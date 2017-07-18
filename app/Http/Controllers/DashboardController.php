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
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller {

    public function index(Request $request) {
        $count = DB::table('cat_suscripcion')
                ->count();
        $count2 = DB::table('det_comentarios')
                ->count();
        $count3 = Anuncio::count();
        $percent = explode('.',$count2/$count3);
        $consulta = DB::select("SELECT a.anuncio, a.precio, a.activo FROM det_comentarios c INNER JOIN det_anuncios a ON c.id_anun=a.id_anun GROUP BY c.id_anun,a.anuncio,a.precio,a.activo ORDER BY COUNT(c.id_coment) DESC LIMIT 5");
        
        $query = DB::select("SELECT id,username, banned, Tipo_user,created, Foto_perfil FROM users ORDER BY created DESC LIMIT 12");
        
        $users = \Anunciate\Users::where('Tipo_user','<>',3)->count();
        
        //dd($request->get('name'));
//        $anuncios = Anuncio::All();
//        $anuncios = DB::table('det_anuncios')->simplePaginate(10);
        //$anuncios = \Anunciate\Anuncio::paginate(10);
        $anuncios = Anuncio::name($request->get('name'))->paginate(10);
        return view("dashboard/content", compact('anuncios','count','count2','count3','percent','consulta','query','users'));
    }

    public function create() {
//         $anun = DB::table('det_anuncios')
//                ->get();
//        $est = DB::table('cat_estados')->select('Nom_est')->get();
        $estado = Estados::All('Nom_est', 'Id_est');
        $categoria = DB::table('cat_categorias')->select('Nom_cat', 'Id_cat')->get();
        //$categoria = Estados::All('Nom_cat', 'Id_cat');
        return view("dashboard/anuncio", compact('estado', 'categoria'));
    }

    public function getMunicipio(Request $request, $id) {
        if ($request->ajax()) {
            $municipios = Municipios::muni($id);
            return response()->json($municipios);
        }
    }

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
            'Id_cat' => $request['Id_cat'],
            'archivo' => $img
        ]);

        return redirect('/dashboard')->with('message', 'Anuncio creado correctamente');
    }

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

    public function update($Id_anun, ValForms $request) {
        $anun = Anuncio::find($Id_anun);
        $anun->fill($request->all());
        $anun->save();

        Session::flash('message', 'Anuncio modificado correctamente.');
        return Redirect::to('/dashboard');
    }

    public function destroy($id) {
        Anuncio::destroy($id);
        Session::flash('message', 'Anuncio eliminado correctamente.');
        return Redirect::to('/dashboard');
    }

    public function info() {
        $users = DB::table('users')

                ->limit(20)
                ->get();
//        $users = \Anunciate\Users::All();
        return view('dashboard.infousers',compact('users'));
//       return Redirect::to('/dashboard');
    }
    
    public function status($id,$bann) {
        $idu = base64_decode($id);
        $banned = base64_decode($bann);
        if($banned == 1){
        DB::table('users')
            ->where('id', $idu)
            ->update(['banned' => 0]);
        }elseif($banned == 2){
            DB::table('users')
            ->where('id', $idu)
            ->update(['banned' => 0]);
            return Redirect::to('/dashboard');
        }else{
            DB::table('users')
            ->where('id', $idu)
            ->update(['banned' => 1]);
        }
        //Session::flash('message', 'Usuario modificado correctamente.');
        return Redirect::to('/deshboard/info');
    }
    
    public function profile(Request $request, $id) {
        $idu = base64_decode($id);        
        
        $user = \Anunciate\User::find($idu);
        $id_est = $user->Id_est;
        $id_mun = $user->Id_mun;
        $estado = Estados::find($id_est);
        $mun = Municipios::find($id_mun);
        
        $anuncios = DB::table('det_anuncios')
                     ->select('*')
                     ->where('id', '=', $idu)->paginate(10);
        
        $imagenes = DB::table('det_anuncios')
                ->join('det_imagenes','det_imagenes.Id_anun','=','det_anuncios.Id_anun')
                ->select('det_imagenes.nom_img')
                ->where('det_anuncios.id','=',$idu)
                ->get();

        
        return view('dashboard/profile',compact('user','estado','mun','anuncios','imagenes'));
    }

}
