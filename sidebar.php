<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

 <div class="mdui-row mdui-m-t-3">
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
	
    <section class="mdui-hidden-xs mdui-col-xs-6 mdui-col-sm-2  mdui-typo">

        <ul class="widget-list">
		<div  class="mdui-typo-title"><?php _e('最近回复'); ?></div>
        <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
        <?php while($comments->next()): ?>
            <li><a href="<?php $comments->permalink(); ?>" target="_blank"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(35, '...'); ?></li>
        <?php endwhile; ?>
        </ul>
    </section>
	
    <?php endif; ?>


    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
    <section class="mdui-col-xs-6 mdui-col-sm-2  mdui-typo">
	
	<ul>
			<div  class="mdui-typo-title"><?php _e('分类'); ?></div>
    <?php $this->widget('Widget_Metas_Category_List')
               ->parse('<li><a href="{permalink}" target="_blank">{name} ({count})</a></li>'); ?>
	</ul>	
	

	</section>
    <?php endif; ?>





    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)): ?>
	<section class="mdui-col-xs-6 mdui-col-sm-2 mdui-typo">

        <ul>
				<div  class="mdui-typo-title"><?php _e('其它'); ?></div>

            <li><a href="<?php $this->options->feedUrl(); ?>" target="_blank"><?php _e('文章 RSS'); ?></a></li>
            <li><a href="<?php $this->options->commentsFeedUrl(); ?>" target="_blank"><?php _e('评论 RSS'); ?></a></li>
            <li><a href="http://www.typecho.org" target="_blank">Typecho</a></li>
        </ul>
	</section>
    <?php endif; ?>

</div><!-- end #sidebar -->
