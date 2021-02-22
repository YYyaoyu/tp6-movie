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

    public function getType(){
        $type = [
            [
                'id'=>'1',
                'name'=>'剧情'
            ],
            [
                'id'=>'2',
                'name'=>'喜剧'
            ],
            [
                'id'=>'3',
                'name'=>'动画'
            ],

        ];
        return $type;
    }
    public function search(){
        $page = $_POST['page'];
        $num = $_POST['num'];
        if(isset($_POST["showTime"])&&$_POST['showTime']){
            $result = $this->film
                ->where([
                    ['showTime', '=', $_POST['showTime']]
                ])
                ->limit($num*($page-1), $num)
                ->select();
        }else{
            $result = $this->film
                ->limit($num*($page-1), $num)
                ->select();
        }
        
        $type = $this->getType();
        foreach ($result as $value1) {
            $catid = $value1->catid;
            foreach ($type as $value2) {
                $typeid = $value2['id'];
                if($catid==$typeid){
                    $value1->cat=$value2['name'];
                }
            }
        }
        return json(array('count'=>sizeof($this->result),'datalist'=>$result));
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
