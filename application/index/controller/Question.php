<?php
namespace app\index\controller;
/**
 * Created by PhpStorm.
 * User: imdante
 * Date: 2016/11/30
 * Time: 12:20
 */
class Question extends Common {
    public function index(){
        return $this->fetch();
    }

    public function lists(){
        return $this->fetch();
    }

    public function article(){
        return $this->fetch();
    }
}