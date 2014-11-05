<?php
	function C($name, $method) {
		require_once '/libs/controller/' . $name . 'Controller.class.php';
		eval('$obj = new '.$name.'Controller();$obj->'.$method.'();');
	}
	
	function M($name) {
		require_once '/libs/model/'.$name.'.Model.class.php';
		eval('$obj = new '.$name.'Model();');
		return $obj;
	}
	
	function V($name) {
		require_once '/libs/view/'.$name.'.View.class.php';
		eval('$obj = new '.$name.'View();');
		return $obj;
	}
	
	C('test', 'show');