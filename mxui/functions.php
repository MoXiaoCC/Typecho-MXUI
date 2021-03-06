<?php
/**

 * Functions
 * 
 * @author MoXiao
 * @link https://moxiao.cc
 * @version 2.0.0
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {

    echo '<style>button.btn.primary {position: fixed;right: 50%;bottom: 20px;margin-right: -40px;}.typecho-foot {
    padding: 4em 0 5em;}</style><p style="font-size:14px;"><span style="display:block;margin-bottom:10px;margin-top:10px;font-size:18px;color:#233;">欢迎使用MXUI</span>
    <span style="display:block;margin-bottom:10px;margin-top:10px;color:#999;">Tips：本主题免费无广告，可以通过下方链接下载或联系我。</span>
    <span style="margin-bottom:10px;display:block"><a href="https://www.moxiao.cc/73.html" target="_blank">更新说明&反馈&建议</a> | <a href="https://github.com/MoXiaoCC/Typecho-MXUI/" target="_blank">GitHub</a></span></p>';


// 该iframe仅为统计MXUI主题的使用情况，只在设置外观页面进行加载，不涉及其他，网页已启用https和CDN，不影响贵站访问，如果介意可以删除
    echo '<iframe src="https://tongji.liuxiaogang.cn/mxui.html" height="1" width="1" frameborder="0"></iframe>';

// 该iframe仅为统计MXUI主题的使用情况，只在设置外观页面进行加载，不涉及其他，网页已启用https和CDN，不影响贵站访问，如果介意可以删除


    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 不填的话网站logo默认为文字'));
    $form->addInput($logoUrl);
    

	$dashang = new Typecho_Widget_Helper_Form_Element_Text('dashang', NULL, NULL, _t('打赏二维码url'), _t('在这里填入打赏二维码的链接'));
    $form->addInput($dashang);

	
	$top_post_url = new Typecho_Widget_Helper_Form_Element_Text('top_post_url', NULL, NULL, _t('置顶文章链接'), _t('这里不填首页置顶为空'));
    $form->addInput($top_post_url);
	
	$top_tittle = new Typecho_Widget_Helper_Form_Element_Text('top_tittle', NULL, NULL, _t('置顶文章标题'));
    $form->addInput($top_tittle);
	
	$top_img_url = new Typecho_Widget_Helper_Form_Element_Text('top_img_url', NULL, NULL, _t('置顶文章背景图url'), _t('例如Bing每日一图api： https://site.liuxiaogang.cn/bing '));
    $form->addInput($top_img_url);
	
	$webtime = new Typecho_Widget_Helper_Form_Element_Text('webtime', NULL, NULL, _t('建站时间'), _t('格式：01/17/2018'));
    $form->addInput($webtime);

	
	$beian = new Typecho_Widget_Helper_Form_Element_Text('beian', NULL, NULL, _t('备案信息'), _t('这里填写备案信息'));
    $form->addInput($beian);

		
	$tongji = new Typecho_Widget_Helper_Form_Element_Text('tongji', NULL, NULL, _t('统计代码'), _t('例如：< script src="https://s19.cnzz.com/z_stat.php?id=1263256397&web_id=1263256397" language="JavaScript">< /script >'));
    $form->addInput($tongji);

	   /* $DnsPrefetch = new Typecho_Widget_Helper_Form_Element_Radio('DnsPrefetch',
        array('able' => _t('启用'),
            'disable' => _t('禁止'),
        ),
        'disable', _t('DNS预解析加速'), _t('默认禁止，启用则会对CDN资源和Gravatar进行加速'));
		$form->addInput($DnsPrefetch);
		*/
	
/*  $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
*/
	
	
$slimg = new Typecho_Widget_Helper_Form_Element_Select('slimg', array(
        'Showimg' => '有图文章显示缩略图，无图文章只显示一张固定的缩略图',      
    ), 'showimg',
    _t('缩略图设置'));
    $form->addInput($slimg->multiMode());

	
}


/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/


// 自定义关键字
function themeFields($layout) {

/*  $videoUrl = new Typecho_Widget_Helper_Form_Element_Text('videoUrl', NULL, NULL, _t('视频链接'), _t('填入视频链接自动适配'));
    $layout->addItem($videoUrl); */
	
    $thumb = new Typecho_Widget_Helper_Form_Element_Text('thumb', NULL, NULL, _t('自定义缩略图'), _t('输入缩略图地址(仅文章有效)'));
    $layout->addItem($thumb);
	
	
}
/** 输出文章缩略图 */
function showThumbnail($widget)
{ 
    // 当文章无图片时的默认缩略图
    $dir = './usr/themes/mxui/img/sj/';//随机缩略图目录
    $n=sizeof(scandir($dir))-2;
    if($n <= 0){
    $n=2;
    }// 异常处理，干掉自动判断图片数量的功能，切换至手动
    $rand = rand(1,$n); 
    // 随机 n张缩略图
 
    $random = $widget->widget('Widget_Options')->themeUrl . '/img/sj/' . $rand . '.jpg'; // 随机缩略图路径

if(Typecho_Widget::widget('Widget_Options')->slimg && 'Showimg'==Typecho_Widget::widget('Widget_Options')->slimg
){
  $random = $widget->widget('Widget_Options')->themeUrl . '/img/mr.jpg'; //无图时只显示固定一张缩略图
}

$cai = '';//这里可以添加图片后缀，例如七牛的缩略图裁剪规则，这里默认为空
    $attach = $widget->attachments(1)->attachment;
    $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i'; 
  $patternMD = '/\!\[.*?\]\((http(s)?:\/\/.*?(jpg|png))/i';
    $patternMDfoot = '/\[.*?\]:\s*(http(s)?:\/\/.*?(jpg|png))/i';
if (preg_match_all($pattern, $widget->content, $thumbUrl)) {
$ctu = $thumbUrl[1][0].$cai;
    }

//如果是内联式markdown格式的图片
  else   if (preg_match_all($patternMD, $widget->content, $thumbUrl)) {
$ctu = $thumbUrl[1][0].$cai;
    }
    //如果是脚注式markdown格式的图片
    else if (preg_match_all($patternMDfoot, $widget->content, $thumbUrl)) {
$ctu = $thumbUrl[1][0].$cai;
    }

 else
if ($attach && $attach->isImage) {

$ctu = $attach->url.$cai;
    } 
else 

if ($widget->tags) {
foreach ($widget->tags as $tag) {

    $ctu = './usr/themes/mxui/img/tag/' . $tag['slug'] . '.jpg';

    if(is_file($ctu))
    { 
$ctu = $widget->widget('Widget_Options')->themeUrl . '/img/tag/' . $tag['slug'] . '.jpg';
    }
    else
 {
       $ctu = $random;
    }
break;
}
}
else {
$ctu = $random;
}
if(Typecho_Widget::widget('Widget_Options')->slimg && 'showoff'==Typecho_Widget::widget('Widget_Options')->slimg
){
if($widget->fields->thumb){$ctu = $widget->fields->thumb;}
if($ctu== $random)
echo '';
else
if($widget->is('post')||$widget->is('page')){
echo $ctu;
}else{
echo '<img src="'
.$ctu.
'">';
}
}else{
if($widget->fields->thumb){$ctu = $widget->fields->thumb;}
  if(!$widget->is('post')&&!$widget->is('page')){
if(Typecho_Widget::widget('Widget_Options')->slimg && 'allsj'==Typecho_Widget::widget('Widget_Options')->slimg
){$ctu = $random;}
}
echo $ctu;
}
}






//无插件记录浏览量

function get_post_view($archive){
	$cid    = $archive->cid;
	$db     = Typecho_Db::get();
	$prefix = $db->getPrefix();
	if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
		$db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
		echo 0;
		return;
	}
	$row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
	if ($archive->is('single')) {
 $views = Typecho_Cookie::get('extend_contents_views');
		if(empty($views)){
			$views = array();
		}else{
			$views = explode(',', $views);
		}
if(!in_array($cid,$views)){
	   $db->query($db->update('table.contents')->rows(array('views' => (int) $row['views'] + 1))->where('cid = ?', $cid));
array_push($views, $cid);
			$views = implode(',', $views);
			Typecho_Cookie::set('extend_contents_views', $views); //记录查看cookie
		}
	}
	echo $row['views'];
}




