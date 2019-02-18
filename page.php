<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="mdui-m-t-1" style="background-color:#ffffff;">

    <article class="mdui-p-t-1 mdui-p-b-1">
        <p class="mdui-typo-title mdui-text-center"><strong><?php $this->title() ?></strong></p>
		
		  <p class="mdui-typo mdui-text-center">
		  <?php _e(' '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
		  <?php _e(' '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a> 发布 


		  阅读量 <?php get_post_view($this) ?>
		  </p>
         <div class="mdui-typo mdui-shadow-0 mdui-m-a-3">   <?php $this->content(); ?>

		 </div>
    </article>


</div><!-- end #main-->
<div class="mdui-p-t-1">
	
    <?php $this->need('comments.php'); ?>
</div>


<div class=" mdui-m-t-1"><?php $this->need('footer.php'); ?></div>
