<?php
namespace Medoo;
include "./PublicFood.php";
class GetFood extends PublicFood {
    // param
    private $food  = array();

    /**
     * [getList get food list]
     * @author mr.zhou <zhouwei9280@gmail.com>
     */
    public function getList()
    {
        $list  =  $this->connect->select("list",array('title','type'));
        foreach ($list as $k=>$v){
            switch ($v['type']){
                case 1 :
                    $this->food['breakfase'][] = $v['title'];
                    break;
                case 2 :
                    $this->food['lunch'][] = $v['title'];
                    break;
                case 3 :
                    $this->food['dinner'][] = $v['title'];
                    break;
            }
        }
        $this->food['breakfase'] = $this->food['breakfase'] ?  $this->food['breakfase'] : array();

        if(!isset($this->food['breakfase'] )){$this->food['breakfase'] = array();}
        if(!isset($this->food['lunch'] )){$this->food['lunch'] = array();}
        if(!isset($this->food['dinner'] )){$this->food['dinner'] = array();}

        echo json_encode($this->food);
    }
}

$eat = new GetFood();
$eat -> getList();


