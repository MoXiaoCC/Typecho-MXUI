<?php
/**
 * 自定义页面模板
 *
 * @package custom
 */
 
 
  if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 
<div id="pjax-container" class="mdui-col-md-12">
 <div class="mdui-col-md-12 mdui-m-a-1">
    <article class="mdui-m-b-2">
        <p class="mdui-typo-title mdui-text-center"><strong><?php $this->title() ?></strong></p>
		  <p class="mdui-typo-subheading-opacity mdui-text-center">
		  围观量 <?php get_post_view($this) ?>
		  </p>
         <div class="mdui-typo mdui-shadow-0">  

	<ul class="mdui-list mdui-list-dense mdui-row-xs-1 mdui-row-sm-2 mdui-row-md-3 mdui-row-lg-4">
	  <div class="mdui-col">
	  <a href="http://www.wumiantu.com/" target="_blank" style="width:100%;">
		  <li class="mdui-list-item mdui-ripple">
			<div class="mdui-list-item-avatar" style="width:40px;height:40px">
			<img src="https://zh123456-1252949186.cos.ap-chongqing.myqcloud.com/2019/01/13/1547376535.jpg"/>
			</div>
			<div class="mdui-list-item-content">
			  <div class="mdui-list-item-title"><strong>撩人的无眠兔</strong></div>
			  <div class="mdui-list-item-text mdui-list-item-two-line">声优宝贝</div>
			</div>
		  </li>
		  </a>
	  </div>

	  <div class="mdui-col">
	  <a href="https://suishai.com/" target="_blank" style="width:100%;">
		  <li class="mdui-list-item mdui-ripple">
			<div class="mdui-list-item-avatar" style="width:40px;height:40px"><img src="https://cn.gravatar.com/userimage/148230811/a5b5c969654e95d4a2c1f86b0a3caa5c.jpg?size=200"/></div>
			<div class="mdui-list-item-content">
			  <div class="mdui-list-item-title"><strong>随晒</strong></div>
			  <div class="mdui-list-item-text mdui-list-item-two-line">栖冲业简，随心而晒。</div>
			</div>
		  </li>
		  </a>
	  </div>

	  <div class="mdui-col">
	  <a href="https://www.zhangzhousheng.top" target="_blank" style="width:100%;">
		  <li class="mdui-list-item mdui-ripple">
			<div class="mdui-list-item-avatar" style="width:40px;height:40px">
			<img src="https://www.zhangzhousheng.top/usr/logo.png"/>
			</div>
			<div class="mdui-list-item-content">
			  <div class="mdui-list-item-title"><strong>安の故乡</strong></div>
			  <div class="mdui-list-item-text mdui-list-item-two-line">同样是鱼，鲤鱼可以跃龙门，咸鱼何妨不可以翻身</div>
			</div>
		  </li>
		  </a>
	  </div>

	  <div class="mdui-col">
	  <a href="https://www.yazoo.club/" target="_blank" style="width:100%;">
		  <li class="mdui-list-item mdui-ripple">
			<div class="mdui-list-item-avatar" style="width:40px;height:40px">
			<img src="https://i.loli.net/2019/01/20/5c43d5abdd9ff.png"/>
			</div>
			<div class="mdui-list-item-content">
			  <div class="mdui-list-item-title"><strong>二九青年</strong></div>
			  <div class="mdui-list-item-text mdui-list-item-two-line">爱生活爱折腾的热血青年</div>
			</div>
		  </li>
		  </a>
	  </div>

      
	  <div class="mdui-col">
	  <a href="http://typecho.org/" target="_blank" style="width:100%;">
		  <li class="mdui-list-item mdui-ripple">
			<div class="mdui-list-item-avatar" style="width:40px;height:40px">T</div>
			<div class="mdui-list-item-content">
			  <div class="mdui-list-item-title"><strong>typecho</strong></div>
			  <div class="mdui-list-item-text mdui-list-item-two-line">本站使用typecho程序。</div>
			</div>
		  </li>
		  </a>
	  </div>
      
	  <div class="mdui-col">
	  <a href="https://www.mdui.org/" target="_blank" style="width:100%;">
		  <li class="mdui-list-item mdui-ripple">
			<div class="mdui-list-item-avatar" style="width:40px;height:40px">MDUI</div>
			<div class="mdui-list-item-content">
			  <div class="mdui-list-item-title"><strong>MDUI</strong></div>
			  <div class="mdui-list-item-text mdui-list-item-two-line">本站使用MDUI前端框架</div>
			</div>
		  </li>
		  </a>
	  </div>
	  

	</ul>
         <div class="mdui-typo mdui-shadow-0 mdui-m-a-1 mdui-p-a-1" style="text-align:left;">  
		 <?php $this->content(); ?>
		 </div>
		 </div>
    </article>
	
<!--点赞和赞赏开始-->
	
	
<div class="mdui-m-b-2 mdui-text-center style="width: 200px">
<div>
	<!--button class="mdui-btn mdui-text-center mdui-color-red mdui-ripple">分享</button-->
	<button class="mdui-btn mdui-text-center mdui-color-red mdui-ripple" mdui-dialog="{target: '#dashang'}">打赏</button>
</div>

<!--对话框开始-->
<div class="mdui-dialog" id="dashang">
  <div class="mdui-dialog-title">打赏采用二维码方式，望须知。

   <div class="mdui-float-right"> <button class="mdui-btn mdui-ripple" mdui-dialog-close>关闭</button></div>

  </div>
  

  <div class="mdui-col mdui-p-a-2">
    <div class="mdui-grid-tile">
      <img src="<?php $this->options->themeUrl('/img/dashang.jpg'); ?>"/>
    </div>
  </div>


</div>
<!--对话框结束-->

</div>

<!--div class="mdui-card mdui-color-red"> 
	<div class="mdui-typo-body-2-opacity mdui-p-a-1">声明：本站内容除特殊标注之外的内容皆来自网络。如有侵权请联系moxiao.cc@live.com，将会在第一时间处理。</div> 
</div-->

	
<!--点赞和赞赏结束-->


	    <?php $this->need('comments.php'); ?>
</div>




</div>
<div class="mdui-col-md-12"><?php $this->need('footer.php'); ?></div>
