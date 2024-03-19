<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Http\Response;

class HomeController extends Controller{
    public funtion renderHome(){
        return view('home');
    }
}
