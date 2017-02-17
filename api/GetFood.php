<?php
namespace Medoo;
require "../public/Medoo.php"; // 引入数据库类

class GetFood {
    // connect info
    public $option_connect = array(
        'database_type' => 'mysql',
        'database_name' => 'eat',
        'server' => 'localhost',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
        'port'  => 3306,
        'prefix' => 'eat_' // 前缀
        );
    // new connect
    public $connect = '';
    // param
    private $food  = array();

    public function __construct()
    {
        $this->connect = new Medoo($this->option_connect); // new class
    }

    /**
     * [getList get food list]
     * @author mr.zhou <zhouwei9280@gmail.com>
     */
    public function getList()
    {
        $list  =  $this->connect ->select("list",array('title','type'));
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


