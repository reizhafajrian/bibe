<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index(){
        $titleBar="Inventory";
        return view("inventory/create",compact("titleBar"));
    }
}
