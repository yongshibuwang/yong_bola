<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class FatherController extends Controller
{
    //
    /**
     * 获取用户真实ip
     * @author 勇☆贳&卟☆莣
     * */
    function getIp(){
        if (!empty($_SERVER['HTTP_CLIENT_IP'])){
            $ip= $_SERVER['HTTP_CLIENT_IP'];
        }
//ip是否来自代理
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            $ip= $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
//ip是否来自远程地址
        else{
            $ip= $_SERVER['REMOTE_ADDR'];
        }
        return ($ip);
    }
}
