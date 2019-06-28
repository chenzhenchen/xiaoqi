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
    /**
     * 首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('home.index');
    }

    /**
     * 关于我们
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        return view('home.about');
    }

    /**
     * 董事会
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function board()
    {
        return view('home.team.board');
    }

    /**
     * 高级管理层
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function leader()
    {
        return view('home.team.leader');
    }

    /**
     * 设计及项目团队
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function designer()
    {
        return view('home.team.designer');
    }

}