<?php
namespace app\admin\controller;

use app\BaseController;
use think\facade\Request;
use app\admin\model\Cinema;
use app\common\model\Provinces;
use app\common\model\Cities;
use app\common\model\Areas;

class CinemaInfo extends BaseController
{
    private $cinema;
    private $provinces;
    private $cities;
    private $areas;
    private $result;

    public function initialize()
    {
        $this->cinema = new Cinema();
        $this->provinces = new Provinces();
        $this->cities = new Cities();
        $this->areas = new Areas();

        $this->result = $this->cinema->select();
    }

    public function index()
    {
       
        return json(array('count'=>sizeof($this->result),'datalist'=>$this->result));
    }

    public function search(){
        $page = $_POST['page'];
        $num = $_POST['num'];    
        if(isset($_POST['provinceid'])&&$_POST['provinceid']||isset($_POST['cityid'])&&$_POST['cityid']||isset($_POST['areaid'])&&$_POST['areaid']){
            $result = $this->cinema
            ->where([
                ['provinceid', '=', $_POST['provinceid']],
                ['cityid', '=', $_POST['cityid']],
                ['areaid', '=', $_POST['areaid']],
                ])
            ->limit($num*($page-1), $num)
            ->select();
        }else{
            $result = $this->cinema
            ->limit($num*($page-1), $num)
            ->select();
        }
        
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

    public function edit()
    {
        $param = Request::param();
        $this->cinema->edit($param);
        $response=array("response"=>'success','result'=>'编辑成功');
        return json($response);
    }

    public function del(){
        $param = Request::param();
        $this->cinema->del($param['ids']);
        $response=array("response"=>'success','result'=>'删除成功');
        return json($response);
    }

    public function add(){
        $param = Request::param();
        $this->cinema->add($param);
        $response=array("response"=>'success','result'=>'添加成功');
        return json($response);
    }


}
