<?php
namespace GDO\Website;

use GDO\Core\GDO_Module;

/**
 * Setup metadata for your GDT_Page.
 * @link https://www.matuzo.at/blog/html-boilerplate/
 * @author gizmore
 * @version 6.10.4
 * @since 6.10.2
 */
final class Module_Website extends GDO_Module
{
    public $module_priority = 95;
    
    public function onLoadLanguage() { return $this->loadLanguage('lang/website'); }

    public function getConfig()
    {
        return [
            
        ];
    }
    
}
