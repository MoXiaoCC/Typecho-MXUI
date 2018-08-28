<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div style="max-width:1000px;" class="mdui-m-a-1">

    <article>
        <p class="mdui-typo-title"><strong><?php $this->title() ?></strong></p>
		
		  <p class="mdui-typo-subheading-opacity">
		  <?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
		  <?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>
		  		  浏览量: <?php get_post_view($this) ?>
		  

		  </p>
         <div class="mdui-typo-subheading-opacity mdui-shadow-0 mdui-m-a-1 mdui-p-a-1">   <?php $this->content(); ?>

		 </div>
    </article>

	
    <?php $this->need('comments.php'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
