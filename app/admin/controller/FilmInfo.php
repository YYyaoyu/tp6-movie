<?php
namespace app\admin\controller;

use app\BaseController;
use think\facade\Request;
use app\admin\model\Film;

class FilmInfo extends BaseController
{
    private $film;
    private $result;

    public function initialize()
    {
        $this->film = new Film();
        $this->result = $this->film->select();
    }

    public function index()
    {
       
    }

    public function search(){
        return json(array('count'=>sizeof($this->result),'datalist'=>$this->result));
    }

   
    public function edit()
    {
        $param = Request::param();
        $this->film->edit($param);
        $response=array("response"=>'success','result'=>'编辑成功');
        return json($response);
    }

    public function del(){
        $param = Request::param();
        $this->film->del($param['ids']);
        $response=array("response"=>'success','result'=>'删除成功');
        return json($response);
    }

    public function add(){
        $param = Request::param();
        $this->film->add($param);
        $response=array("response"=>'success','result'=>'添加成功');
        return json($response);
    }


}
