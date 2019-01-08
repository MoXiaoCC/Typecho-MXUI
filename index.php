<?php

/**
 * 这是MoXiao的第一套主题。你可以在<a href="http://moxiao.cc/">MoXiao的博客</a>获得更多关于此主题的信息
 * 
 * @package MXUI
 * @author MoXiao
 * @version 0.0.2
 * @link http://moxiao.cc/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');

 ?>





<div class="row mdui-m-a-1">
 

 
  <?php boke8GetIdPosts('73,0');?>
  
 <div class="mdui-row-md-3 mdui-row-xs-1 mdui-row-sm-2">

		<?php while($this->next()): ?>


		
<div class="mdui-col mdui-m-t-2  mdui-text-center">
			<?php if($this->options->slimg && 'guanbi'==$this->options->slimg): ?>
			<?php else: ?>
			<?php if($this->options->slimg && 'showoff'==$this->options->slimg): ?><a href="<?php $this->permalink() ?>" ><?php showThumbnail($this); ?></a>
			<?php else: ?>
					<?php endif; ?>
					<?php endif; ?>

<a class="" href="<?php $this->permalink() ?>" target="_blank">
<div class="mdui-card mdui-hoverable" style="border-radius: 5px;">
  <div class="mdui-card-media"style="background-image: url('<?php showThumbnail($this); ?>');
background-size: cover;background-repeat: no-repeat;background-position:center center;width:100%;height:180px">

  </div>
  <div class="mdui-card-actions">
  		
		<span class="mdui-typo-caption-opacity"><?php _e(' 发布时间：'); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
		浏览量: <?php get_post_view($this) ?>
		</span><br>
		<p class="mdui-typo-subheading-opacity mdui-text-truncate" style="max-width: 100%;"><strong><?php $this->sticky(); $this->title() ?><strong></p>

  </div>
</div>
</a>		
</div>
	
	<?php endwhile; ?>

	</div><!-- end #row-->
</div><!-- end #row-->


<!--样式来源canwu.pro-->
	<div class=" mdui-text-center mdui-m-a-2 mdui-typo-title"> 

	<?php $this->pageNav('<<', '>>',10,'',array('wrapTag' => 'ol', 'wrapClass' => 'page-navigator','itemTag' => 'li','currentClass' => 'current',)); ?>

	</div>	
	
<!--样式来源canwu.pro-->

	<!--?php $this->need('sidebar.php'); ?-->

<?php $this->need('footer.php'); ?>

<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>