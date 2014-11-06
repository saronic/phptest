<?php 
	class testController {
		function show() {
			$model = M('test');
            $data = $model->get();
//			$testView = V('test');
//			$testView->display($data);
            global $view;
            $view->assign('str', 'feiiiiiiiii');
            $view->display('test.tpl');
		}
	}
?>