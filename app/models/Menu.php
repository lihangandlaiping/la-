<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\models\Menu
 *
 * @mixin \Eloquent
 */
class Menu extends Model
{
    protected $table='menu';

    public function scopeGetMenuList($obj='',$pir_list=array())
    {
        if(empty($pir_list)){
            $pir_list=Menu::where('pid','0')->get()->toArray();
        }
        foreach ($pir_list as &$value){
            $value['child']=Menu::where('pid',$value['id'])->get()->toArray();
        }
        return $pir_list;
    }

}
