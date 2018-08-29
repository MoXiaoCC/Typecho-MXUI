<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="mdui-m-a-1">

    <article>
        <p class="mdui-typo-title mdui-text-center"><strong><?php $this->title() ?></strong></p>
		
		  <p class="mdui-typo-subheading-opacity mdui-text-center">
		  <?php _e(' '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
		  <?php _e(' '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>
		  <?php _e('发布到 '); ?><?php $this->category(','); ?>

		  阅读量 <?php get_post_view($this) ?>
		  </p>



         <div class="mdui-typo mdui-shadow-0 mdui-m-a-1 mdui-p-a-1" style="text-align:left;">  
		 <?php $this->content(); ?>
		 </div>
		 <div class=""> <?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></div>
    </article>

	
<!--点赞和赞赏开始-->
	
	
<div class="mdui-text-center style="width: 200px">
<div>
	<!--button class="mdui-btn mdui-text-center mdui-color-red mdui-ripple">点赞</button-->
	<!--button class="mdui-btn mdui-text-center mdui-color-red mdui-ripple" mdui-dialog="{target: '#dashang'}">打赏</button-->
</div>

<!--对话框开始-->
<div class="mdui-dialog" id="dashang">
  <div class="mdui-dialog-title">打赏采用二维码方式，望须知。</div>
  
  <div class="mdui-row-xs-4 mdui-row-md-4 mdui-grid-list">
  <div class="mdui-col">
    <div class="mdui-grid-tile">
      <img src=""/>
    </div>
  </div>
    <div class="mdui-col">
    <div class="mdui-grid-tile">
      <img src="<?php $this->options->themeUrl('/img/wx.jpg'); ?>"/>
    </div>
  </div>
  <div class="mdui-col">
    <div class="mdui-grid-tile">
      <img src="<?php $this->options->themeUrl('/img/zfb.jpg'); ?>"/>
    </div>
  </div>
    <div class="mdui-col">
    <div class="mdui-grid-tile">
      <img src=""/>
    </div>
  </div>

</div>
  
  <div class="mdui-dialog-actions">
    <button class="mdui-btn mdui-ripple" mdui-dialog-close>关闭</button>
  </div>
</div>
<!--对话框结束-->

</div>
  <br><br>
<!--div class="mdui-card mdui-color-red"> 
	<div class="mdui-typo-body-2-opacity mdui-p-a-1">声明：本站内容除特殊标注之外的内容皆来自网络。如有侵权请联系moxiao.cc@live.com，将会在第一时间处理。</div> 
</div-->

	
<!--点赞和赞赏结束-->


    <?php $this->need('comments.php'); ?>
	
<div class="mdui-card mdui-shadow-0  mdui-m-a-1  mdui-p-a-1">
<div class="mdui-float-left mdui-p-a-1">上一篇: <?php $this->thePrev('%s','没有了'); ?></div>
<div class="mdui-float-right mdui-p-a-1">下一篇: <?php $this->theNext('%s','没有了'); ?></div>
</div>


</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
