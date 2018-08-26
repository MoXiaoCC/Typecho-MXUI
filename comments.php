<?php function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }
 
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
?>
 
 
 
<!--li id="li-<?php $comments->theId(); ?>" class="comment-body<?php 
if ($comments->levels > 0) {
    echo ' comment-child';
    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
} else {
    echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
echo $commentClass;
?>"-->

<ul class="mdui-list mdui-list-dense">
  <li class="mdui-list-item mdui-ripple">
    <div class="mdui-list-item-avatar"><img class="mdui-img-rounded" <?php $comments->gravatar('40', ''); ?></div>
    <div class="mdui-list-item-content">
      <div class="mdui-list-item-title">
	  <?php $comments->author(); ?> <a href="<?php $comments->permalink(); ?>"><?php $comments->date('Y-m-d H:i'); ?></a> <?php $comments->reply(); ?>      
	  <div class="mdui-list-item-text mdui-list-item-two-line"><?php $comments->content(); ?></div>
	  </div>

    </div>
  </li>
  <li class="mdui-divider-inset mdui-m-y-0"></li>
</ul>

<?php if ($comments->children) { ?>
    <div class="comment-children">
        <?php $comments->threadedComments($options); ?>
    </div>
<?php } ?>
<?php } ?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>


<div class="mdui-row">

	<div class="mdui-card mdui-shadow-0 mdui-hoverable mdui-m-a-1 mdui-p-a-1">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
    <?php $comments->listComments(); ?>
    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
	</div>

	
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
	

    <div id="<?php $this->respondId(); ?>" class="respond">
	

	
		<div class="mdui-card mdui-shadow-0 mdui-hoverable mdui-m-a-1 mdui-p-a-2">
    	<h3><?php _e('添加新评论'); ?></h3>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?> &raquo;</a></p>
    		<div class="mdui-col-xs-12 mdui-textfield mdui-textfield-floating-label">
                <label for="textarea" class="mdui-textfield-label required"><?php _e('内容'); ?></label>
                <textarea rows="2" cols="30" name="text" id="textarea" class="mdui-textfield-input textarea" required ><?php $this->remember('text'); ?></textarea>
            </div>
			
    		<div>
			        <div class="cancel-comment-reply"><?php $comments->cancelReply(); ?> </div>
                <button type="submit" class="mdui-btn mdui-color-pink-accent mdui-ripple submit"><?php _e('提交评论'); ?></button>
            </div>
            <?php else: ?>
			
			您还没登陆，请 <a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a>
			
            <?php endif; ?>
			
			</div>

    	</form>
    </div>

	
    <?php else: ?>

	<div class="mdui-card mdui-color-red mdui-shadow-0 mdui-hoverable mdui-m-a-1"> 
	<div class="mdui-typo-body-2-opacity mdui-m-a-1"><h3>！！！<?php _e('评论已关闭'); ?></h3></div> 
	</div>


    <?php endif; ?>
</div>
