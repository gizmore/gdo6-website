<?php
namespace GDO\Website;

use GDO\Core\GDO_Module;
use GDO\Core\Website;
use GDO\Form\GDT_AntiCSRF;

/**
 * Setup metadata for your GDT_Page.
 * @link https://www.matuzo.at/blog/html-boilerplate/
 * @author gizmore
 * @version 6.10.5
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
    
    public function onInit()
    {
        $meta = [
            'csrf-token',
            GDT_AntiCSRF::fixedToken(),
            'name',
        ];
        Website::addMeta($meta);
    }
    
}
