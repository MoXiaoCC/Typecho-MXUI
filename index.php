<?php

/**
 * 这是MoXiao的第一套主题。你可以在<a href="http://moxiao.cc/"> MoXiao的博客 </a>获得更多关于此主题的信息
 * 
 * @package MXUI
 * @author MoXiao
 * @version 1.0.0
 * @link http://moxiao.cc/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');

 ?>

<div class="row mdui-m-a-1">
 
 <!--置顶开始，如果不需要可以删除这段-->
 <div class="mdui-card-media mdui-valign mdui-hoverable mdui-shadow-0" style="background-image: url(<?php $this->options->top_img_url(); ?>);background-size: cover;background-repeat: no-repeat;background-position:center center;width:100%;height:70px;border-radius: 5px;">
 <a href="<?php $this->options->top_post_url(); ?>" class="mdui-center mdui-typo-body-2 mdui-text-color-white-text" title="<?php $this->options->top_tittle(); ?>"   style="font-size:20px;">
 <strong>【置顶】<?php $this->options->top_tittle(); ?></strong>
 </a>
 </div>
 <!-- 置顶结束-->

  
 <div class="mdui-row-md-3 mdui-row-xs-1 mdui-row-sm-2">

		<?php while($this->next()): ?>


		
<div class="mdui-col mdui-m-t-2  mdui-text-center">
			<?php if($this->options->slimg && 'guanbi'==$this->options->slimg): ?>
			<?php else: ?>
			<?php if($this->options->slimg && 'showoff'==$this->options->slimg): ?><a href="<?php $this->permalink() ?>" ><?php showThumbnail($this); ?></a>
			<?php else: ?>
					<?php endif; ?>
					<?php endif; ?>

	<a class="" href="<?php $this->permalink() ?>">
		<div class="mdui-card mdui-shadow-0 mdui-hoverable" style="border-radius: 5px;">
			  <div class="mdui-card-media"style="background-image: url('<?php showThumbnail($this); ?>');
			background-size: cover;background-repeat: no-repeat;background-position:center center;width:100%;height:130px">
			  </div>
		  <div class="mdui-card-actions">
				<div class="mdui-typo-subheading-opacity mdui-text-truncate mdui-m-b-1" style="max-width: 100%;color:#000000;"><strong><?php $this->title() ?></strong>
				</div>
				<div class="mdui-typo-caption-opacity">
				<?php _e(' 发布时间：'); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
				浏览量: <?php get_post_view($this) ?>
				</div>
		  </div>
		</div>
	</a>		
</div>
	
	<?php endwhile; ?>

	</div><!-- end #row-->
</div><!-- end #row-->


<!--样式来源canwu.pro-->
<div  class="mdui-m-a-1 mdui-m-b-1" style="border-radius: 5px;background-color:#ffffff;">
	<div class=" mdui-text-center mdui-p-a-1 mdui-typo-title"> 

	<?php $this->pageNav('<<', '>>',10,'',array('wrapTag' => 'ol', 'wrapClass' => 'page-navigator','itemTag' => 'li','currentClass' => 'current',)); ?>

	</div>	
</div>	
	
<!--样式来源canwu.pro-->


<?php $this->need('footer.php'); ?>

<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>