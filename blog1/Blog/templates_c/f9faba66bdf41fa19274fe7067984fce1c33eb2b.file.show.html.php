<?php /* Smarty version Smarty-3.1.8, created on 2018-10-05 10:12:11
         compiled from "./View\home\show.html" */ ?>
<?php /*%%SmartyHeaderCode:321685bb730fb001b66-27400259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9faba66bdf41fa19274fe7067984fce1c33eb2b' => 
    array (
      0 => './View\\home\\show.html',
      1 => 1538734326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321685bb730fb001b66-27400259',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5bb730fb040376_56787247',
  'variables' => 
  array (
    'info_type' => 0,
    'v' => 0,
    'info_article' => 0,
    'typename' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb730fb040376_56787247')) {function content_5bb730fb040376_56787247($_smarty_tpl) {?><!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>用DTcms做一个独立博客网站（响应式模板）-木庄网络博客</title>
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
<body class="user-select single">
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
      <header class="article-header">
        <h1 class="article-title"><a href=""><?php echo $_smarty_tpl->tpl_vars['info_article']->value['title'];?>
</a></h1>
        <div class="article-meta"> <span class="item article-meta-time">
          <time class="time" data-toggle="tooltip" data-placement="bottom"><i class="glyphicon glyphicon-time"></i><?php echo $_smarty_tpl->tpl_vars['info_article']->value['addtime'];?>
</time>
          </span> <span class="item article-meta-source" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="来源：木庄网络博客"><i class="glyphicon glyphicon-globe"></i> 木庄网络博客</span> <span class="item article-meta-category" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="MZ-NetBlog主题"><i class="glyphicon glyphicon-list"></i> <a href="" title="MZ-NetBlog主题" ><?php echo $_smarty_tpl->tpl_vars['typename']->value;?>
</a></span> <span class="item article-meta-views" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="浏览量：219"><i class="glyphicon glyphicon-eye-open"></i> 219</span> <span class="item article-meta-comment" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="评论量"><i class="glyphicon glyphicon-comment"></i> 4</span> </div>
      </header>
      <article class="article-content">
        <p><img src="uploads/image/<?php echo $_smarty_tpl->tpl_vars['info_article']->value['picname'];?>
" alt="" /></p>
        <p><?php echo $_smarty_tpl->tpl_vars['info_article']->value['content'];?>
</p>
        <pre class="prettyprint lang-cs">代码示例：
        public static double JieCheng(int number)
        {
            if (number == 0)
            {
                return 0;
            }

            //初始值必须设置为1
            double result = 1; 

            for (int i = number; i &gt;= 1; i--)
            {
                result = result*i;
            }
            return result;
        }</pre>
        <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_tieba" data-cmd="tieba" title="分享到百度贴吧"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a></div>

              <script>                  window._bd_share_config = { "common": { "bdSnsKey": {}, "bdText": "", "bdMini": "2", "bdMiniList": false, "bdPic": "", "bdStyle": "1", "bdSize": "32" }, "share": {} }; with (document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];</script>
      </article>
      <div class="article-tags">标签：<a href="http://www.muzhuangnet.com/tags/list/2/" rel="tag" >DTcms博客</a><a href="http://www.muzhuangnet.com/tags/list/3/" rel="tag" >木庄网络博客</a><a href="http://www.muzhuangnet.com/tags/list/4/" rel="tag" >独立博客</a><a href="http://www.muzhuangnet.com/tags/list/5/" rel="tag" >修复优化</a>
        </div>
      <div class="relates">
        <div class="title">
          <h3>相关推荐</h3>
        </div>
        <ul>
          <li><a href="http://www.muzhuangnet.com/show/269.html" title="" >用DTcms做一个独立博客网站（响应式模板）-MZ-NetBlog主题</a></li>
          <li><a href="http://www.muzhuangnet.com/show/269.html" title="" >用DTcms做一个独立博客网站（响应式模板）-MZ-NetBlog主题</a></li>
          <li><a href="http://www.muzhuangnet.com/show/269.html" title="" >用DTcms做一个独立博客网站（响应式模板）-MZ-NetBlog主题</a></li>
          <li><a href="http://www.muzhuangnet.com/show/269.html" title="" >用DTcms做一个独立博客网站（响应式模板）-MZ-NetBlog主题</a></li>
          <li><a href="http://www.muzhuangnet.com/show/269.html" title="" >用DTcms做一个独立博客网站（响应式模板）-MZ-NetBlog主题</a></li>
          <li><a href="http://www.muzhuangnet.com/show/269.html" title="" >用DTcms做一个独立博客网站（响应式模板）-MZ-NetBlog主题</a></li>
          <li><a href="http://www.muzhuangnet.com/show/269.html" title="" >用DTcms做一个独立博客网站（响应式模板）-MZ-NetBlog主题</a></li>
          <li><a href="http://www.muzhuangnet.com/show/269.html" title="" >用DTcms做一个独立博客网站（响应式模板）-MZ-NetBlog主题</a></li>
        </ul>
      </div>
      <div class="title" id="comment">
        <h3>评论</h3>
      </div>
      <div id="respond">
            <form id="comment-form" name="comment-form" action="" method="POST">
                <div class="comment">
                    <input name="" id="" class="form-control" size="22" placeholder="您的昵称（必填）" maxlength="15" autocomplete="off" tabindex="1" type="text">
                    <input name="" id="" class="form-control" size="22" placeholder="您的网址或邮箱（非必填）" maxlength="58" autocomplete="off" tabindex="2" type="text">
                    <div class="comment-box">
                        <textarea placeholder="您的评论或留言（必填）" name="comment-textarea" id="comment-textarea" cols="100%" rows="3" tabindex="3"></textarea>
                        <div class="comment-ctrl">
                            <div class="comment-prompt" style="display: none;"> <i class="fa fa-spin fa-circle-o-notch"></i> <span class="comment-prompt-text">评论正在提交中...请稍后</span> </div>
                            <div class="comment-success" style="display: none;"> <i class="fa fa-check"></i> <span class="comment-prompt-text">评论提交成功...</span> </div>
                            <button type="submit" name="comment-submit" id="comment-submit" tabindex="4">评论</button>
                        </div>
                    </div>
                </div>
            </form>
            
        </div>
      <div id="postcomments">
        <ol id="comment_list" class="commentlist">        
        <li class="comment-content"><span class="comment-f">#2</span><div class="comment-main"><p><a class="address" href="http://www.muzhuangnet.com/" rel="nofollow" target="_blank">木庄网络博客</a><span class="time">(2016/10/28 11:41:03)</span><br>不错的网站主题，看着相当舒服</p></div></li>
        <li class="comment-content"><span class="comment-f">#1</span><div class="comment-main"><p><a class="address" href="http://www.muzhuangnet.com/" rel="nofollow" target="_blank">木庄网络博客</a><span class="time">(2016/10/14 21:02:39)</span><br>博客做得好漂亮哦！</p></div></li></ol>
      </div>
    </div>
  </div>
  <aside class="sidebar">
    <div class="fixed">
      <div class="widget widget-tabs">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#notice" aria-controls="notice" role="tab" data-toggle="tab" draggable="false">统计信息</a></li>
          <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab" draggable="false">联系站长</a></li>
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
                  <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=577211782&amp;site=qq&amp;menu=yes" target="_blank" rel="nofollow" data-toggle="tooltip" data-placement="bottom" title="" draggable="false" data-original-title="QQ:577211782">577211782</a>
              </h2>
              <h2>Email:
              <a href="mailto:577211782@qq.com" target="_blank" data-toggle="tooltip" rel="nofollow" data-placement="bottom" title="" draggable="false" data-original-title="Email:577211782@qq.com">577211782@qq.com</a></h2>
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