<?php
namespace app\admin\controller;

use app\BaseController;
use think\facade\Request;
use app\admin\model\User;
use app\common\model\Provinces;
use app\common\model\Cities;
use app\common\model\Areas;

class UserInfo extends BaseController
{
    private $user;
    private $provinces;
    private $cities;
    private $areas;
    private $result;

    public function initialize()
    {
        $this->user = new User();
        $this->provinces = new Provinces();
        $this->cities = new Cities();
        $this->areas = new Areas();

        $this->result = $this->user->select();
    }

    public function index()
    {
        // var_dump($a);
        // $q=[
        //     1 => 'PC ddsaWeb',
        //     2 => 'iPad HD',
        //     5 => 'Touch'
        // ];
        // return json($q);
        // $name = $_POST['username']; 
        // $password = $_POST['password']; 
        // return $name;
        return json(array('count'=>sizeof($this->result),'datalist'=>$this->result));
    }

    public function search(){
        $page = $_POST['page'];
        $num = $_POST['num'];
        $result = $this->user->limit($num*($page-1), $num)->select();
        foreach ($result as $value) {
            $provinceid = $value->provinceid;
            $cityid = $value->cityid;
            $areaid = $value->areaid;

            $province = $this->provinces->where('provinceid',$provinceid)->find();
            $city = $this->cities->where('cityid',$cityid)->find();
            $area = $this->areas->where('areaid',$areaid)->find();

            $value['province'] = $province['province'];
            $value['city'] = $city['city'];
            $value['area'] = $area['area'];

        }
        return json(array('count'=>sizeof($this->result),'datalist'=>$result));
    }

    public function login(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(!$username){
            $status = 'fail';
            $result = '用户名不能为空'; 
        }
        if(!$password){
            $status = 'fail';
            $result = '密码不能为空';
        }
        if($this->user->where('username', $username)->find()){
            if($password == $this->user->where('username', $username)->value('password')){
                $status = 'success';
                $result = '登录成功'; 
            }else{
                $status = 'fail';
                $result = '密码错误'; 
            }
           
        }else{
            if($username&&$password){
                $newUser = $this->user->add($username,$password);
                $status = 'success';
                $result = '注册成功'; 
            }
        
        }
        $response=array("response"=>$status,'result'=>$result);
        return json($response);
        
    }

    public function edit()
    {
        $param = Request::param();
        $this->user->edit($param);
        $response=array("response"=>'success','result'=>'编辑成功');
        return json($response);
    }

}
