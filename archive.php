<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="row mdui-text-center ">

		
            <!--article class="post" itemscope itemtype="http://schema.org/BlogPosting">
			
    			<h2 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
				
				
    			<ul class="post-meta">
    				<li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
    				<li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
    				<li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
                    <li itemprop="interactionCount"><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
    			</ul>
				
				
                <div class="post-content" itemprop="articleBody">
        			<?php $this->content('- 阅读剩余部分 -'); ?>
                </div>
				
				
    		</article-->
			
 <div class="mdui-row">
        <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?>
		</h3>
		
	
		
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
		

			
			
<div  class=" mdui-m-a-1 mdui-text-color-white" style="background-image: url('<?php showThumbnail($this); ?>');background-repeat: no-repeat;width:100%;background-position:center center;">

			
<!--div  class="" style="background-image: url('./usr/themes/mxui/img/hei50.png');background-repeat: no-repeat;width:100%;background-position:center center;"-->

<?php if($this->options->slimg && 'guanbi'==$this->options->slimg): ?>
<?php else: ?>
<?php if($this->options->slimg && 'showoff'==$this->options->slimg): ?><a href="<?php $this->permalink() ?>" ><?php showThumbnail($this); ?></a>
<?php else: ?>
        <?php endif; ?>
        <?php endif; ?>
			
			<div class="mdui-typo-title mdui-p-t-5">
				<a class="mdui-text-color-white" href="<?php $this->permalink() ?>"><?php $this->sticky(); $this->title() ?></a>
			</div>
			<div class="mdui-typo-body-1-opacity  mdui-text-center mdui-p-b-5">
				<p>
				<a class="mdui-text-color-white" href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>在<time datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time>发表到<?php $this->category(','); ?>，共有<a  class="mdui-text-color-white" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a>
				</p>
			</div>
<!--/div-->
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

	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
