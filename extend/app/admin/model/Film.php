<?php 
namespace app\admin\model;
use think\Model;

class Film extends Model{
    public function add($param){
        $add = Film::create([
            'name' => $param['name'],
            'rate' => $param['rate'],
            'dir' => $param['dir'],
            'star' => $param['star'],
            'catid' => $param['catid'],
            'fra' => $param['fra'],
            'showTime' => $param['showTime'],
            'hours' => $param['hours'],
            'info' => $param['info'],
        ]);
        return $add;
    }
    public function edit($param){
        $edit = Film::where('id',$param['id'])
        ->update(
            [
                'name' => $param['name'],
                'rate' => $param['rate'],
                'dir' => $param['dir'],
                'star' => $param['star'],
                'catid' => $param['catid'],
                'fra' => $param['fra'],
                'showTime' => $param['showTime'],
                'hours' => $param['hours'],
                'info' => $param['info'],
            ]
        );
    }
    public function del($ids){
        $delete = Film::destroy(explode(",", $ids));
    }
}