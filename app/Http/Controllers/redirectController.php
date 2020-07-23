<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Url;
class redirectController extends Controller
{
    public function index(Request $req){

    $url=DB::table('url')->where('slug',$req->slug )->value('url');
    $clicks=DB::table('url')->where('slug',$req->slug )->value('clicks');
    $clicks=$clicks+1;
    DB::table('url')->where('slug',$req->slug )->update(['clicks'=>$clicks]);





 return redirect($url);
    }
}
