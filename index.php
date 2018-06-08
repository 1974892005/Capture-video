<html>
<head>
  <title>帝彬-VIP视频在线解析</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="帝彬">
  <meta name="description" content="帝彬">
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
  <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/popper.js/1.12.5/umd/popper.min.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</head>
<body>

<style>
	body, html {
		position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;

		margin: 0;
		padding: 0;
	}
	#background {
		position: fixed;
		top: 0;
		left: 0;

		z-index: -100;
	}
</style>

</head>
<body>

<canvas id="background"></canvas>

<script async type="text/javascript" src="js/background.js"></script>

<link href="css/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

	$("#menu2 li a").wrapInner( '<span class="out"></span>' );
	
	$("#menu2 li a").each(function() {
		$( '<span class="over">' +  $(this).text() + '</span>' ).appendTo( this );
	});

	$("#menu2 li a").hover(function() {
		$(".out",	this).stop().animate({'top':	'48px'},	300); // move down - hide
		$(".over",	this).stop().animate({'top':	'0px'},		300); // move down - show

	}, function() {
		$(".out",	this).stop().animate({'top':	'0px'},		300); // move up - show
		$(".over",	this).stop().animate({'top':	'-48px'},	300); // move up - hide
	});

});
</script>

</head>
<body>

<!-- 代码 开始 -->
<div id="menu2" class="menu">
	<ul>
	<li><a href="http://www.dibin.xyz/m">帝彬实验室</a></li>
<li><a href="http://www.dibin.xyz/l">在线播放器</a></li>
	<li><a href="http://www.dibin.xyz/music">音乐搜索器</a></li>
	<li><a href="http://www.dibin.xyz/vip/2">视频解析二</a></li>
<li><a href="http://wpa.qq.com/msgrd?v=3&uin=1974892005&site=qq&menu=yes">联系我们</a></li>
                   <li><a href="http://www.dibin.xyz/vip/api">实验室接口调用</a></li>
	</ul>
	<div class="cls"></div>
</div>
<!-- 代码 结束 -->
<div style="text-align:center;">
<div class="container">
<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
<a href="http://www.dibin.xyz/m" target="_blank"><img src="http://m.dibin.xyz/m/m/ic_launcher.png" title="帝彬云提供计算服务"/></a>
</div>
<div class="jumbotron jumbotron-fluid">
 <div class="container"> 简介：本站为广大网友提供VIP视频解析,包括优酷VIP解析,爱奇艺VIP解析,腾讯VIP解析,乐视VIP解析,芒果VIP解析等解析服务,让你省去购买视频VIP费用,欢迎大家收藏本站,并将它介绍给您的朋友!<br/>
</div></div>
<?php
error_reporting(0);
include('t.php');
include('1.php');
echo "<h4><a href='http://www.dibin.xyz/vip/api'>URL解析接口调用</a></h4><hr/>";
if($_GET['word']==""){
$_GET['word'] = '最新';
}
if($_GET['word']!='最新')
$p=$_GET['p'];
if($p=="")
$p=1;
$a=file_get_contents('http://kan.2345.com/search_'.$_GET['word'].'/?'.$p);
$a=iconv("gb2312","utf-8//IGNORE",$a);
$pn=$p-1;
$b=explode('<span class="sMark"><em class="searchWords">',$a);
$c=explode('<div class="posterCon">
            <div class="pic">',$b[0]);
$cc=count($c);
for($aa=1;$aa<$cc;$aa++){

$d=explode('//',$c[$aa]);
$e=explode('"',$d[2]);
$f=explode('title="',$d[2]);
$g=explode('"',$f[1]);
$h=explode('<div class="playNumList',$c[$aa]);
$i=explode('href="http://',$h[1]);
$k=count($i);
echo "<div style='clear:both'></div>";
echo "<h2  style='margin-top:25px;'>$g[0]</h2><img  class='rounded-circle' style='float:left;' src='http://$e[0]'>";
echo '<div class="rows">';
for($ii=1;$ii<$k;$ii++){
$j=explode('"',$i[$ii]);
$api[$aa]['url'][$ii] = $j[0];
echo " <div class=''col-sm-2' style='margin-left:20px;float:left;'><a href='play.php?url=http://$j[0]&name=$g[0]&n=$ii'>第".$ii."集</a></div>";
}
$api[$aa]['name'] = $g[0];
$api[$aa]['src'] = $e[0];
if(!preg_match('/\d集/',$c[$aa])){
$x=explode('<!-- 播放按钮 start -->',$c[$aa]);
$x=explode('href="',$x[1]);
$x=explode('"',$x[1]);
echo "<div class='col-*-*' ><a href='play.php?url=http://$x[0]&name=$g[0]'>播放</a></div>";
$api[$aa]['name'] = $g[0];
$api[$aa]['src'] = $e[0];
$api[$aa]['url'] = $x[0];
echo '</div>';
}


}
echo "<div style='clear:both'></div>";
$pn=$p-1;
echo '<ul class="pagination pagination-lg">';
if($p>1){
echo "<li class='page-item'><a class='page-link' href='index.php?word=$_GET[word]&p=$pn'>上一页</a></li>";
}
if(preg_match('/下一页/',$a)){
$pl=$p+1;

echo "<li class='page-item'><a class='page-link' href='index.php?word=$_GET[word]&p=$pl'>下一页</a></li>";

}
?>
</ul>
</div>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
<!--qzone share-->

<div class="bdsharebuttonbox"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间">QQ空间</a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博">新浪微博</a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博">腾讯微博</a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网">人人网</a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信">微信</a><a href="#" class="bds_more" data-cmd="more">分享到：</a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"此站为广大网友提供VIP视频解析,包括优酷VIP解析,爱奇艺VIP解析,腾讯VIP解析,乐视VIP解析,芒果VIP解析等  解析服务,让你省去购买视频VIP费用,欢迎大家收藏本站！","bdMini":"2","bdMiniList":["copy","qzone","tsina","mshare","bdysc","weixin","renren","tqq","bdxc","kaixin001","tqf","tieba","douban","bdhome","sqq","thx","ibaidu","meilishuo","mogujie","diandian","huaban","duitang","hx","fx","youdao","sdo","qingbiji","people","xinhua","mail","isohu","yaolan","wealink","ty","iguba","fbook","twi","linkedin","h163","evernotecn","print"],"bdPic":"","bdStyle":"0","bdSize":"32"},"share":{"bdSize":16},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

<script type="text/javascript">
(function(){
var p = {
url:location.href,
to:'pengyou',
desc:'此站为广大网友提供VIP视频解析,包括优酷VIP解析,爱奇艺VIP解析,腾讯VIP解析,乐视VIP解析,芒果VIP解析等解析服务,让你省去购买视频VIP费用,欢迎大家收藏本站！',/*默认分享理由(可选)*/
summary:'',/*摘要(可选)*/
title:'',/*分享标题(可选)*/
site:'',/*分享来源 如：腾讯网(可选)*/
pics:'' /*分享图片的路径(可选)*/
};
var s = [];
for(var i in p){
s.push(i + '=' + encodeURIComponent(p[i]||''));
}
document.write(['<a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?',s.join('&'),'" target="_blank" title="分享到腾讯朋友"><img src="http://imgcache.qq.com/qzone_v6/proj_connect_open/img/share/share_py.png" alt="分享到腾讯朋友" border="0" /></a>'].join(''));
})();
</script>
<!--end share-->



本站所有资源均收集于网络，如若冒犯你的相关权益，请联系我们，我们将在24小时内进行删除。<br/>
Email:dibinKf@gmail.com<br/>
QQ:1974892005<br/>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1273735677'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s19.cnzz.com/z_stat.php%3Fid%3D1273735677%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
<iframe src="123.html" id="player" width="100%" height="400px" allowtransparency="true" frameborder="0" scrolling="no"></iframe>
<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
<a  href="http://wpa.qq.com/msgrd?v=3&uin=1974892005&site=qq&menu=yes">帝彬实验室 -----  视频解析专用</a>
<p><script language="javascript">var datatime=new Date(); document.write("&copy; 2017-"+datatime.getFullYear()+".");</script> 帝彬 <?php echo $lxfs;?> <a target="_blank" href="http://www.dibin.xyz/m/sys.html">帝彬实验室</a> 丨 <a target="_blank" href="http://www.dibin.xyz/m">By 丶 彬</a></p>
<p><a href="http://www.dibin.xyz/m" target="_blank"><img src="http://m.dibin.xyz/m/m/ic_launcher.png" title="帝彬云提供计算服务"/></a></p>
<a href="http://www.dibin.xyz/m"><img border="0" src="http://webscan.360.cn/status/pai/hash/f211f1df63936271d810d70dbacda6ad"/></a>
</div>
</div>
</div>


<script type='text/javascript'>
    (function(m, ei, q, i, a, j, s) {
        m[i] = m[i] || function() {
            (m[i].a = m[i].a || []).push(arguments)
        };
        j = ei.createElement(q),
            s = ei.getElementsByTagName(q)[0];
        j.async = true;
        j.charset = 'UTF-8';
        j.src = 'https://static.meiqia.com/dist/meiqia.js?_=t';
        s.parentNode.insertBefore(j, s);
    })(window, document, 'script', '_MEIQIA');
    _MEIQIA('entId', 108186);
</script>
</body>
</html>
