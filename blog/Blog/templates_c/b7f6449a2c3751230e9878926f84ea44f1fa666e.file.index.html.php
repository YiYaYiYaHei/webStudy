<?php /* Smarty version Smarty-3.1.8, created on 2018-10-05 09:55:58
         compiled from "./View\home\index.html" */ ?>
<?php /*%%SmartyHeaderCode:195425bb71d9ba3c3d7-07438395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7f6449a2c3751230e9878926f84ea44f1fa666e' => 
    array (
      0 => './View\\home\\index.html',
      1 => 1538733356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195425bb71d9ba3c3d7-07438395',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5bb71d9ba6f056_39902604',
  'variables' => 
  array (
    'info_type' => 0,
    'v' => 0,
    'info_a' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb71d9ba6f056_39902604')) {function content_5bb71d9ba6f056_39902604($_smarty_tpl) {?><!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>木庄网络博客-MZ-NetBlog主题模板</title>
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
      <div id="focusslide" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#focusslide" data-slide-to="0" class="active"></li>
          <li data-target="#focusslide" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
          <a href="http://www.muzhuangnet.com/show/269.html" target="_blank" title="木庄网络博客源码" >
          <img src="http://www.muzhuangnet.com/upload/201610/18/201610181557196870.jpg" alt="木庄网络博客源码" class="img-responsive"></a>
          </div>
          <div class="item">
          <a href="http://web.muzhuangnet.com/" target="_blank" title="专业网站建设" >
          <img src="http://www.muzhuangnet.com/upload/201610/24/201610241227558789.jpg" alt="专业网站建设" class="img-responsive"></a>
          </div>
        </div>
        <a class="left carousel-control" href="#focusslide" role="button" data-slide="prev" rel="nofollow"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">上一个</span> </a> <a class="right carousel-control" href="#focusslide" role="button" data-slide="next" rel="nofollow"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">下一个</span> </a> </div>
      <article class="excerpt-minic excerpt-minic-index">
            <h2><span class="red">【推荐】</span><a target="_blank" href="http://www.muzhuangnet.com/show/269.html" title="用DTcms做一个独立博客网站（响应式模板）" >用DTcms做一个独立博客网站（响应式模板）</a>
            </h2>
            <p class="note">用DTcms做一个独立博客网站（响应式模板），采用DTcms V4.0正式版（MSSQL）。开发环境：SQL2008R2+VS2010。DTcms V4.0正式版功能修复和优化：1、favicon.ico图标后台上传。（解决要换图标时要连FTP或者开服务器的麻烦）</p>
        </article>
      <div class="title">
        <h3>最新发布</h3>
        <div class="more">                
                <a href="http://www.muzhuangnet.com/list/mznetblog/" title="MZ-NetBlog主题" >MZ-NetBlog主题</a>                
                <a href="http://www.muzhuangnet.com/list/code/" title="IT技术笔记" >IT技术笔记</a>                
                <a href="http://www.muzhuangnet.com/list/share/" title="源码分享" >源码分享</a>                
                <a href="http://www.muzhuangnet.com/list/money/" title="靠谱网赚" >靠谱网赚</a>                
                <a href="http://www.muzhuangnet.com/list/news/" title="资讯分享" >资讯分享</a>                
            </div>
      </div>

      <!-- ==================文章遍历========================== --> 
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_a']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
      <article class="excerpt excerpt-1" style="">
      <a class="focus" href="index.php?c=home&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img class="thumb" src="./uploads/image/<?php echo $_smarty_tpl->tpl_vars['v']->value['picname'];?>
"style="display: inline;"></a>
            <header><a class="cat" href="">文章标题名<i></i></a>
                <h2><a href="index.php?c=home&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"target="_blank" ><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
                </h2>
            </header>
            <p class="meta">
                <time class="time"><i class="glyphicon glyphicon-time"></i><?php echo $_smarty_tpl->tpl_vars['v']->value['addtime'];?>
</time>
              
            </p>
            <p class="note"><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</p>
        </article>
      <?php } ?>
     <!-- ======================================== -->
    </div>
  </div>
  <aside class="sidebar">
    <div class="fixed">
      <div class="widget widget-tabs">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#notice" aria-controls="notice" role="tab" data-toggle="tab" >统计信息</a></li>
          <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab" >联系站长</a></li>
        </ul>
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane contact active" id="notice">
            <h2>日志总数:
                  888篇
              </h2>
              <h2>网站运行:
              <span id="sitetime">88天 </span></h2>
          </div>
            <div role="tabpanel" class="tab-pane contact" id="contact">
              <h2>QQ:
                  <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=577211782&amp;site=qq&amp;menu=yes" target="_blank" rel="nofollow" data-toggle="tooltip" data-placement="bottom" title=""  data-original-title="QQ:577211782">577211782</a>
              </h2>
              <h2>Email:
              <a href="mailto:577211782@qq.com" target="_blank" data-toggle="tooltip" rel="nofollow" data-placement="bottom" title=""  data-original-title="Email:577211782@qq.com">577211782@qq.com</a></h2>
          </div>
        </div>
      </div>
      <div class="widget widget_search">
        <form class="navbar-form" action="/Search" method="post">
          <div class="input-group">
            <input type="text" name="keyword" class="form-control" size="35" placeholder="请输入关键字" maxlength="15" autocomplete="off">
            <span class="input-group-btn">
            <button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
            </span> </div>
        </form>
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
        <a href="http://web.muzhuangnet.com/" target="_blank" rel="nofollow" title="专业网站建设" >
        <img style="width: 100%" src="http://www.muzhuangnet.com/upload/201610/24/201610241224221511.jpg" alt="专业网站建设" ></a>    
     </div>
     <div class="widget widget_sentence">    
        <a href="http://www.muzhuangnet.com/show/269.html" target="_blank" rel="nofollow" title="MZ-NetBlog主题" >
        <img style="width: 100%" src="images/ad.jpg" alt="MZ-NetBlog主题" ></a>    
     </div>
    <div class="widget widget_sentence">
      <h3>友情链接</h3>
      <div class="widget-sentence-link">
        <a href="http://web.muzhuangnet.com" title="网站建设" target="_blank" >网站建设</a>&nbsp;&nbsp;&nbsp;
      </div>
    </div>
  </aside>
</section>
    <footer class="footer">
  <div class="container">
    <p>本站[<a href="http://www.muzhuangnet.com/" >木庄网络博客</a>]的部分内容来源于网络，若侵犯到您的利益，请联系站长删除！谢谢！Powered By [<a href="http://www.dtcms.net/" target="_blank" rel="nofollow" >DTcms</a>] Version 4.0 &nbsp;<a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow" >闽ICP备00000000号-1</a> &nbsp; <a href="http://www.muzhuangnet.com/sitemap.xml" target="_blank" class="sitemap" >网站地图</a></p>
  </div>
  <div id="gotop"><a class="gotop"></a></div>
</footer>
    <script src="View/home/js/bootstrap.min.js"></script>
    <script src="View/home/js/jquery.ias.js"></script>
    <script src="View/home/js/scripts.js"></script>
</body>
</html>
<?php }} ?>