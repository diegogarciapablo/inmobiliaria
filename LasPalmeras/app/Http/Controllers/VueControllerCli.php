<?php

namespace Palmeras\Http\Controllers;

use Illuminate\Http\Request;

class VueControllerCli extends Controller
{
   public function index(){

   return view('vue.index');
   }
}
