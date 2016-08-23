<?php
	class UserModel{
		public function getAllUser(){
			//获取所有用户列表
			$list = array(
				array('id' => 1, 'name'=>"CH"),
				array('id' => 2, 'name'=>"YF"),
				array('id' => 3, 'name'=>"GG"),
			);
			return $list;
		}
	}
?>