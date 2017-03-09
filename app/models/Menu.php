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

    public function getMenuList($pir_list=array())
    {
        if(empty($pir_list)){
            $pir_list=$this->where('pid','0')->orderBy('sort')->get()->toArray();
        }
        foreach ($pir_list as &$value){
            $value['child']=$this->where('pid',$value['id'])->orderBy('sort')->get()->toArray();
        }
        return $pir_list;
    }

}
