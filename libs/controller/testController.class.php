<?php 
	class testController {
		function show() {
			$testModel = new testModel();
			M('test')
			$testView = new testView();
			$testView->display($data);
		}
	}
?>