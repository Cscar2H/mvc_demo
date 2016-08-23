<?php
	class UserController{

		public function index(){
			//echo "这是user控制器的index方法";
			/*$list = array(
				array('id' => 1, 'name'=>"CH"),
				array('id' => 2, 'name'=>"YF"),
				array('id' => 3, 'name'=>"GG"),
			);
			*/
			//包含并实例化模型
			include './models/UserModel.php';
			$model=new UserModel();

			//通过模型获取数据
			$list=$model->getAllUser();

			//让模板将数据显示出来
			include './views/User/index.php';
		}
	}