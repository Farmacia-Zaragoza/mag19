<?php
ini_set('max_execution_time', 0);
ini_set('memory_limit', '-1');
set_time_limit(0);
$br = '</br>' ; 
// while (@ob_end_flush());
require_once ("/ssd/home/ser/zd/main/es/zdom/tst/magento/zd_main_chek/es/app/Mage.php");
include_once "/brqx/tests/spyc/Spyc.php"; // Yaml parser include

echo "Loading File" . $br ; 
// We have multiple versions
$PHP_VER='v56';
//echo "/brqx/base/rcode/" . $PHP_VER . "/gen/v0_0_1/rphp/objects/magento/zz_list.lib";
include_once "/brqx/base/rcode/" . $PHP_VER . "/gen/v0_0_1/rphp/objects/magento/zz_list.lib"; 
//Mage::init('default');
//Mage::app();
//Mage::getSingleton('core/session', array('name' => 'frontend')); 
umask(0);

// Initialize Magento
Mage::app();
 
$checkout = new mge_checkout();
try {

$checkout->testoreder();

}
catch(Exception $e){
echo $e->getMessage();
}
?>
