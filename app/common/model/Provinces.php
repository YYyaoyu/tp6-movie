<?php 
namespace app\common\model;
use think\Model;

class Provinces extends Model{
    public function find(){
        $find = Provinces::where('id',1)->find();
        return $find;
    }
  
}