<?php
	class Model{
		private $link;
		private $tableName;

		// 构造函数：连接数据库
		public function __construct($tableName){
			$link = mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME) or die("数据库连接失败！");
			mysqli_set_charset($link,"utf8");
			$this->link = $link;
			$this->tableName = $tableName;
		}
		
		// 获取所有数据
		function getAll(){
			$sql = "select * from {$this->tableName}";
			$res = mysqli_query($this->link,$sql);
			$info = mysqli_fetch_all($res,MYSQL_ASSOC);
			mysqli_free_result($res);
			return $info;
		}

		// 获取单条数据
		function getOne($id){
			$sql = "select * from {$this->tableName} where id={$id}";
			$res = mysqli_query($this->link,$sql);
			$info = mysqli_fetch_assoc($res);
			mysqli_free_result($res);
			return $info;
		}

		// 删除
		function delete($id){
			// 当操作的表为type时，先查看当前类别下是否有文章，有则返回2，提示有文章不能删除，没有则执行删除
			if($this->tableName=='type'){
				$sql1 = "select * from article where type_id={$id}";
				$res = mysqli_query($this->link,$sql1);
				$info = mysqli_fetch_assoc($res);
				if($info){
					return 2;//说明有文章，返回
				}
			}
				$sql = "delete from {$this->tableName} where id={$id}";
				$res = mysqli_query($this->link,$sql);
				$num = mysqli_affected_rows($this->link);
				return $num;
			
			
		}
		
		// 修改
		function update(){
			$id = $_POST['id'];

			// 为了使update()适用于各个表，所以update语句中的set不能写死，可通过array_values获取传过来的数据的值，通过array_keys获取穿过来的数据的键，两个数组下标是一一对应的，所以只需一次循环即可得到健和值，再使用字符串拼接使值合格化
			$keys = array_keys($_POST);
			$values = array_values($_POST);

			// 获取符合要求的字符串
			$str = "";
			foreach ($keys as $k => $v) {
				$str .=$v."='".$values[$k]."',";
			}
			$str = rtrim($str,",");

			$sql = "update {$this->tableName} set {$str} where id={$id}";
			$res = mysqli_query($this->link,$sql);
			$num = mysqli_affected_rows($this->link);
			return $num;
		}

		// 添加
		function insert(){
			// 为了使insert()适用于各个表，所以insert语句中的values不能写死，可通过array_values获取传过来的数据，再使用字符串拼接使值合格化
			$values = array_values($_POST);

			// 获取符合要求的字符串
			$str = "";
			foreach ($values as $k => $v) {
				$str .= "'".$v."',";
			}
			$str = rtrim($str,",");//去除字符串右边的,
			
			$sql = "insert into {$this->tableName} values(null,{$str})";
			// var_dump($sql);die;
			$res = mysqli_query($this->link,$sql);
			$num = mysqli_insert_id($this->link);
			return $num;
		}
		
		// 对登录的用户进行数据库查询,若存在数据库中,则登录成功;不存在,则登录失败
		public function loginFind($username,$password){
			$sql = "select * from {$this->tableName} where username='{$username}' and password='{$password}'";
			$res = mysqli_query($this->link,$sql);
			$info = mysqli_fetch_assoc($res);
			return $info;

		}

		// 前台获取所有（查询有条件，所有分开写）
		public function home_getAll($where){
			$sql = "select * from {$this->tableName} where {$where}";
			$res = mysqli_query($this->link,$sql);
			$info = mysqli_fetch_all($res,MYSQL_ASSOC);
			mysqli_free_result($res);
			return $info;
		}

		

		// 析构函数：关闭数据库
		function __destruct(){
			mysqli_close($this->link);
		}
	}




?>