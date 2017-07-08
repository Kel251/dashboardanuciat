<?php

namespace Anunciate\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Anunciate\Anuncio;

class ExcelController extends Controller
{
    public function index(){

    	Excel::create('Laravel Excel', function($excel){
    		$excel->sheet('Anuncio',function($sheet){
    		$anuncios = Anuncio::All();
            $sheet->fromArray($anuncios);

    		});

    	})->export('xls');
    }
}
