﻿<!DOCTYPE>
<head>

<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1273735677'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s19.cnzz.com/z_stat.php%3Fid%3D1273735677%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>

<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" /> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="referrer" content="never">
<meta http-equiv="X-Frame-Options" content="SAMEORIGIN / DENY "> 
<title><?php echo $_GET['name'];?> - 帝彬播放器</title>
<div style="display:none;"document.getElementByld("typediv1").style.display="none"><img src="http://www.dibin.xyz/vip/images/ico.jpg"></div>
<style>
html,body{height:100%;text-align:center;margin-left:auto; margin-right:auto;}
</style>
<script>
function qie(data){
window.parent.document.getElementById("ifplayer").src=data;
document.getElementById('ifplayer').contentWindow.location.replace(data);
}
window.onload=function(){
setTimeout(jz(),1000);
} 
function jz(){
document.getElementById('ifplayer').contentWindow.location.replace("http://jiexi.92fz.cn/player/vip.php?url=<?php echo $_GET['url'];?>"); 
}
</script>
<body>

<?php
error_reporting(0);
include('t.php');
$url=$_GET['url'];
if(preg_match('/http:\/\/http:/',$url)){
$url=explode('//',$url);
$url='http://'.$url[2];
}
$_GET['url'] = $url;
?>
<font color="red">(如不能播放请切换线路：<a href="javascript:history.go(-1);">返回上页</a>： <a href="javascript:history.go(+1);">返回下页</a><?php echo $_GET['name'].'-'.$_GET['n'];?>:</font><input type="button" value="线路一" onclick='qie("http://jiexi.92fz.cn/player/vip.php?url=<?php echo $_GET['url'];?>");return false;'>
<input type="button" value="线路二" onclick='qie("http://jx.maoyun.tv/index.php?id=<?php echo $_GET['url'];?>");return false;' >
<input type="button" value="线路三" onclick='qie("http://api.baiyug.cn/vip/index.php?url=<?php echo $_GET['url'];?>");return false;'>
<input type="button" value="线路四" onclick='qie("http://jiexi.92fz.cn/player/vip.php?url=<?php echo $_GET['url'];?>");return false;' >
<input type="button" value="线路五" onclick='qie("http://jqaaa.com/jx.php?url=<?php echo $_GET['url'];?>");return false;'><font color="red">
<input type="button" value="多功能解析" onclick='qie("http://api.xfsub.com/index.php?url=<?php echo $_GET['url'];?>");return false;' >)
</font>
<iframe src="http://api.baiyug.cn/vip/index.php?url=<?php echo $_GET[url];?>" name="ifplayer" width="100%"height="93%" id="ifplayer" allowTransparency="true" allowfullscreen="true" allowtransparency="true" frameborder="0"scrolling="no"></iframe>
 
<script>

</script>
<div style="display:none">

</body>