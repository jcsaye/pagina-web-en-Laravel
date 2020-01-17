<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function listado (){
       $users= User::all();

       $vac= compact('users');
       return view('ListadoUsers', $vac);


    }










}
