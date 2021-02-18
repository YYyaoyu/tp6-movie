<?php 
namespace app\admin\model;
use think\Model;

class Cinema extends Model{
    public function add($param){
        $add = Cinema::create([
            'name' => $param['name'],
            'rate' =>  $param['rate'],
            'provinceid' => $param['provinceid'],
            'cityid' => $param['cityid'],
            'areaid' => $param['areaid'],
            'address' => $param['address'],
            'tel' => $param['tel'],
            'item' => $param['item'],
        ]);
        return $add;
    }
    public function edit($param){
        $edit = Cinema::where('id',$param['id'])
        ->update(
            [
                'name' => $param['name'],
                'rate' =>  $param['rate'],
                'provinceid' => $param['provinceid'],
                'cityid' => $param['cityid'],
                'areaid' => $param['areaid'],
                'address' => $param['address'],
                'tel' => $param['tel'],
                'item' => $param['item'],
            ]
        );
    }
    public function del($ids){
        $delete = Cinema::destroy(explode(",", $ids));
    }
}