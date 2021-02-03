<?php
	class LoginController{
		// 显示登录界面
		public function login(){
			include('./Org/SmartyInit.class.php');
			$smarty->display('admin/login/login.html');
		}

		// 根据输入的用户名和密码，链接数据库，看该用户是否存在在数据库中
		public function dologin(){
			$model = new Model('user');
			$info = $model->loginFind($_POST['username'],$_POST['password']);
			//判断该用户在数据库中是否存在
			if($info){
				$_SESSION["username"]=$_POST['username'];
				echo  "<script>window.location.href='index.php?c=user&a=index'</script>";
			}else{
				echo  "<script>alert('登录失败,用户名或密码错误!');window.location.href='index.php?c=login&a=login'</script>";
			}

		}

		// 注销
		public function logout(){
			unset($_SESSION["username"]);
			echo "<script>window.location.href='index.php?c=login&a=login';</script>";
		}
	}




?>