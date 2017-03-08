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

    function getIndex(){
        $menuModel=Menu::find('1');
        $menulist=$menuModel->getMenuList();
        return view('admin/index/index',['list'=>$menulist]);
    }
}
