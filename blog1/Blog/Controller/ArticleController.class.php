<?php
	date_default_timezone_set('PRC');
	class ArticleController{

		// 使用富文本编辑器（用于文件上传）处理img标签，使用正则获取标签中的属性
		function extract_attrib($tag) {
	    	preg_match_all('/(id|alt|title|src)=("[^"]*")/i', $tag, $matches);
	   		 $ret = array();
		    	foreach($matches[1] as $i => $v) {
		        $ret[$v] = $matches[2][$i];
		    	} 
		    	return $ret;
		}

		// 使用富文本编辑器会得到标签，所以要对标签进行处理
		function file(){
			if($_POST['editorValue']){
				// 截取img标签
				$img = substr($_POST['editorValue'], 3,-4);
				// 使用正则，获取标签中的属性
				$arr = $this->extract_attrib($img);
				// 图片名符合数据库中的字段类型
				$_POST['picname']=trim($arr['title'],'"');
				// 删除富文本编辑器自加的editorValue属性
				unset($_POST['editorValue']);
			}else{
				$_POST['picname']=null;
			}
		}

		// 页面显示
		public function index(){
			$model = new Model('article');
			$info = $model->getAll();
			$model1 = new Model('type');

			// 对显示的类型进行处理：添加type_name字段用于记录文章类型, 使其显示"情感类"
			foreach ($info as $k => $v) {
				$info1 = $model1->getOne($v['type_id']);
				$info[$k]['type_name']=$info1['name'];//必须写$info[$k],写$v无用
			}
			include("Org/SmartyInit.class.php");
			$smarty->assign('info',$info);
			$smarty->display("admin/article/index.html");
		}

		// 文章添加页面
		public function add(){
			$model = new Model('type');
			$info = $model->getAll();
			include("Org/SmartyInit.class.php");
			$smarty->assign('info',$info);
			$smarty->display("admin/article/add.html");
		}

		// 执行添加
		public function doadd(){
			// 将post数据处理成需要的在传给数据库
			// 使用富文本编辑器会得到标签，所以要对标签进行处理
			$this->file();
			$_POST['addtime']=date('Y-m-d H:i:s',time());
			
			$model = new Model('article');
			$num =$model->insert();
			if($num){
				echo "<script>window.location.href='index.php?c=article&a=index'</script>";
			}else{
				echo "<script>alert('添加失败!');window.location.href='index.php?c=article&a=index'</script>";
			}		
		}

		// 文章修改页面
		public function edit(){
			// 获取当前修改的记录
			$model = new Model('article');
			$info = $model->getOne($_GET['id']);
			// var_dump($info);
		
			// 获取所有类别
			$model1 = new Model('type');
			$info1 = $model1->getAll();

			include("Org/SmartyInit.class.php");
			$smarty->assign('info',$info);
			$smarty->assign('info1',$info1);//对显示类别的处理
			$smarty->display("admin/article/edit.html");
		}

		// 执行修改
		public function doedit(){
			// var_dump($_POST);die;
			$oldpic = $_POST['oldpic'];
			unset($_POST['oldpic']);
			$model = new Model('article');

			//获取正确的数据（因为使用了富文本，所以点击提交时，富文本会自己生成editorValue，所以要对标签进行处理，添加影藏的oldpic是为了 当修改上传文件时，要删除原来的文件；若不用富文本，则判断是否有上传文件）
			if($_POST['editorValue']){
				$this->file();
			}else{
				$_POST['picname']=$oldpic;
			}
			
			// var_dump($_POST);die;
			$num = $model->update();
			if($num){
				unlink("uploads/image/{$oldpic}");//删除老文件
				echo "<script>window.location.href='index.php?c=article&a=index'</script>";
			}else{
				echo "<script>alert('修改失败!');window.location.href='index.php?c=article&a=index'</script>";
			}		
		}

		// 文章删除
		public function del(){
			$id = $_GET['id'];
			$model = new Model('article');
			// 为了获取文件名
			$info = $model->getOne($id);
			$num = $model->delete($id);
			if($num){
				//删除数据库中的数据的同时删除文件
				unlink("uploads/image/{$info['picname']}");
			}
			echo $num;
		}

		public function download(){
			$id = $_GET['id'];
			$model = new Model('article');
			// 为了获取文件名
			$info = $model->getOne($id);
			header("Content-Type:text/plain");
			header('Content-Disposition:attachment;filename='.$info['picname'].'');
			header('Accept-Length:1233');
			header('Accept-Ranges:byte');
			readfile("./mine.jpg");


			// header('Content-Type:application/force-download');  //类型
			// header('Content-Disposition: attachment; filename="'.basename("./uploads/image/{$info[picname]}").'"'); //描述
			// readfile("./uploads/image/{$info[picname]}"); //文件名
		}
	}




?>