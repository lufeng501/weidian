<?php
defined('BASEPATH') or die('Access restricted!');
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-10-08
 * Time: 00:05
 */
require_once(APPPATH . 'libraries/smarty/libs/Smarty.class.php');

class CI_Smarty extends Smarty {

    public function __construct($template_dir = '', $compile_dir = '', $config_dir = '', $cache_dir = '') {
        parent::__construct();
        $this->left_delimiter = "<{";
        $this->right_delimiter = "}>";
        if (is_array($template_dir)) {
            foreach ($template_dir as $key => $value) {
                $this->$key = $value;
            }
        } else {
            $this->template_dir = $template_dir ? $template_dir : APPPATH . '/templates';
            $this->compile_dir = $compile_dir ? $compile_dir : APPPATH . '/templates_c';
            $this->config_dir = $config_dir ? $config_dir : APPPATH . '/libraries/smarty/config';
            $this->cache_dir = $cache_dir ? $cache_dir : APPPATH . '/libraries/smarty/cache';
        }
    }

    /**
     * 渲染模板文件
     * @param $templateFile
     * @param array $renderData
     */
    public function render($templateFile,$renderData=array()) {
        $this->assign($renderData);
        $this->display($templateFile);
    }

}