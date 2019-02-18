<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


<div class="mdui-m-t-1">
    <article class="mdui-p-t-1"  style="background-color:#ffffff;">
        <p class="mdui-typo-title mdui-text-center"><strong><?php $this->title() ?></strong></p>
		  <p class="mdui-typo mdui-text-center">
		  <?php _e(' '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
		  <?php _e(' '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>
		  <?php _e('发布到 '); ?><?php $this->category(','); ?>

		  阅读量 <?php get_post_view($this) ?>
		  </p>


         <div class="mdui-typo mdui-shadow-0 mdui-m-a-3" style="text-align:left;">  

		 <?php $this->content(); ?>
		 </div>
		 <div class="mdui-typo mdui-text-center">
		 <?php _e('标签: '); ?><?php $this->tags(' | ', true, 'none'); ?>
		 </div>
		  <div class=" mdui-text-center">
		<button class="mdui-m-a-2 mdui-btn mdui-text-center mdui-color-red mdui-ripple" mdui-dialog="{target: '#dashang'}">打赏</button>
		 </div>
    </article>

	
	<!--赞赏开始-->
		
		<div class="mdui-m-b-2 mdui-text-center" style="width:200px;">
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


</div><!-- end #main-->

<div>
    <?php $this->need('comments.php'); ?>
</div>


<div class="mdui-card mdui-m-t-1 mdui-m-b-1 mdui-shadow-0">
  <div class="mdui-card-actions">
<div class="mdui-float-left"> <p class="mdui-typo">上一篇： <?php $this->thePrev('%s','没有了'); ?></p></div>
<div class="mdui-float-right"><p class="mdui-typo">下一篇： <?php $this->theNext('%s','没有了'); ?></p></div>
  </div>
</div>


<?php $this->need('footer.php'); ?>