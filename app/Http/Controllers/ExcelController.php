<?php

namespace Anunciate\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Anunciate\Anuncio;

class ExcelController extends Controller {

    public function index() {

        Excel::create('Laravel Excel', function($excel) {
            $excel->sheet('Anuncio', function($sheet) {
                $anuncios = Anuncio::All();
                $sheet->fromArray($anuncios);
            });
        })->export('xls');
    }

    public function pagos(Request $request,$id) {
        $idu = $id;
        echo $idu."<br>";
//        $iduser = $request->id_u;
//        echo $iduser.'id';
//        return response()->json($iduser);
$idu2 = \Anunciate\Suscripcion::name($request->get($id))->get();
        echo $idu2;
////        Excel::create('Laravel Excel', function($excel) {
////            $excel->sheet('Pagos', function($sheet) {
////                //$idus = $this->pagos()->id; echo $idus;
////                //$pagosu = DB::table('cat_suscripcion')->where('id',$idus)->get();
////                $idu = \Anunciate\Suscripcion::name($request->get('id'))->get;
////                $pagos = DB::select("SELECT * FROM cat_suscripcion WHERE id = '$idu' ");
////                $data= json_decode( json_encode($pagos), true);
////                $sheet->fromArray($data);
////            });
////        })->export('xls');
    }
    
    public function pendientes() {
//        $id = $idu;
//        echo $id."<br>";
        Excel::create('Laravel Excel', function($excel) {
            $excel->sheet('Pendientes', function($sheet) {
                //$idus = $this->pagos()->id; echo $idus;
                //$pagosu = DB::table('cat_suscripcion')->where('id',$idus)->get();
                $pendientes = DB::select('SELECT * FROM det_anuncios WHERE activo <> 0');
                $data= json_decode( json_encode($pendientes), true);
                $sheet->fromArray($data);
            });
        })->export('xls');
    }
    
    public function users() {
//        $id = $idu;
//        echo $id."<br>";
        Excel::create('Laravel Excel', function($excel) {
            $excel->sheet('Usuarios', function($sheet) {
                //$idus = $this->pagos()->id; echo $idus;
                //$pagosu = DB::table('cat_suscripcion')->where('id',$idus)->get();
                $users= DB::select('SELECT * FROM users LIMIT 20');
                $data= json_decode( json_encode($users), true);
                $sheet->fromArray($data);
            });
        })->export('xls');
    }
}
