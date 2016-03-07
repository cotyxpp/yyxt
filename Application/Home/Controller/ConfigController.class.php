<?php
/**
 * Created by PhpStorm.
 * User: xm
 * Date: 16/2/20
 * Time: 17:49
 */
namespace Home\Controller;

class ConfigController extends CommonController {

    //配置列表
    public function index() {
        $map  = array('status' => 1);
        $list = M('config')->where($map)->select();
        $this->assign('list', $list);
        $this->assign('type', C('CONFIG_TYPE_LIST'));
        $this->assign('group', C('CONFIG_GROUP_LIST'));

        $this->display();

    }

    //设置
    public function group() {
        $type = C('CONFIG_GROUP_LIST');
        $list = M("Config")->where('status=1')->field('id,group,name,title,extra,value,remark,type')->order('sort asc,id asc')->select();
        if ($list) {
            $this->assign('list', $list);
        }
        //dump($list);
        $this->meta_title = '网站设置';
        $this->display();
    }
}