<?php
/**
 * 自定义页面模板
 *
 * @package custom
 */
 
 
  if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<div class="mdui-m-t-1" style="background-color:#ffffff;">

    <article class="mdui-p-t-1 mdui-p-b-1">
        <p class="mdui-typo-title mdui-text-center"><strong><?php $this->title() ?></strong></p>
		
		  <p class="mdui-typo mdui-text-center">
		  <?php _e(' '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
		  <?php _e(' '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a> 发布 


		  围观量 <?php get_post_view($this) ?>
		  </p>
		  
    <div class="mdui-typo mdui-shadow-0">  
         <div class="mdui-typo mdui-shadow-0 mdui-m-a-3">   <?php $this->content(); ?>

		 </div>
		 
	<ul class="mdui-list mdui-m-r-2 mdui-row-xs-1 mdui-row-sm-2 mdui-row-md-3 mdui-row-lg-4">


		<div class="mdui-col">
		<a href="http://www.wumiantu.com/" target="_blank" style="width:100%;">
		  <li class="mdui-list-item mdui-ripple">
			<div class="mdui-list-item-avatar">
			<img src="https://zh123456-1252949186.cos.ap-chongqing.myqcloud.com/2019/01/13/1547376535.jpg"/>
			</div>
			<div class="mdui-list-item-content">
			  <div class="mdui-list-item-title">撩人的无眠兔</div>
			  <div class="mdui-list-item-text mdui-list-item-one-line">声优宝贝</div>
			</div>
		  </li>
		  </a>
		</div>
		
		<div class="mdui-col">
		<a href="https://suishai.com/" target="_blank" style="width:100%;">
		  <li class="mdui-list-item mdui-ripple">
			<div class="mdui-list-item-avatar">
			<img src="https://cn.gravatar.com/userimage/148230811/a5b5c969654e95d4a2c1f86b0a3caa5c.jpg?size=200"/>
			</div>
			<div class="mdui-list-item-content">
			  <div class="mdui-list-item-title">随晒</div>
			  <div class="mdui-list-item-text mdui-list-item-one-line">栖冲业简，随心而晒。</div>
			</div>
		  </li>
		  </a>
		</div>
				
		<div class="mdui-col">
		<a href="https://www.zhangzhousheng.top/" target="_blank" style="width:100%;">
		  <li class="mdui-list-item mdui-ripple">
			<div class="mdui-list-item-avatar">
			<img src="https://www.zhangzhousheng.top/usr/logo.png"/>
			</div>
			<div class="mdui-list-item-content">
			  <div class="mdui-list-item-title">安の故乡</div>
			  <div class="mdui-list-item-text mdui-list-item-one-line">同样是鱼，鲤鱼可以跃龙门，咸鱼何妨不可以翻身</div>
			</div>
		  </li>
		  </a>
		</div>
						
		<div class="mdui-col">
		<a href="https://www.zhangzhousheng.top/" target="_blank" style="width:100%;">
		  <li class="mdui-list-item mdui-ripple">
			<div class="mdui-list-item-avatar">
			<img src="https://www.zhangzhousheng.top/usr/logo.png"/>
			</div>
			<div class="mdui-list-item-content">
			  <div class="mdui-list-item-title">安の故乡</div>
			  <div class="mdui-list-item-text mdui-list-item-one-line">同样是鱼，鲤鱼可以跃龙门，咸鱼何妨不可以翻身</div>
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
			  <div class="mdui-list-item-text mdui-list-item-one-line">爱生活爱折腾的热血青年</div>
			</div>
		  </li>
		  </a>
	  </div>

	  <div class="mdui-col">
	  <a href="http://www.gaojiachen.top" target="_blank" style="width:100%;">
		  <li class="mdui-list-item mdui-ripple">
			<div class="mdui-list-item-avatar" style="width:40px;height:40px">
			<img src="https://ws3.sinaimg.cn/large/006Xmmmgly1g09f89d62uj30b40b4q37.jpg"/>
			</div>
			<div class="mdui-list-item-content">
			  <div class="mdui-list-item-title"><strong>夜晨博客</strong></div>
			  <div class="mdui-list-item-text mdui-list-item-one-line">我虽生在黑暗，却心向光明</div>
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
			  <div class="mdui-list-item-text mdui-list-item-one-line">本站使用typecho程序。</div>
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
			  <div class="mdui-list-item-text mdui-list-item-one-line">本站使用MDUI前端框架</div>
			</div>
		  </li>
		  </a>
	  </div>
	  
	</ul>

	</div>
		 
<!--点赞和赞赏开始-->
	
	
<div class="mdui-m-b-2 mdui-text-center style="width: 200px">
<div>
	<!--button class="mdui-btn mdui-text-center mdui-color-red mdui-ripple">分享</button-->
	<button class="mdui-btn mdui-text-center mdui-color-red mdui-ripple" mdui-dialog="{target: '#dashang'}">打赏</button>
</div>

<!--对话框开始-->
<div class="mdui-dialog" id="dashang">
  <div class="mdui-dialog-title">打赏采用二维码方式。

   <div class="mdui-float-right"> <button class="mdui-btn mdui-ripple" mdui-dialog-close>关闭</button></div>

  </div>
  

  <div class="mdui-col mdui-p-a-2">
    <div class="mdui-grid-tile">
      <img src="<?php $this->options->dashang(); ?>"/>
    </div>
  </div>


</div>
<!--对话框结束-->

</div>

	
<!--赞赏结束-->

    </article>


</div><!-- end #main-->
<div class="mdui-p-t-1">
	
    <?php $this->need('comments.php'); ?>
</div>


<div class=" mdui-m-t-1"><?php $this->need('footer.php'); ?></div>
