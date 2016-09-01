<?php

namespace SisVentas\Http\Controllers;

use Illuminate\Http\Request;

use SisVentas\Http\Requests;

use  SisVentas\Categoria;

use Illuminate\Support\Facades\Redirect;

use  SisVentas\Http\Requests\CategoriaFormRequest;

use db;

class CategoriaController extends Controller
{
 
 public function index(){

 	return view('almacen.categoria.index');
 }

  public function create(){

 	return view('almacen.categoria.create');
 }

}
