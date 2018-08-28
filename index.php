<?php

/**
 * 这是MoXiao的第一套主题。你可以在<a href="http://moxiao.cc/">MoXiao的博客</a>获得更多关于此主题的信息
 * 
 * @package MXUI
 * @author MoXiao
 * @version 0.0.1
 * @link http://moxiao.cc/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');

 ?>
 



<div class=" mdui-m-a-1">


<div class="row">

 <div class="mdui-row">

	<div class="mdui-col-xs-12 mdui-text-center ">
		<?php while($this->next()): ?>

		<div  class="mdui-text-color-white   mdui-m-t-1" style="background-image: url('<?php showThumbnail($this); ?>');background-repeat: no-repeat;width:100%;background-position:center center; ">
			

			<div  class="" style="background-image: url('<?php $this->options->themeUrl('/img/hei50.png'); ?>');background-repeat: no-repeat;width:100%;background-position:center center;">

			<?php if($this->options->slimg && 'guanbi'==$this->options->slimg): ?>
			<?php else: ?>
			<?php if($this->options->slimg && 'showoff'==$this->options->slimg): ?><a href="<?php $this->permalink() ?>" ><?php showThumbnail($this); ?></a>
			<?php else: ?>
					<?php endif; ?>
					<?php endif; ?>

						<div class="mdui-typo-body-1-opacity  mdui-text-center  mdui-p-a-5">
						<a class="mdui-typo-title mdui-text-color-white" href="<?php $this->permalink() ?>"><?php $this->sticky(); $this->title() ?></a>
							<p>
							
							<a class="mdui-text-color-white" href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>在<time datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time>发表到<?php $this->category(','); ?>，浏览量: <?php get_post_view($this) ?>
							</p>
						</div>

			</div>

			
		</div>

		
	<?php endwhile; ?>

	<div class=" mdui-text-center mdui-m-a-2"> 

	<?php $this->pageNav('上一页', '下一页',10,'',array('wrapTag' => 'div', 'wrapClass' => 'pagenav','itemTag' => '','currentClass' => 'current',)); ?>

	</div>	
	
	
	
		</div>

</div><!-- end #row-->


</div><!-- end #row-->
</div><!-- end #row-->


	<?php $this->need('sidebar.php'); ?>


<?php $this->need('footer.php'); ?>



<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>


</body><!-- end #body -->
	<script src="<?php $this->options->themeUrl('js/mdui.min.js'); ?>"></script>

</html>

