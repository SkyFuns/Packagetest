<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Packagetest;
class TestController extends Controller
{
    public function test(Request $request){
        $a = Packagetest::test_rtn('Aex');
        return view('Packagetest::packagetest',['msg'=>$a]);
    }
}