<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="row mdui-text-center mdui-m-a-1  ">
<div class="mdui-row ">

			
 <div class="mdui-col-xs-12">
        <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?>
		</h3>
		
	
		
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
			
<div  class="mdui-text-color-white mdui-m-t-1" style="background-image: url('<?php showThumbnail($this); ?>');background-repeat: no-repeat;width:100%;background-position:center center;">

			
<div  class="" style="background-image: url('<?php $this->options->themeUrl('/img/hei50.png'); ?>');background-repeat: no-repeat;width:100%;background-position:center center;">

<?php if($this->options->slimg && 'guanbi'==$this->options->slimg): ?>
<?php else: ?>
<?php if($this->options->slimg && 'showoff'==$this->options->slimg): ?><a href="<?php $this->permalink() ?>" ><?php showThumbnail($this); ?></a>
<?php else: ?>
        <?php endif; ?>
        <?php endif; ?>

			<div class="mdui-typo-body-1-opacity  mdui-text-center mdui-p-a-5">
			<a class="mdui-typo-title mdui-text-color-white" href="<?php $this->permalink() ?>"><?php $this->sticky(); $this->title() ?></a>
				<p>
				<a class="mdui-text-color-white" href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>在<time datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time>发表到<?php $this->category(','); ?>，浏览量: <?php get_post_view($this) ?>
				</p>
			</div>
</div>
</div>
			

			
    	<?php endwhile; ?>
        <?php else: ?>
		
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
			
        <?php endif; ?>
		<div class=" mdui-text-center "> 
		<br>
		<?php $this->pageNav('上一页', '下一页',10,'',array('wrapTag' => 'div', 'wrapClass' => 'pagenav','itemTag' => '','currentClass' => 'current',)); ?>

		</div>	

		</div>	

	
</div><!-- end #main -->
</div><!-- end #main -->
	
		
	<?php $this->need('sidebar.php'); ?>

	<?php $this->need('footer.php'); ?>
		