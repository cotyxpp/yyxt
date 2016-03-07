<?php
namespace Home\Controller;
use Common\Api\ConfigApi;
use Think\Controller;

class CommonController extends Controller {

    protected function _initialize() {
        $config = S('DB_CONFIG_DATA');
        if (!$config) {
            $config = ConfigApi::lists();
            S('DB_CONFIG_DATA', $config);
        }
        C($config);
        $this->assign('__MENU__',$this->getMenus());
    }
    //组合多维数组
    final public function unlimitForLayer($cate, $pid = 0, $name= 'child'){
        $arr = array();
        foreach ($cate as $v){
            if($v['pid'] == $pid){
                $v[$name] = self::unlimitForLayer($cate, $v['id'], $name);
                $arr[] = $v;
            }
        }
        return $arr;
    }
    /**
     * 获取控制器菜单数组,二级菜单元素位于一级菜单的'_child'元素中
     * @author 朱亚杰  <xcoolcc@gmail.com>
     */
    final public function getMenus(){
        //$menus  =   session('ADMIN_MENU_LIST');
        if(empty($menus)){
            // 获取主菜单
            $where['hide']  =   0;
            if(!C('DEVELOP_MODE')){ // 是否开发者模式
                $where['is_dev']    =   0;
            }
            $menus  =   M('Menu')->where($where)->order('pid asc,sort asc,id asc')->field('id,title,pid,url,icon')->select();
            foreach ($menus as $key => $item) {
                // 判断主菜单权限
                if ( !IS_ROOT && !$this->checkRule(strtolower(MODULE_NAME.'/'.$item['url']),AuthRuleModel::RULE_MAIN,null) ) {
                    unset($menus[$key]);
                    continue;//继续循环
                }
                if(strtolower(CONTROLLER_NAME.'/'.ACTION_NAME)  == strtolower($item['url'])){
                    $menus[$key]['class']=1;
                    $this->meta_title = $menus[$key]['title'];
                }
            }
            $menus = $this->unlimitForLayer($menus);
            session('ADMIN_MENU_LIST',$menus);
        }
        return $menus;
    }
    /**
     * 权限检测
     * @param string  $rule    检测的规则
     * @param string  $mode    check模式
     * @return boolean
     * @author 朱亚杰  <xcoolcc@gmail.com>
     */
    final protected function checkRule($rule, $type=AuthRuleModel::RULE_URL, $mode='url'){
        static $Auth    =   null;
        if (!$Auth) {
            $Auth       =   new \Think\Auth();
        }
        if(!$Auth->check($rule,UID,$type,$mode)){
            return false;
        }
        return true;
    }

    /**
     * 检测是否是需要动态判断的权限
     * @return boolean|null
     *      返回true则表示当前访问有权限
     *      返回false则表示当前访问无权限
     *      返回null，则表示权限不明
     *
     * @author 朱亚杰  <xcoolcc@gmail.com>
     */
    protected function checkDynamic(){}


    /**
     * action访问控制,在 **登陆成功** 后执行的第一项权限检测任务
     *
     * @return boolean|null  返回值必须使用 `===` 进行判断
     *
     *   返回 **false**, 不允许任何人访问(超管除外)
     *   返回 **true**, 允许任何管理员访问,无需执行节点权限检测
     *   返回 **null**, 需要继续执行节点权限检测决定是否允许访问
     * @author 朱亚杰  <xcoolcc@gmail.com>
     */
    final protected function accessControl(){
        $allow = C('ALLOW_VISIT');
        $deny  = C('DENY_VISIT');
        $check = strtolower(CONTROLLER_NAME.'/'.ACTION_NAME);
        if ( !empty($deny)  && in_array_case($check,$deny) ) {
            return false;//非超管禁止访问deny中的方法
        }
        if ( !empty($allow) && in_array_case($check,$allow) ) {
            return true;
        }
        return null;//需要检测节点权限
    }

}