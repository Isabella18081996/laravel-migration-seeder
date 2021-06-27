<?php
namespace App\Http\Controllers;

use App\Travel;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }
    public function travels(){
        $travels=Travel::paginate(10);
        return view('travels', ['travels'=>$travels]);
    }
    public function locations(){
        return view('locations');
    }
}
