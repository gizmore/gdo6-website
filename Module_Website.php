<?php
namespace GDO\Website;

use GDO\Core\GDO_Module;
use GDO\Core\Website;
use GDO\Form\GDT_AntiCSRF;
use GDO\UI\GDT_Color;
use GDO\Net\GDT_Url;

/**
 * Setup metadata for your GDT_Page.
 * 
 * @link https://www.matuzo.at/blog/html-boilerplate/
 * @author gizmore
 * @version 6.11.4
 * @since 6.10.2
 */
final class Module_Website extends GDO_Module
{
    public $module_priority = 95;
    
    public function onLoadLanguage() { return $this->loadLanguage('lang/website'); }

    public function getConfig()
    {
    	return [
    		GDT_Color::make('theme_color')->initial('#a0b070'),
    	];
    }
    
    public function cfgThemeColor() { return $this->getConfigVar('theme_color'); }
    
    public function onIncludeScripts()
    {
    	$meta = [
    		'csrf-token',
    		GDT_AntiCSRF::fixedToken(),
    		'name',
    	];
    	Website::addMeta($meta);
    	Website::addHead(sprintf('<meta property="og:title" content="%s">', Website::displayTitle()));
    	Website::addHead(sprintf('<meta property="og:type" content="%s">', t('application_type')));
    	Website::addHead(sprintf('<meta property="og:url" content="%s">', html(GDT_Url::absolute(urldecode((string)@$_SERVER['REQUEST_URI'])))));
    	Website::addHead(sprintf('<meta name="theme-color" content="%s">', $this->getConfigVar('theme_color')));
    }
    
}
