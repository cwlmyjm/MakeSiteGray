<?php
/**
 * Make Site Gray
 * 
 * @package MakeSiteGray
 * @author Jinming YAO
 * @version 1.0.0
 * @dependence 9.9.2-*
 * @link http://typecho.org
 */
class MakeSiteGray_Plugin implements Typecho_Plugin_Interface
{
	/* 激活插件方法 */
	public static function activate()
	{
        Typecho_Plugin::factory('Widget_Archive')->header = array('MakeSiteGray_Plugin', 'header');
	}
	 
	/* 禁用插件方法 */
	public static function deactivate(){}
	 
	/* 插件配置方法 */
	public static function config(Typecho_Widget_Helper_Form $form){}
	 
	/* 个人用户的配置方法 */
	public static function personalConfig(Typecho_Widget_Helper_Form $form){}
	 
	/* 插件实现方法 */
	public static function render(){}
	
	public static function header() {
        $cssUrl = Helper::options()->pluginUrl . '/MakeSiteGray/src/style.css';
        echo '<link rel="stylesheet" type="text/css" href="' . $cssUrl . '" />';
    }
}