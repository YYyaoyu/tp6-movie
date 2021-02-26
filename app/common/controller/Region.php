<?php
namespace app\common\controller;

use app\BaseController;
use app\common\model\Provinces;
use app\common\model\Cities;
use app\common\model\Areas;
use app\common\model\Districts;

class Region extends BaseController
{
    private $provinces;
    private $cities;
    private $areas;
    private $districts;

    public function initialize() 
    {
        $this->provinces = new Provinces();
        $this->cities = new Cities();
        $this->areas = new Areas();
        $this->districts = new Districts();
    }

    public function index()
    {
       
        // $q=[
        //     1 => 'PC Web',
        //     2 => 'iPad HD',
        //     5 => 'Touch'
        // ];
        // return json($q);
        // return View::fetch('index.html');
        // return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V' . \think\facade\App::version() . '<br/><span style="font-size:30px;">14载初心不改 - 你值得信赖的PHP框架</span></p><span style="font-size:25px;">[ V6.0 版本由 <a href="https://www.yisu.com/" target="yisu">亿速云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ee9b1aa918103c4fc"></think>';
    }

    public function getProvinces()
    {
        return $this->provinces->select();
    }

    public function getCities()
    {
        $provinceid = $_POST['provinceid'];
        return $this->cities->where('provinceid',$provinceid)->select();
    }

    public function getAreas()
    {
        $cityid = $_POST['cityid'];
        return $this->areas->where('cityid',$cityid)->select();
    }

    public function getDistricts()
    {
        $areaid = $_POST['areaid'];
        return $this->districts->where('areaid',$areaid)->select();
    }

    public function getTreeDistricts()
    {
        $areas = $this->getAreas();
        $result = array();
        foreach ($areas as $key => $value1) {
            $arr = array();
            $data= $this->districts->where('areaid',$value1->areaid)->select();
            $item1 = array('text'=>'','children'=>[]);
            foreach ($data as $value2) {
                $item2 = array('text'=>$value2['district'],'id'=>$value2['districtid'],'value'=>$value2['districtid']);
                array_push($arr,$item2);
            }
            $item1['children'] = $arr;
            $item1['count'] = count($arr);
            $item1['text'] = $value1['area'].'('.count($arr).')';
            array_push($result,$item1);
            
        }
        array_unshift($result,array('text'=>'全部','children'=>array(array('text'=>'全部','id'=>'0','value'=>'0'))));

        return json($result);
       
    }


}
