<?php

returnJSON(array('msg'=>'Hello world'));


// ====================================

function returnJSON($data=array(), $status='ok') {
	header('Content-type: application/json');
	$data['status'] = $status;
	die(json_encode($data));
}
