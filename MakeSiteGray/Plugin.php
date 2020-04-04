<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
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
	public static function config(Typecho_Widget_Helper_Form $form)
	{
		$btn_status = new Typecho_Widget_Helper_Form_Element_Checkbox('btn_status',
		array(1=>_t('开启')),NULL,_t('MakeSiteGray状态'),_t('缺省不开启'));
		$form->addInput($btn_status);
	}
	 
	/* 个人用户的配置方法 */
	public static function personalConfig(Typecho_Widget_Helper_Form $form){}
	 
	/* 插件实现方法 */
	public static function render(){}
	
	public static function header()
	{
		$options = Helper::options();
		$settings = $options->plugin('MakeSiteGray');
		$btn_status = $settings->btn_status;

		if($btn_status)
		{
			$cssUrl = Helper::options()->pluginUrl . '/MakeSiteGray/src/style.css';
			echo '<link rel="stylesheet" type="text/css" href="' . $cssUrl . '" />';
		}
    }
}