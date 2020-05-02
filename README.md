#Typecho-MXUI
MXUI，一个免费的Typecho主题。欢迎访问我的博客 https://www.moxiao.cc/

也可以通过github或者这个链接反馈问题和了解更多 https://www.moxiao.cc/73.html

##！！更新有可能把设置清空，请注意备份！！

##### 2020/5/2 更新 2.0
- 调整样式，更加美观
- CSS和JS从cdnjs.loli.net改为本地
- 删掉一些没用的代码
- 增加分类输出
- 调整首页置顶，添加更方便



## 主题相关

#### 1. 修改国内头像源
编辑网站根目录`config.inc.php`在最后加上

`
/* 修改头像图片源 */
define('__TYPECHO_GRAVATAR_PREFIX__', 'https://cdn.v2ex.com/gravatar/');
`

保存即可
