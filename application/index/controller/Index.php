<?php
namespace app\index\controller;
use app\api\Category;

/**
 * Created by PhpStorm.
 * User: imdante
 * Date: 2016/11/30
 * Time: 12:20
 */
class Index extends Common {
    public function index(){
        return $this->fetch();
    }
    public function all_category(){
        $cateogry = Category::datalist();
        $this->assign('list',unlimitedForChild($cateogry));

        return $this->fetch();
    }
}