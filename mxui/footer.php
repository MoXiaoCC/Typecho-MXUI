<footer class="mdui-center mdui-typo mdui-p-a-1 mdui-p-t-3"">

<div class="mdui-typo-body-1 mdui-text-center">


<a href="#top"><button class="mdui-fab mdui-fab-fixed mdui-ripple"><i class="mdui-icon material-icons">&#xe5d8;</i></button></a>

	<!--统计代码开始-->
	<div style="display:none">
	<?php $this->options->tongji(); ?>
	</div>
	<!--统计代码结束-->

	<!-- 每日一言api开始 -->
	<div id="hitokoto">:D 获取中...</div>
	<script src="https://v1.hitokoto.cn/?encode=js&select=%23hitokoto" defer></script>
	<!-- 每日一言api结束 -->

	<div>

	<a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> &copy; 2017-<?php echo date('Y'); ?>  .
	<a href="http://beian.miit.gov.cn/" target="_blank"><?php $this->options->beian(); ?></a>
	</div>
	
	<div id="span_dt_dt"></div><!-- 计时引用 -->

	<!-- 版权开始 -->
	<p class="mdui-typo-caption-opacity">
	<?php _e('Use <a href="http://www.typecho.org" target="_blank">Typecho</a> And <a href="http://www.mdui.org" target="_blank">MDUI</a>'); ?>. 
	Theme by <a href="https://www.moxiao.cc/" target="_blank">MoXiao </a>.
	</p>
	<!-- 版权结束 -->

</div>
</footer>
<!-- end #footer -->


	<!-- 计时js开始 -->
	<script language="javascript">
	function show_date_time(){
	window.setTimeout("show_date_time()", 1000);
	BirthDay=new Date("<?php $this->options->webtime() ?> 00:00:00");//这个日期是可以修改的
	today=new Date();
	timeold=(today.getTime()-BirthDay.getTime());
	sectimeold=timeold/1000
	secondsold=Math.floor(sectimeold);
	msPerDay=24*60*60*1000
	e_daysold=timeold/msPerDay
	daysold=Math.floor(e_daysold);
	e_hrsold=(e_daysold-daysold)*24;
	hrsold=Math.floor(e_hrsold);
	e_minsold=(e_hrsold-hrsold)*60;
	minsold=Math.floor((e_hrsold-hrsold)*60);
	seconds=Math.floor((e_minsold-minsold)*60);
	span_dt_dt.innerHTML="已经运行："+daysold+"天"+hrsold+"小时"+minsold+"分"+seconds+"秒";
	}
	show_date_time();
	</script>
	<!-- 计时js结束 -->


</body><!-- end #body -->
</html>
<?php $this->footer(); ?>