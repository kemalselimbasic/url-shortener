<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Url;
class postControler extends Controller
{


    public function index(Request $req){
        $url=new Url();
$url->url=$req->url;
$url->slug=$req->slug;
$url->clicks=$url->clicks+1;
$url->save();

        return view('welcome');
        
            }
}
