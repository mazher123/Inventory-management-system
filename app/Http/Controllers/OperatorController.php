<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperatorController extends Controller
{
  public function Index(){

    return view('Operator.operatorDashboard');
  }




}
