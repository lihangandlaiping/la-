<?php

namespace App\Http\Controllers\Admin;

use App\models\Member;
use App\models\Menu;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //

    /**
     * 加载后台首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function getIndex(){
        $menulist=Menu::GetMenuList();
//        Member::Abc();
        return view('admin/index/index',['menulist'=>$menulist]);
    }
}
