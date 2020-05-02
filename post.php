<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="main">

<div class="mdui-m-t-1">
    <article class="mdui-p-t-1"  style="background-color:#ffffff;margin-left: 10px;margin-right: 10px;">
        <p class="mdui-typo-title mdui-text-center"><strong><?php $this->title() ?></strong></p>
		  <p class="top-text mdui-text-center" style="color: #22333373;">
		  
		  <?php _e(' '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><i class="mdui-icon material-icons">&#xe853;</i><?php $this->author(); ?></a>
		  <?php _e(' '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><i class="mdui-icon material-icons">&#xe192;</i><?php $this->date(); ?></time>
		  <?php _e(' '); ?><i class="mdui-icon material-icons">&#xe867;</i><?php $this->category(','); ?>

		  <i class="mdui-icon material-icons">&#xe417;</i> <?php get_post_view($this) ?>

		  <?php if($this->user->hasLogin()):?>
		  <a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php $this->cid(); ?>" target="_blank"><i class="mdui-icon material-icons">&#xe3c9;</i>编辑</a>
		  <?php endif;?>
		  </p>


         <div class="mdui-typo mdui-shadow-0 mdui-m-a-2" style="text-align:left;">  

		 <?php $this->content(); ?>
		 </div>
		 <div class="mdui-text-center tags mdui-m-a-2">
		 <?php _e('<i class="mdui-icon material-icons">&#xe54e;</i> '); ?><?php $this->tags('', true, 'none'); ?>
		 </div>
		 
		 
		<!--判断是否设置了打赏图片-->
		<?php if($this->options->dashang): ?>
				<div class=" mdui-text-center">
					<button class="mdui-btn mdui-text-center mdui-color-red mdui-ripple" mdui-dialog="{target: '#dashang'}">打赏</button>
				</div>
				
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
		<?php else: ?>

		<?php endif; ?>
		<!-- 打赏结束-->

    </article>
	
	
	


</div><!-- end #main-->

<div>
    <?php $this->need('comments.php'); ?>
</div>


<div class="mdui-card mdui-m-t-1 mdui-m-b-1 mdui-shadow-0" style="margin-left: 10px;margin-right: 10px;box-shadow: 0 5px 15px rgba(0, 0, 0, 0);">
  <div class="mdui-card-actions">
	<div class="mdui-float-left"> <p class="mdui-typo">上一篇： <?php $this->thePrev('%s','没有了'); ?></p></div>
	<div class="mdui-float-right"><p class="mdui-typo">下一篇： <?php $this->theNext('%s','没有了'); ?></p></div>
  </div>
</div>


</div> <!-- main end -->

<?php $this->need('footer.php'); ?>