<?php
ini_set('max_execution_time', 0);
ini_set('memory_limit', '-1');
set_time_limit(0);
// while (@ob_end_flush());
$base_dir 			=	dirname(dirname($_SERVER["SCRIPT_FILENAME"]))						;	 
$nonchange_base_dir	= 	$base_dir ;
require_once ($base_dir . "/app/Mage.php");

Mage::app()->setCurrentStore(Mage::getModel('core/store')->load(Mage_Core_Model_App::ADMIN_STORE_ID));
$installer = new Mage_Eav_Model_Entity_Setup('core_setup');
$installer->startSetup();
$attribute  = array(
    'type' => 'varchar',
    'label'=> 'Category Sku',
    'input' => 'text',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible' => true,
    'required' => false,
    'user_defined' => true,
    'default' => "",
	'unique' => true,
    'group' => "General Information"
);
$installer->addAttribute('catalog_category', 'category_sku', $attribute);
$installer->endSetup();

