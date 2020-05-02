<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="main">

<div class="">

    <article class="mdui-p-t-1 mdui-p-b-1">
        <p class="mdui-typo-title mdui-text-center"><strong><?php $this->title() ?></strong></p>
		
		<p class="top-text mdui-text-center" style="color: #22333373;">
		  
		  <?php _e(' '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><i class="mdui-icon material-icons">&#xe853;</i><?php $this->author(); ?></a>
		  <?php _e(' '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><i class="mdui-icon material-icons">&#xe192;</i><?php $this->date(); ?></time>
		   <i class="mdui-icon material-icons">&#xe417;</i> <?php get_post_view($this) ?>

		  <?php if($this->user->hasLogin()):?>
		  <a href="<?php $this->options->adminUrl(); ?>write-page.php?cid=<?php $this->cid(); ?>" target="_blank"><i class="mdui-icon material-icons">&#xe3c9;</i>编辑</a>
		  <?php endif;?>

		  </p>
         <div class="mdui-typo mdui-shadow-0 mdui-m-a-3">   <?php $this->content(); ?>

		 </div>
    </article>


</div><!-- end #main-->
<div class="mdui-p-t-1">
	
    <?php $this->need('comments.php'); ?>
</div>


</div>


<div class=" mdui-m-t-1"><?php $this->need('footer.php'); ?></div>
