<?php
	class HomeController{
		// 显示首页
		public function index(){
			// 实例化对象：从数据库中获取数据
			$model_type = new Model('type');
			$info_type = $model_type->home_getAll('status=1');

			// 获取首页显示的文章
			$model_a = new Model('article');
			// 显示5条，状态为启用，按时间排序
			$info_a = $model_a->home_getAll('status=1 order by addtime desc limit 5');

			// 引入模板
			include("Org/SmartyInit.class.php");
			$smarty->assign('info_type',$info_type);
			$smarty->assign('info_a',$info_a);
			$smarty->display("home/index.html");
		}


		// 点击列表,显示相应的内容
		public function lists(){
			// 获取已有类别且启用状态
			$model_type = new Model('type');
			$info_type = $model_type->home_getAll('status=1');

			// 显示文章中该类别下的文章且状态为启用
			$model = new Model('article');
			$where = "type_id={$_GET['id']} and status=1";
			$info = $model->home_getAll($where);

			// 获取该类别的类别名
			$type_name =$model_type->getOne($_GET['id'])['name'];

			include("Org/SmartyInit.class.php");
			$smarty->assign('info_type',$info_type);
			$smarty->assign('info',$info);
			$smarty->assign('type_name',$type_name);
			$smarty->display("home/list.html");
		}
		

		// 内容：点击某一条记录，显示具体内容
		public function show(){
			// 获取已有类别且启用状态
			$model_type = new Model('type');
			$info_type = $model_type->home_getAll('status=1');

			// 获取文章的信息
			$id = $_GET['id'];
			$model_article = new Model('article');
			$info_article = $model_article->getOne($id);
			// var_dump($info_article);die;
			
			// 获取文章类别名
			$typename = $model_type->getOne($info_article['type_id'])['name'];
			// var_dump($typename);die;

			include("Org/SmartyInit.class.php");
			$smarty->assign('info_type',$info_type);
			$smarty->assign('typename',$typename);
			$smarty->assign('info_article',$info_article);
			$smarty->display("home/show.html");
		}
		
		
	}



?>