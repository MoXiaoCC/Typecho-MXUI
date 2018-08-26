


  <div class="mdui-divider"></div>

<footer class="mdui-center mdui-typo mdui-p-b-2 mdui-p-t-3">

<div class="mdui-typo-body-1 mdui-text-center">

	    <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> &copy; 2017-<?php echo date('Y'); ?>  .
	   	<br>
	<span id="span_dt_dt"></span><br>

	 <?php _e('Use <a href="http://www.typecho.org">Typecho</a>'); ?>. Theme by <a href="https://www/moxiao.cc/">MoXiao </a>.



	<script language="javascript">
	function show_date_time(){
	window.setTimeout("show_date_time()", 1000);
	BirthDay=new Date("01/17/2018 00:00:00");//这个日期是可以修改的
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
	
</div>
<!--统计代码开始-->
<div style="display:none">
<script src="https://s19.cnzz.com/z_stat.php?id=1263256397&web_id=1263256397" language="JavaScript"></script>
</div>
<!--统计代码结束-->

</footer><!-- end #footer -->

<?php $this->footer(); ?>