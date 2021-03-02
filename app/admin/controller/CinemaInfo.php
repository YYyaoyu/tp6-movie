<?php
namespace app\admin\controller;

use app\BaseController;
use think\facade\Request;
use app\admin\model\Cinema;
use app\common\model\Provinces;
use app\common\model\Cities;
use app\common\model\Areas;
use app\common\model\Districts;

class CinemaInfo extends BaseController
{
    private $cinema;
    private $provinces;
    private $cities;
    private $areas;
    private $districts;
    private $result;

    public function initialize()
    {
        $this->cinema = new Cinema();
        $this->provinces = new Provinces();
        $this->cities = new Cities();
        $this->areas = new Areas();
        $this->districts = new Districts();

        $this->result = $this->cinema->select();
    }

    public function index()
    {
       
        return json(array('count'=>sizeof($this->result),'datalist'=>$this->result));
    }

    public function search(){
        $page = $_POST['page'];
        $num = $_POST['num'];    
        // if(isset($_POST['provinceid'])&&$_POST['provinceid']
        // ||isset($_POST['cityid'])&&$_POST['cityid']
        // ||isset($_POST['areaid'])&&$_POST['areaid']
        // ||isset($_POST['districtid'])&&$_POST['districtid']
        // ||isset($_POST['itemTip'])&&$_POST['itemTip']

        // ){
            // if(isset($_POST['provinceid'])&&$_POST['provinceid']){
            //     $result = $this->cinema
            //     ->where('provinceid', $_POST['provinceid'])
            //     ->limit($num*($page-1), $num)
            //     ->select();
            // }
            // if(isset($_POST['cityid'])&&$_POST['cityid']){
            //     $result = $this->cinema
            //     ->where('cityid', $_POST['cityid'])
            //     ->limit($num*($page-1), $num)
            //     ->select();
            // }
            // if(isset($_POST['areaid'])&&$_POST['areaid']){
            //     $result = $this->cinema
            //     ->where('areaid', $_POST['areaid'])
            //     ->limit($num*($page-1), $num)
            //     ->select();
            // }
            // if(isset($_POST['districtid'])&&$_POST['districtid']){
            //     // print_r($_POST['itemTip']);
            //     // print_r($this->getConditionTips());
            //     // $result = $this->cinema
            //     // ->where('districtid', $_POST['districtid'])
            //     // // ->where('item','like','%'.'可停车，退票，改签'.'%')
            //     // ->limit($num*($page-1), $num)
            //     // ->select();
            //     $map['districtid'] = $_POST['districtid'];

            //     $result = $this->cinema->where($map)->select();
            // }
            $map = array();
            // if(isset($_POST['provinceid'])&&$_POST['provinceid']){
            //     $map['provinceid'] = $_POST['provinceid'];
            // }
            // if(isset($_POST['cityid'])&&$_POST['cityid']){
            //     $map['cityid'] = $_POST['cityid'];
            // }
            // if(isset($_POST['areaid'])&&$_POST['areaid']){
            //     $map['areaid'] = $_POST['areaid'];
            // }
            // if(isset($_POST['districtid'])&&$_POST['districtid']){
            //     $map['districtid'] = $_POST['districtid'];
            // }
            if(isset($_POST['itemTip'])&&$_POST['itemTip']){
                // $map['districtid'] = $_POST['districtid'];
            $map[] = ['item','like','%改签%'];

            }
            $result = $this->cinema->where('item', 'like', '%改签%')->select();

            // $result = $this->cinema
            // ->where($map)
            // // ->limit($num*($page-1), $num)
            // ->select();

            // if(isset($_POST['itemTip'])&&$_POST['itemTip']){
            //     $result = $this->cinema
            //     ->whereOr('districtid', $_POST['districtid'])
            //     ->limit($num*($page-1), $num)
            //     ->select();
            // }
        // }else{
        //     $result = $this->cinema
        //     ->limit($num*($page-1), $num)
        //     ->select();
        // }
        
        $conditionTips = $this->getConditionTips();

        foreach ($result as $value) {
            $provinceid = $value->provinceid;
            $cityid = $value->cityid;
            $areaid = $value->areaid;
            $districtid = $value->districtid;

            $province = $this->provinces->where('provinceid',$provinceid)->find();
            $city = $this->cities->where('cityid',$cityid)->find();
            $area = $this->areas->where('areaid',$areaid)->find();
            $district = $this->districts->where('districtid',$districtid)->find();

            $value['province'] = $province['province'];
            $value['city'] = $city['city'];
            $value['area'] = $area['area'];
            $value['district'] = $area['district'];
//             $item = explode(',', $value->item);
//             foreach($item as $v){
//                 if($v == $_POST['itemTip']){
//             $a = $this->cinema->where('item','like','%'.$_POST['itemTip'].'%')->find();
// echo $a;
//                 }
//             }
        }
        return json(array('count'=>sizeof($this->result),'datalist'=>$result));
    }

    public function edit()
    {
        $param = Request::param();
        $this->cinema->edit($param);
        $response=array('response'=>'success','result'=>'编辑成功');
        return json($response);
    }

    public function del()
    {
        $param = Request::param();
        $this->cinema->del($param['ids']);
        $response=array('response'=>'success','result'=>'删除成功');
        return json($response);
    }

    public function add()
    {
        $param = Request::param();
        $this->cinema->add($param);
        $response=array('response'=>'success','result'=>'添加成功');
        return json($response);
    }

    public function getConditionTips() 
    {
        $data = array(
            'item'=>
            array(
                '可停车',
                '退票',
                '改签'
            )
        );
        return json($data);
    }

}
