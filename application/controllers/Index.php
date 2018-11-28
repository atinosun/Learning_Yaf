<?php
/**
 * User: atinosun@yeah.net
 * Date: 2018/11/28
 * Time: 11:27
 * Brief: 默认控制器
 */

class IndexController extends Yaf_Controller_Abstract {
    public function indexAction() {//默认Action
        $this->getView()->assign("welcome", "Welcome to atino.top!");
    }
}
