<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>




<?php function threadedComments($comments, $options) {
    $commentClass = '';
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
    ?>
    <li id="li-<?php $comments->theId(); ?>" style="list-style:none;margin:0px;padding:0px;" class="mdui-p-a-1 comment-body<?php
    if ($comments->levels > 0) {
        echo ' comment-child';
        $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
    } else {
        echo ' comment-parent';
    }
    $comments->alt(' comment-odd', ' comment-even');
    echo $commentClass;
    ?>">
<div class="mdui-row mdui-p-t-1 mdui-hoverable mdui-card" style="border-radius: 5px;">
<div id="<?php $comments->theId(); ?>">
	  <div class="gravatarimg">
		<?php $comments->gravatar('40', ''); ?>
	  </div>
	<div class="commentc">
		<span class="mdui-typo-body-1">
            <?php $comments->author(); ?>
            <?php if ($comments->authorId) {
                if ($comments->authorId == $comments->ownerId) {
                    echo "<span class='author-after-text mdui-text-color-red'>[作者]</span>";
                }?>
            <?php }?>
        </span>
		
        <a href="<?php $comments->permalink(); ?>" class="mdui-typo-body-1 mdui-text-color-black"><?php $comments->date('Y-m-d H:i'); ?></a>
		<div class="mdui-float-right"><?php $comments->reply(); ?></div>
         
		<span class="mdui-typo"><?php $comments->content(); ?> </span>
	 </div>
	 
</div>
		
	</div>	
        <?php if ($comments->children) { ?>
            <div class="comment-children mdui-m-l-1">
                <?php $comments->threadedComments($options); ?>
            </div>
        <?php } ?>
</li>
<?php } ?>




<div class="mdui-p-t-1" id="comments"  style="background-color:#ffffff;">

    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
    <div class="mdui-divider"></div>
	<h3 class="mdui-p-a-1 mdui-text-center"><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
    <?php $comments->listComments(); ?>
		

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
     <div class="mdui-divider"></div>
    <div id="<?php $this->respondId(); ?>" class="box2 respond">


    	<h3 id="response" class="mdui-text-center"><?php _e('添加新评论'); ?>

		</h3>

		
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form" class="mdui-p-r-3 mdui-p-l-3 mdui-p-b-5">
            <?php if($this->user->hasLogin()): ?>

            <?php else: ?>

			<div class="mdui-row">
    		<div class="mdui-textfield mdui-textfield-floating-label mdui-col-xs-4">
                <label for="author" class="required mdui-textfield-label"><?php _e('* 称呼'); ?></label>
    			<input type="text" name="author" id="author" class="text mdui-textfield-input" value="<?php $this->remember('author'); ?>" required />
    		</div>
			
    		<div class="mdui-textfield mdui-textfield-floating-label mdui-col-xs-4">
                <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required mdui-textfield-label"<?php endif; ?>><?php _e('* Email'); ?></label>
    			<input type="email" name="mail" id="mail" class="text mdui-textfield-input" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
    		</div>
			
    		<div class="mdui-textfield mdui-textfield-floating-label mdui-col-xs-4">
                <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required mdui-textfield-label"<?php endif; ?>><?php _e('网站'); ?></label>
    			<input type="url" name="url" id="url" class="text mdui-textfield-input" type="email" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
    		</div>
			</div>
              		
            <?php endif; ?>

			<div class="mdui-textfield mdui-textfield-floating-label">

                <label for="textarea" class="required mdui-textfield-label"><?php _e('* 点击输入内容'); ?></label>
                <textarea name="text" id="textarea" class="textarea mdui-textfield-input" required><?php $this->remember('text'); ?></textarea>
            </div>
			<div>

            <div class="mdui-float-right"><?php $comments->cancelReply(); ?>&nbsp;&nbsp;&nbsp;
            <?php if($this->user->hasLogin()): ?>
                <?php _e('当前登录身份: '); ?>
                <a href="<?php $this->options->profileUrl(); ?>"  ><?php $this->user->screenName(); ?></a> 
                <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?></a>
                <?php else: ?>
                <?php endif; ?>
            <button type="submit" class="submit mdui-btn mdui-color-theme-accent mdui-ripple"><?php _e('提交评论'); ?></button>
            </div>
			
            </div>
			
			



    	</form>
		
		
		
		
		
		
		
		
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
