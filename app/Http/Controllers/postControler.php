<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Url;
use phpDocumentor\Reflection\Types\Null_;

class postControler extends Controller
{


    public function index(Request $req){
        $string=$req->slug;
        if(DB::table('url')->where('slug',$string )->value('slug')){
            echo "$string existis";
            die();
        }
        $slugFromDb=NULL;

    while($slugFromDb==NULL && $string ==''){


    $string = substr(sha1(time()),0,6);

    $slugFromDb=DB::table('url')->where('slug',$string )->value('slug');
    }




        $url=new Url();
$url->url=$req->url;
$url->slug=$string;
$url->save();

        return redirect('/');

            }
}
