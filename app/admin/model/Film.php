<?php 
namespace app\admin\model;
use think\Model;

class Film extends Model{
    // public function add($param){
    //     $add = User::create([
    //         // 'id' =>  3,
    //         'order' =>  '{"a":"s"}',
    //         'password' =>  $param['password'],
    //         'reg_time' => date("Y-m-d H:i:s",time()),
    //         'username' => $param['username'],
    //         'sex' => $param['sex'],
    //         'provinceid' => $param['provinceid'],
    //         'cityid' => $param['cityid'],
    //         'areaid' => $param['areaid']
    //     ]);
    //     return $add;
    // }
    // public function edit($param){
    //     $edit = User::where('id',$param['id'])
    //     ->update(
    //         [
    //             'username' => $param['username'],
    //             'sex' => $param['sex'],
    //             'provinceid' => $param['provinceid'],
    //             'cityid' => $param['cityid'],
    //             'areaid' => $param['areaid'],
    //         ]
    //     );
    // }
    // public function del($ids){
    //     $delete = User::destroy(explode(",", $ids));
    // }
}