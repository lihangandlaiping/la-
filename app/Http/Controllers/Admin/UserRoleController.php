<?php
/**
 * 角色管理控制器
 */
namespace App\Http\Controllers\Admin;

use App\models\UserRole;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserRoleController extends Controller
{
    /**
     * @var string 标题
     */
    public $menuTitle = '角色管理';

    /**
     * 角色控制器列表显示
     */
    function getIndex($name = '', $status = '')
    {
        $where = array();
        if ($name) $where['rolename'] = array('like', '%' . $name . '%');
        if ($status) $where['disabled'] = array($status);
        $list = UserRole::where($where)->paginate('1');
        return view('admin/userRole/index', ['list' => $list, 'name' => $name, 'status' => $status, 'menuTitle' => $this->menuTitle]);
    }

    /**
     * 角色添加与修改
     * @param string $id
     * @param string $action
     */
    function anyEdit($id='',$action='add'){

    }
}
