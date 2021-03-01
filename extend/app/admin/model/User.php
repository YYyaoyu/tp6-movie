<?php 
namespace app\admin\model;
use think\Model;

class User extends Model{
    // public function find(){
    //     $find = User::where('id',1)->find();
    //     return $find;
    // }
    public function register($a,$b){
        $register = User::create([
            // 'id' =>  3,
            'order' =>  '{"a":"s"}',
            'password' =>  $b,
            'reg_time' => date("Y-m-d H:i:s",time()),
            'username' => $a,
            'sex' => '男',
            'provinceid' => '340000',
            'cityid' => '340100',
            'areaid' => '340104'
        ]);
        return $register;
    }
    public function add($param){
        $add = User::create([
            // 'id' =>  3,
            'order' =>  '{"a":"s"}',
            'password' =>  $param['password'],
            'reg_time' => date("Y-m-d H:i:s",time()),
            'username' => $param['username'],
            'sex' => $param['sex'],
            'provinceid' => $param['provinceid'],
            'cityid' => $param['cityid'],
            'areaid' => $param['areaid']
        ]);
        return $add;
    }
    public function edit($param){
        $edit = User::where('id',$param['id'])
        ->update(
            [
                'username' => $param['username'],
                'sex' => $param['sex'],
                'provinceid' => $param['provinceid'],
                'cityid' => $param['cityid'],
                'areaid' => $param['areaid'],
            ]
        );
    }
    public function del($ids){
        $delete = User::destroy(explode(",", $ids));
    }
}