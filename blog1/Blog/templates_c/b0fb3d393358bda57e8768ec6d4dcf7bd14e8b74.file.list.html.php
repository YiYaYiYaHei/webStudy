<?php /* Smarty version Smarty-3.1.8, created on 2018-10-05 09:37:16
         compiled from "./View\home\list.html" */ ?>
<?php /*%%SmartyHeaderCode:198375bb72786914373-15660656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0fb3d393358bda57e8768ec6d4dcf7bd14e8b74' => 
    array (
      0 => './View\\home\\list.html',
      1 => 1538732234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198375bb72786914373-15660656',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5bb72786946ff3_84623809',
  'variables' => 
  array (
    'info_type' => 0,
    'v' => 0,
    'type_name' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb72786946ff3_84623809')) {function content_5bb72786946ff3_84623809($_smarty_tpl) {?><!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>木庄网络博客MZ-NetBlog主题源码</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="View/home/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="View/home/css/nprogress.css">
    <link rel="stylesheet" type="text/css" href="View/home/css/style.css">
    <link rel="stylesheet" type="text/css" href="View/home/css/font-awesome.min.css">
    <link rel="apple-touch-icon-precomposed" href="View/home/images/icon.png">
    <link rel="shortcut icon" href="View/home/images/favicon.ico">
    <script src="View/home/js/jquery-2.1.4.min.js"></script>
    <script src="View/home/js/nprogress.js"></script>
    <script src="View/home/js/jquery.lazyload.min.js"></script>
    <!--[if gte IE 9]>
  <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="js/html5shiv.min.js" type="text/javascript"></script>
  <script src="js/respond.min.js" type="text/javascript"></script>
  <script src="js/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->
    <!--[if lt IE 9]>
  <script>window.location.href='upgrade-browser.html';</script>
<![endif]-->
</head>
<body class="user-select">
    <header class="header">
  <nav class="navbar navbar-default" id="navbar">
    <div class="container">
      <div class="header-topbar hidden-xs link-border">
        <ul class="site-nav topmenu">
          <li><a href="http://www.muzhuangnet.com/tags/" >标签云</a></li>
            <li><a href="http://www.muzhuangnet.com/readers/" rel="nofollow" >读者墙</a></li>
            <li><a href="http://www.muzhuangnet.com/rss.html" title="RSS订阅" >
                <i class="fa fa-rss">
                </i> RSS订阅
            </a></li>
        </ul>
        勤记录 懂分享</div>
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar" aria-expanded="false"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <h1 class="logo hvr-bounce-in"><a href="http://www.muzhuangnet.com/" title="木庄网络博客"><img src="http://www.muzhuangnet.com/upload/201610/17/201610171329086541.png" alt="木庄网络博客"></a></h1>
      </div>
      <div class="collapse navbar-collapse" id="header-navbar">
        <form class="navbar-form visible-xs" action="/Search" method="post">
          <div class="input-group">
            <input type="text" name="keyword" class="form-control" placeholder="请输入关键字" maxlength="20" autocomplete="off">
            <span class="input-group-btn">
            <button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
            </span> </div>
        </form>
        <ul class="nav navbar-nav navbar-right">

        <!-- ===============博客类别===================== -->
          <li><a data-cont="木庄网络博客" href="index.php?c=home&a=index">首页</a></li>

          <!-- 循环遍历类别 -->
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
          <li><a data-cont="列表页" title="列表页" href="index.php?c=home&a=lists&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>
          <?php } ?>
        <!-- ===================================== -->
        </ul>
      </div>
    </div>
  </nav>
</header>
    <section class="container">
  <div class="content-wrap">
    <div class="content">
      <div class="title">
        <h3 style="line-height: 1.3"><?php echo $_smarty_tpl->tpl_vars['type_name']->value;?>
</h3>
      </div>

      <!-- =====================文章==================================== -->
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
      <article class="excerpt excerpt-1">
      <a class="focus" href="index.php?c=home&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" target="_blank" ><img class="thumb"src="uploads/image/<?php echo $_smarty_tpl->tpl_vars['v']->value['picname'];?>
"style="display: inline;"></a>
        <header><a class="cat" href="" title="MZ-NetBlog主题" >文章主题<i></i></a>
          <h2><a target="_blank" href="index.php?c=home&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></h2>
        </header>
        <p class="meta">
          <time class="time"><i class="glyphicon glyphicon-time"></i><?php echo $_smarty_tpl->tpl_vars['v']->value['addtime'];?>
</time>
        <p class="note"><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</p>
      </article>
      <?php } ?>
      <!-- ====================================================== -->
    </div>
  </div>
  <aside class="sidebar">
    <div class="fixed">
      <div class="widget widget_search">
        <form class="navbar-form" action="/Search" method="post">
          <div class="input-group">
            <input type="text" name="keyword" class="form-control" size="35" placeholder="请输入关键字" maxlength="15" autocomplete="off">
            <span class="input-group-btn">
            <button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
            </span> </div>
        </form>
      </div>
      <div class="widget widget_sentence">
        <h3>标签云</h3>
        <div class="widget-sentence-content">
            <ul class="plinks ptags">                
                <li><a href="http://www.muzhuangnet.com/tags/list/67/" title="移动统计" draggable="false">移动统计 <span class="badge">1</span></a></li>                
                <li><a href="http://www.muzhuangnet.com/tags/list/256/" title="404" draggable="false">404 <span class="badge">1</span></a></li>      
                <li><a href="http://www.muzhuangnet.com/tags/list/252/" title="VS2010" draggable="false">VS2010 <span class="badge">1</span></a></li>                
                <li><a href="http://www.muzhuangnet.com/tags/list/162/" title="杀毒软件" draggable="false">杀毒软件 <span class="badge">1</span></a></li>                
                <li><a href="http://www.muzhuangnet.com/tags/list/133/" title="html标签" draggable="false">html标签 <span class="badge">1</span></a></li>                
                <li><a href="http://www.muzhuangnet.com/tags/list/49/" title="循环" draggable="false">循环 <span class="badge">2</span></a></li>                
                <li><a href="http://www.muzhuangnet.com/tags/list/22/" title="百度统计" draggable="false">百度统计 <span class="badge">2</span></a></li>                
                <li><a href="http://www.muzhuangnet.com/tags/list/132/" title="sql" draggable="false">sql <span class="badge">6</span></a></li>                
            </ul>
        </div>
      </div>
    </div>
    <div class="widget widget_hot">
          <h3>最新评论文章</h3>
          <ul>
            
<li><a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html" ><span class="thumbnail">
    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">
</span><span class="text">用DTcms做一个独立博客网站（响应式模板）</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
    2016-11-01
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span></a></li>
<li><a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html" ><span class="thumbnail">
    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">
</span><span class="text">用DTcms做一个独立博客网站（响应式模板）</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
    2016-11-01
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span></a></li>
<li><a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html" ><span class="thumbnail">
    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">
</span><span class="text">用DTcms做一个独立博客网站（响应式模板）</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
    2016-11-01
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span></a></li>
<li><a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html" ><span class="thumbnail">
    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">
</span><span class="text">用DTcms做一个独立博客网站（响应式模板）</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
    2016-11-01
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span></a></li>
<li><a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html" ><span class="thumbnail">
    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">
</span><span class="text">用DTcms做一个独立博客网站（响应式模板）</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
    2016-11-01
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span></a></li>
<li><a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html" ><span class="thumbnail">
    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">
</span><span class="text">用DTcms做一个独立博客网站（响应式模板）</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
    2016-11-01
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span></a></li>
<li><a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html" ><span class="thumbnail">
    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">
</span><span class="text">用DTcms做一个独立博客网站（响应式模板）</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
    2016-11-01
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span></a></li>
<li><a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html" ><span class="thumbnail">
    <img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">
</span><span class="text">用DTcms做一个独立博客网站（响应式模板）</span><span class="muted"><i class="glyphicon glyphicon-time"></i>
    2016-11-01
</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span></a></li>
  
          </ul>
      </div>
      <div class="widget widget_sentence">
    
    <a href="http://www.muzhuangnet.com/show/269.html" target="_blank" rel="nofollow" title="MZ-NetBlog主题" >
        <img style="width: 100%" src="images/ad.jpg" alt="MZ-NetBlog主题" ></a>
    
</div>
      <div class="widget widget_sentence">
    
    <a href="http://web.muzhuangnet.com/" target="_blank" rel="nofollow" title="专业网站建设" >
        <img style="width: 100%" src="http://www.muzhuangnet.com/upload/201610/24/201610241224221511.jpg" alt="专业网站建设" ></a>
    
</div>
  </aside>
</section>
    <footer class="footer">
  <div class="container">
    <p>本站[<a href="http://www.muzhuangnet.com/" >木庄网络博客</a>]的部分内容来源于网络，若侵犯到您的利益，请联系站长删除！谢谢！Powered By [<a href="http://www.dtcms.net/" target="_blank" rel="nofollow" >DTcms</a>] Version 4.0 </p>
  </div>
  <div id="gotop"><a class="gotop"></a></div>
</footer>
    <script src="View/home/js/bootstrap.min.js"></script>
    <script src="View/home/js/jquery.ias.js"></script>
    <script src="View/home/js/scripts.js"></script>
</body>
</html>
<?php }} ?>