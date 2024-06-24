<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    public function showUserName()
    {
//     return "Shahd alrahbi";


    }

    public function getIndex()
    {
//        return view('welcome')-> with('name','shahd');
//        $data=[];
        $data=['a'=> 'shahd','b'=> 'saad'];
        return view('welcome',compact('data'));
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
