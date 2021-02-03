<?php
	
	class UserController{

		// 显示管理员首页
		public function index(){
			$model = new Model('user');

			// 为了使php和HTML代码分开写，引入smarty模板引擎
			include("./Org/SmartyInit.class.php");

			$info = $model->getAll();

			//给HTML中将会用到的变量赋值
			$smarty->assign('info',$info);

			// 判断是否登录;登录则显示首页，没有则提示登录并跳转到登录界面(只要显示页面的，都要添加)
			if(isset($_SESSION['username'])){
				// 显示（类似include，将文件引入；因为在smartyInit中指定了template_dir="./View"文件查询位置，所以此处可不写View/）
				$smarty->display("admin/user/index.html");
			}else{
				echo "<script>alert('请先登录！');window.location.href='index.php?c=login&a=login'</script>";
			}
			
		}

		// 添加页面
		public function add(){
			include("./Org/SmartyInit.class.php");
			if(isset($_SESSION['username'])){
				$smarty->display("admin/user/add.html");
			}else{
				echo "<script>alert('请先登录！');window.location.href='index.php?c=login&a=login'</script>";
			}
			
		}

		// 执行添加
		function doadd(){
			$model = new Model('user');
			$num = $model->insert();
			if($num){
				echo "<script>window.location.href='index.php?c=user&a=index'</script>";
			}else{
				echo "<script>alert('添加失败!');window.location.href='index.php?c=user&a=index'</script>";
			}
		}

		// 修改页面
		function edit(){
			$id = $_GET['id'];
			// 此句必须在include("./Org/SmartyInit.class.php");前
			$model = new Model('user');

			include("./Org/SmartyInit.class.php");
			$res = $model->getOne($id);
			$smarty->assign("res",$res);

			if(isset($_SESSION['username'])){
				$smarty->display("admin/user/update.html");
			}else{
				echo "<script>alert('请先登录！');window.location.href='index.php?c=login&a=login'</script>";
			}
		}

		// 执行修改
		function doedit(){
			$model = new Model('user');
			$num = $model->update();
			if($num){
				echo "<script>window.location.href='index.php?c=user&a=index'</script>";
			}else{
				echo "<script>alert('修改失败!');window.location.href='index.php?c=user&a=index'</script>";
			}
		}

		// 删除
		function del(){
			$id = $_GET['id'];
			$model = new Model("user");
			$num = $model->delete($id);
			echo $num;
		}
	}





?>