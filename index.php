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
 
 




<div class="container">
<div class="row mdui-text-center ">

 <div class="mdui-row">

	<div class="mdui-col-xs-12">
		<?php while($this->next()): ?>
<br>


<div  class="mdui-text-color-white" style="background-image: url('<?php showThumbnail($this); ?>');background-repeat: no-repeat;width:100%;background-position:center center;">

			
<div  class="" style="background-image: url('./usr/themes/mxui/img/hei50.png');background-repeat: no-repeat;width:100%;background-position:center center;">

<?php if($this->options->slimg && 'guanbi'==$this->options->slimg): ?>
<?php else: ?>
<?php if($this->options->slimg && 'showoff'==$this->options->slimg): ?><a href="<?php $this->permalink() ?>" ><?php showThumbnail($this); ?></a>
<?php else: ?>

        <?php endif; ?>
        <?php endif; ?>
		
		
		
					<br>

			<div class="mdui-typo-title">
				<a class="mdui-text-color-white" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
			</div>
			<div class="mdui-typo-body-1-opacity  mdui-text-center ">
				<p>
				<a class="mdui-text-color-white" href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>在<time datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time>发表到<?php $this->category(','); ?>，共有<a  class="mdui-text-color-white" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a>
				</p>
			</div>
					<br>

</div>
</div>



	</div>

</div>
	<?php endwhile; ?>
	
	
	
    <!--?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?-->

	<div class=" mdui-text-center "> 
	<br>
	<?php $this->pageNav('上一页', '下一页',10,'',array('wrapTag' => 'div', 'wrapClass' => 'pagenav','itemTag' => '','currentClass' => 'current',)); ?>

	</div>	
</div>	
	
	
</div><!-- end #row-->







<?php $this->need('sidebar.php'); ?>




<!--?php $this->need('footer.php'); ?-->
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

</div><!-- end .container -->






</body><!-- end #body -->
</html>

