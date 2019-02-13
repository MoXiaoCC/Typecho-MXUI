<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div id="pjax-container">
<div class="row mdui-text-center mdui-m-a-1  ">
<div class="mdui-row mdui-m-a-1">

			
 <div class="mdui-row-md-3 mdui-row-xs-1 mdui-row-sm-2">
        <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?>
		</h3>
		
	
		
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
			
<div class="mdui-col mdui-m-t-2">
			<?php if($this->options->slimg && 'guanbi'==$this->options->slimg): ?>
			<?php else: ?>
			<?php if($this->options->slimg && 'showoff'==$this->options->slimg): ?><a href="<?php $this->permalink() ?>" ><?php showThumbnail($this); ?></a>
			<?php else: ?>
					<?php endif; ?>
					<?php endif; ?>

<a class="" href="<?php $this->permalink() ?>">
<div class="mdui-card mdui-hoverable" style="border-radius: 5px;">
  <div class="mdui-card-media"style="background-image: url('<?php showThumbnail($this); ?>');
background-size: cover;background-repeat: no-repeat;background-position:center center;width:100%;height:130px">

  </div>
		  <div class="mdui-card-actions">
				<div class="mdui-typo-subheading-opacity mdui-text-truncate mdui-m-b-1" style="max-width: 100%;color:#000000;"><strong><?php $this->sticky(); $this->title() ?></strong>
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
        <?php else: ?>
		
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
			
        <?php endif; ?>



		</div>	
<!--样式来源canwu.pro-->
	<div class=" mdui-text-center mdui-p-a-3 mdui-typo-title"> 

	<?php $this->pageNav('<<', '>>',10,'',array('wrapTag' => 'ol', 'wrapClass' => 'page-navigator','itemTag' => 'li','currentClass' => 'current',)); ?>

	</div>	
	
<!--样式来源canwu.pro-->

	
</div><!-- end #main -->
</div><!-- end #main -->
	
</div>
	<!--?php $this->need('sidebar.php'); ?-->

	<?php $this->need('footer.php'); ?>
		
