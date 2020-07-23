<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Url;
class redirectController extends Controller
{
    public function index(Request $req){

        //Searches DB for slug specified in url and retrives asociated url
        $url=DB::table('url')->where('slug',$req->slug )->value('url');
        if($url){
            //Gets clicks count from DB for requested url
        $clicks=DB::table('url')->where('slug',$req->slug )->value('clicks');

        //Increments and updates clicks for requested url
        DB::table('url')->where('slug',$req->slug )->update(['clicks'=>++$clicks]);

    //Redirect to requested url
    return redirect($url);
        }
        abort(404);
    }
}
