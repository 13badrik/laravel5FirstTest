<?php
/**
 * Created by PhpStorm.
 * User: Rustam
 * Date: 1/31/2016
 * Time: 8:52 PM
 */

namespace App\Http\Controllers;


class WelcomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

}