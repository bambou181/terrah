<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Detail - terrah";
        return view('detail.index')->with("viewData", $viewData);
    }
    
}
