<?php 
namespace app\common\model;
use think\Model;

class Areas extends Model{
    public function find(){
        $find = Areas::where('id',1)->find();
        return $find;
    }
  
}