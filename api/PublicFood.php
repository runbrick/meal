<?php
namespace Medoo;
include_once "../public/Medoo.php";

/**
 * Class PublicFood
 * @package Medoo
 * 爱心便当公用方法
 */
class PublicFood{
    // 数据库信息
    protected $option_connect = array(
        'database_type' => 'mysql',
        'database_name' => 'eat',
        'server' => '27.122.56.118',
        'username' => 'mlyxy',
        'password' => '123456',
        'charset' => 'utf8',
        'port'  => 3306,
        'prefix' => 'eat_'
    );
    // 连接数据库初始化
    protected $connect = '';

    function __construct()
    {
        $this->connect = new Medoo($this->option_connect);
    }


}