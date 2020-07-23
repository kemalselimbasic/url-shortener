<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Url;
use phpDocumentor\Reflection\Types\Null_;

class postControler extends Controller
{


    public function index(Request $req){
        //Gets slug from url
        $string=$req->slug;

        //Checks if slug alraedy exists in db
            if(DB::table('url')->where('slug',$string )->value('slug')){
                //If exists renders partial blade with error message
                return view('exists',[
                    'error'=>$string
                ]);

            }

        //If slug field is empty generates random string
        $slugFromDb=NULL;
        while($slugFromDb==NULL && $string ==''){
            //Generates random string with lenght of 6
            $string = substr(sha1(time()),0,6);
            //Checks if random string already exists in db and generates new one if so
            $slugFromDb=DB::table('url')->where('slug',$string )->value('slug');
        }



        //Db model
        $url=new Url();
        //Inputing info in db
        $url->url=$req->url;
        $url->slug=$string;
        //Saving record to db
        $url->save();
    //Redirect to preview page
    return view('done',[
        'url'=>$req->url,
        'slug'=>$string
    ]);

            }
}
