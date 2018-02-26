<?php

/**
 * FineCMS 公益软件
 *
 * @策划人 李睿
 * @开发组自愿者  邢鹏程 刘毅 陈锦辉 孙华军
 */

class Upgrade extends M_Controller {

    /**
     * 程序管理
     */
    public function index() {

        $this->template->assign(array(
            'menu' => $this->get_menu_v3(array(
                fc_lang('升级PHP7CMS') => array('admin/upgrade/php7cms', 'refresh'),
            )),
        ));
        $this->template->display('php7cms.html');
    }

    /**
     * 程序管理
     */
    public function php7cms() {

        $this->template->assign(array(
            'menu' => $this->get_menu_v3(array(
                fc_lang('升级PHP7CMS') => array('admin/upgrade/php7cms', 'refresh'),
            )),
        ));
        $this->template->display('php7cms.html');
    }



}