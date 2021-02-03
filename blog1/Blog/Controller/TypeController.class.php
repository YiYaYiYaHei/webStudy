<?php
	class TypeController{

		// 类别显示
		public function index(){
			$model = new Model('type');
			$info = $model->getAll();

			include("./Org/SmartyInit.class.php");
			$smarty->assign("info",$info);

			// 先判断用户是否登录，若登录，则显示首页，否则提示请先登录，再跳转到登录界面(只要要显示页面的，都要添加)
			if(isset($_SESSION['username'])){
				$smarty->display("admin/type/index.html");
			}else{
				echo "<script>alert('请先登录！');window.location.href='index.php?c=login&a=login'</script>";
			}
			
		}

		// 类别添加页面显示
		public function add(){
			include("./Org/SmartyInit.class.php");
			if(isset($_SESSION['username'])){
				$smarty->display("admin/type/add.html");
			}else{
				echo "<script>alert('请先登录！');window.location.href='index.php?c=login&a=login'</script>";
			}
		}

		// 执行添加
		public function doadd(){
			$model = new Model('type');
			$num = $model->insert();

			if($num){
				echo "<script>window.location.href='index.php?c=type&a=index'</script>";
			}else{
				echo "<script>alert('添加失败！');window.location.href='index.php?c=type&a=index'</script>";
			}
		}

		// 类别修改页面
		public function edit(){
			$id = $_GET['id'];
			$model = new Model('type');
			$info =$model->getOne($id);
			include("./Org/SmartyInit.class.php");
			$smarty->assign("info",$info);
			if(isset($_SESSION['username'])){
				$smarty->display("admin/type/edit.html");
			}else{
				echo "<script>alert('请先登录！');window.location.href='index.php?c=login&a=login'</script>";
			}
			
		}

		// 执行修改
		public function doedit(){
			$model = new Model('type');
			$num = $model->update();

			if($num){
				echo "<script>window.location.href='index.php?c=type&a=index'</script>";
			}else{
				echo "<script>alert('修改失败！');window.location.href='index.php?c=type&a=index'</script>";
			}
		}

		// 类别删除：当删除的类别中有文章时，不能删除
		public function del(){
			$id = $_GET['id'];
			$model = new Model('type');
			$num = $model->delete($id);
			echo $num;	
		}
	}





?>