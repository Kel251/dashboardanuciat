<?php

namespace Anunciate\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//Esta linea evita el uso constante de \Anunciate\Anuncio:: al llamar el modelo y metodo
use Anunciate\Anuncio;
use Anunciate\Estados;
use Anunciate\Municipios;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller {

    public function index() {
//        $anuncios = Anuncio::All();
//        $anuncios = DB::table('det_anuncios')->simplePaginate(10);
        $anuncios = \Anunciate\Anuncio::paginate(10);
        return view("dashboard/content", compact('anuncios'));
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

    public function store(Request $request) {
        \Anunciate\Anuncio::create([
            'Anuncio' => $request['Anuncio'],
            'Descripcion' => $request['Descripcion'],
            'telefono' => $request['telefono'],
            'email' => $request['email'],
            'precio' => $request['precio'],
            'Id_est' => $request['Id_est'],
            'Id_cat' => $request['Id_cat']
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
        $estadoa = Estados::where('Id_est',$Id_est)->get();
        $categoriau = \Anunciate\Categorias::where('Id_cat',$Id_cat)->get();
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
        return view('dashboard.Editanun', compact('anun','estadoa','categoria','estado','categoriau'));
    }

    public function update($Id_anun, Request $request) {
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

}
