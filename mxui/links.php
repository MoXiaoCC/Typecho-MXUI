<?php
/**
 * 自定义页面模板
 *
 * @package custom
 */
 
 
  if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 <div class="main">
<div class="mdui-m-t-1" style="background-color:#ffffff;">

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
		  
    <div class="mdui-typo mdui-shadow-0">  

	<ul class="mdui-list mdui-m-r-2 mdui-list-dense mdui-row-xs-1 mdui-row-sm-2 mdui-row-md-3">
	  <div class="mdui-col">
	  <a href="http://www.wumiantu.com/" target="_blank" style="width:100%;">
		  <li class="mdui-list-item mdui-ripple">
			<div class="mdui-list-item-avatar" style="width:40px;height:40px">
			<img src="https://zh123456-1252949186.cos.ap-chongqing.myqcloud.com/2019/01/13/1547376535.jpg"/>
			</div>
			<div class="mdui-list-item-content">
			  <div class="mdui-list-item-title"><strong>撩人的无眠兔</strong></div>
			  <div class="mdui-list-item-text mdui-list-item-two-line">声优宝贝</div>
			</div>
		  </li>
		  </a>
	  </div>

	  <div class="mdui-col">
	  <a href="https://suishai.com/" target="_blank" style="width:100%;">
		  <li class="mdui-list-item mdui-ripple">
			<div class="mdui-list-item-avatar" style="width:40px;height:40px"><img src="https://en.gravatar.com/userimage/148230811/61da1aeffa2ba6154dd0c71c2245261b.jpg?size=200"/></div>
			<div class="mdui-list-item-content">
			  <div class="mdui-list-item-title"><strong>随晒</strong></div>
			  <div class="mdui-list-item-text mdui-list-item-two-line">栖冲业简，随心而晒。</div>
			</div>
		  </li>
		  </a>
	  </div>

	  <div class="mdui-col">
	  <a href="https://vistre.cn/" target="_blank" style="width:100%;">
		  <li class="mdui-list-item mdui-ripple">
			<div class="mdui-list-item-avatar" style="width:40px;height:40px">
			<!--img src="https://vistre.cn/usr/logo.png"/-->
			</div>
			<div class="mdui-list-item-content">
			  <div class="mdui-list-item-title"><strong>安の故乡</strong></div>
			  <div class="mdui-list-item-text mdui-list-item-two-line">同样是鱼，鲤鱼可以跃龙门，咸鱼何妨不可以翻身</div>
			</div>
		  </li>
		  </a>
	  </div>


  <div class="mdui-col">
	  <a href="http://heng07.com/" target="_blank" style="width:100%;">
		  <li class="mdui-list-item mdui-ripple">
			<div class="mdui-list-item-avatar" style="width:40px;height:40px">
			<img src="https://heng07.com/img/head.png"/>
			</div>
			<div class="mdui-list-item-content">
			  <div class="mdui-list-item-title"><strong>一恒的网志</strong></div>
			  <div class="mdui-list-item-text mdui-list-item-two-line">坚持是最好的品质</div>
			</div>
		  </li>
		  </a>
	  </div>
            

  <div class="mdui-col">
	  <a href="https://blog.yecvip.cn" target="_blank" style="width:100%;">
		  <li class="mdui-list-item mdui-ripple">
			<div class="mdui-list-item-avatar" style="width:40px;height:40px">
			<!--img src="https://s2.ax1x.com/2020/02/22/3Ky3Pf.jpg"/-->
			</div>
			<div class="mdui-list-item-content">
			  <div class="mdui-list-item-title"><strong>夜寒晨暖</strong></div>
			  <div class="mdui-list-item-text mdui-list-item-two-line">夜寒都在早梅稍，明朝晨来东窗暖</div>
			</div>
		  </li>
		  </a>
	  </div>
            

  <div class="mdui-col">
	  <a href="https://lapuhou.com" target="_blank" style="width:100%;">
		  <li class="mdui-list-item mdui-ripple">
			<div class="mdui-list-item-avatar" style="width:40px;height:40px">
			<img src="https://api.lapuhou.com/qlog/index.php?qq=7628592"/>
			</div>
			<div class="mdui-list-item-content">
			  <div class="mdui-list-item-title"><strong>拉普猴博客</strong></div>
			  <div class="mdui-list-item-text mdui-list-item-two-line">在学习路上的小猴子</div>
			</div>
		  </li>
		  </a>
	  </div>
  <div class="mdui-col">
	  <a href="https://www.mu00.cn" target="_blank" style="width:100%;">
		  <li class="mdui-list-item mdui-ripple">
			<div class="mdui-list-item-avatar" style="width:40px;height:40px">
			<img src="https://www.mu00.cn/logo.jpg"/>
			</div>
			<div class="mdui-list-item-content">
			  <div class="mdui-list-item-title"><strong>沐沐小栈</strong></div>
			  <div class="mdui-list-item-text mdui-list-item-two-line">一个专注于记录学习点滴、分享技术文章、经验分享、网络资源、人生杂谈的个人博客！</div>
			</div>
		  </li>
		  </a>
	  </div>
             
	  <div class="mdui-col">
	  <a href="http://typecho.org/" target="_blank" style="width:100%;">
		  <li class="mdui-list-item mdui-ripple">
			<div class="mdui-list-item-avatar" style="width:40px;height:40px">T</div>
			<div class="mdui-list-item-content">
			  <div class="mdui-list-item-title"><strong>typecho</strong></div>
			  <div class="mdui-list-item-text mdui-list-item-two-line">本站使用typecho程序。</div>
			</div>
		  </li>
		  </a>
	  </div>
      
	  <div class="mdui-col">
	  <a href="https://www.mdui.org/" target="_blank" style="width:100%;">
		  <li class="mdui-list-item mdui-ripple">
			<div class="mdui-list-item-avatar" style="width:40px;height:40px">MDUI</div>
			<div class="mdui-list-item-content">
			  <div class="mdui-list-item-title"><strong>MDUI</strong></div>
			  <div class="mdui-list-item-text mdui-list-item-two-line">本站使用MDUI前端框架</div>
			</div>
		  </li>
		  </a>
	  </div>
	  

	</ul>

         <div class="mdui-typo mdui-shadow-0 mdui-m-a-3">   <?php $this->content(); ?>

		 </div>



	</div>
		 
		 
		<!--判断是否设置了打赏图片-->
		<?php if($this->options->dashang): ?>
				<div class=" mdui-text-center">
<button class="mdui-btn mdui-text-center mdui-color-red mdui-ripple" mdui-dialog="{target: '#dashang'}">打赏</button>
				</div>
				
				<div class="mdui-m-b-2 mdui-text-center" style="width:200px;">
				<!--对话框开始-->
				<div class="mdui-dialog" id="dashang">
				  <div class="mdui-dialog-title">打赏采用二维码方式。
				   <div class="mdui-float-right"> <button class="mdui-btn mdui-ripple" mdui-dialog-close>关闭</button></div>
				  </div>
				  <div class="mdui-col mdui-p-a-2">
					<div class="mdui-grid-tile">
					  <img src="<?php $this->options->dashang(); ?>"/>
					</div>
				  </div>
				</div>
				<!--对话框结束-->
				</div>
		<?php else: ?>

		<?php endif; ?>
		<!-- 打赏结束-->

    </article>


</div><!-- end #main-->
<div class="mdui-p-t-1">
	
    <?php $this->need('comments.php'); ?>
</div>

</div>
<div class=" mdui-m-t-1"><?php $this->need('footer.php'); ?></div>
