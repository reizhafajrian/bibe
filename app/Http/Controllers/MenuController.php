<?php

namespace App\Http\Controllers;

use App\MenuModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index(){
        $data=new MenuModel();
        $collection=$data->all();
        $titleBar="Menu";
        return view("menu",compact('titleBar','collection'));
    }
}
