 
 
 <?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.1, user-scalable=no">
	
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?>
	</title>


	
<link rel="stylesheet" href="//cdnjs.loli.net/ajax/libs/mdui/0.4.1/css/mdui.min.css">
<script src="//cdnjs.loli.net/ajax/libs/mdui/0.4.1/js/mdui.min.js"></script>

    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<style>

a{color: #0000ff ;text-decoration: none;}

body{max-width:1000px; margin:0 auto;}
li{list-style-type:none;}
ul{
    margin: 0;
    padding: 0;
    list-style: none;
}

ol{
    margin: 0;
    padding: 0;
    list-style: none;
}


.pagenav a {letter-spacing:8px;}
a.next{letter-spacing:1px;}
img{
	max-width:100%;   
	max-height:400px;   
	margin:0 auto;
    display: block;}


 .page-navigator {
	background: #ffffff;
    list-style: none;
    padding: 0;
    margin: 10px 0;
    text-align: center;
}

.page-navigator li {
    display: inline;
}

.page-navigator li:last-child {
    margin-right: 0;
}

.page-navigator li a {
    min-width: 36px;
    height: 36px;
    border: 1px solid #999;
    display: inline-block;
    border-radius: 18px;
    line-height: 36px;
    margin-right: 8px;
    color: #666;
}

.page-navigator li a:hover {
    border-color: #333;
    color: #333;
}

.page-navigator li.current a {
    color: #FFF;
    background: #999;
}
 
 

</style>

<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->

<header>

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?91e08d28ed47cfb57871d944d4fc1edc";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>



<body class="mdui-theme-accent-blue">

<div class="mdui-toolbar mdui-shadow-0">
  <span class="mdui-typo-title">
            <?php if ($this->options->logoUrl): ?>
                <a  href="<?php $this->options->siteUrl(); ?>">
                    <img src="<?php $this->options->logoUrl() ?>"  height="30" alt="<?php $this->options->title() ?>"/>
					
                </a>
            <?php else: ?>
                <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>

            <?php endif; ?>
  
  </span>
  <div class="mdui-toolbar-spacer" style=""></div>

	   <a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
       <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
       <?php while($pages->next()): ?>
       <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                    <?php endwhile; ?>
  <a href="javascript:;" class="mdui-btn mdui-btn-icon "  mdui-dialog="{target: '#exampleDialog'}"><i class="mdui-icon material-icons ">search</i></a>


</div>


<!--对话框开始-->
<div class="mdui-dialog" id="exampleDialog">
  <div class="mdui-dialog-title"></div>
  
  <div class="mdui-row">

            <div class="mdui-text-center">
                <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
				
				<div class="mdui-textfield">
				<div class="mdui-col-xs-7  mdui-col-offset-xs-1">
				  <input class="mdui-textfield-input text" placeholder="<?php _e('输入关键字搜索'); ?>" type="text" id="s" name="s"  />
				</div>
				<div class="mdui-col-xs-3">
				  <button class="mdui-btn mdui-color-theme-accent mdui-ripple submit"  type="submit"><?php _e('搜索'); ?></button>
				</div>
				
				</div>
                </form>
            </div>
</div>
  
  <div class="mdui-dialog-actions">
    <button class="mdui-btn mdui-ripple" mdui-dialog-close>关闭</button>
  </div>
</div>
<!--对话框结束-->


</header><!-- end #header -->



