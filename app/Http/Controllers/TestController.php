<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return "hello i m in controller";
    }

    public function viewWithoutMessage()
    {
        $user =['Nishant','sushil','kajal','test'];
        return view('message.alert',['a'=>45,'b'=>46,'msg'=>'In alert','v'=>4,'users'=>$user]); 
    }

    public function viewWithMessage($msg=null)
    {
        return view('message',['a'=>45,'b'=>46,'msg'=>$msg]); 
    }

    public function redirects()
    {
        echo url("/blade/msg");
        echo '<br>'.route('test');

    }
}
