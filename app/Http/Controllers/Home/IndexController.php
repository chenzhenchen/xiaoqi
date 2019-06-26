<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/26
 * Time: 15:28
 */

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
}