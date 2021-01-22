<?php 
namespace app\common\model;
use think\Model;

class Cities extends Model{
    public function find(){
        $find = Cities::where('id',1)->find();
        return $find;
    }
  
}