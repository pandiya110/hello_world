<?php
include('DBClass.php');
include('lib.php');
$class = DBClass::getInstance()->findTableColumns('form_angularjs');
echo json_encode($class);

$data = $_POST;
$var = MyLib::Gisset($data,'name', '');
print_r($var);

$split = MyLib::Gisset($data,'splitval', '');
$val = MyLib::GiExplode('explode', $split, ',');
print_r($val);

$implode = array(1,2,3,4);
$imp = MyLib::GiImplode('implode', $implode, ',');
print_r($imp);
?>
