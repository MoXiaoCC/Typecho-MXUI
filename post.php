<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div style="max-width:1000px;">



    <article>
        <p class="mdui-typo-title"><strong><?php $this->title() ?></strong></p>
		
		  <p class="mdui-typo-subheading-opacity">
		  <?php _e('分类: '); ?><?php $this->category(','); ?>
		  <?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
		  <?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>
		  </p>
		

		
		
		
		
<style>
         p{letter-spacing:1px;line-height:30px;font-size:20px;}
		 </style>

            <?php $this->content(); ?>
      
		
		
		
        <p itemprop="keywords" class="tags"><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p>
		
		
    </article>
	
	
	
	

	
<!--点赞和赞赏开始-->
	
	
<div class="mdui-text-center style="width: 200px">
<div>
	<button class="mdui-btn mdui-text-center mdui-color-red mdui-ripple">点赞</button>
	<button class="mdui-btn mdui-text-center mdui-color-red mdui-ripple" mdui-dialog="{target: '#dashang'}">打赏</button>
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
      <img src="weixin.jpg"/>
    </div>
  </div>
  <div class="mdui-col">
    <div class="mdui-grid-tile">
      <img src="zfb.jpg"/>
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
<div class="mdui-card mdui-color-red"> 
	<div class="mdui-typo-body-2-opacity mdui-p-a-1">声明：本站内容除特殊标注之外的内容皆来自网络。如有侵权请联系moxiao.cc@live.com，将会在第一时间处理。</div> 
</div>

	
<!--点赞和赞赏结束-->
	
	
	
	
	
	
	
	
	
	
	
	
	
	

    <?php $this->need('comments.php'); ?>

    <ul class="post-near">
        <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
        <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
    </ul>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
