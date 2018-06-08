

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>帝彬实验室  - 视频接口调用服务</title>
<style type="text/css">body,html,div{background-color:#000;padding: 0;margin: 0;width:100%;height:100%;color:#aaa;}</style>
</head>
<body>

<a href="#" id="demo"></a>
	<script>
		function dialog(d,time){
		    if(document.getElementById("dialog")){
		    	document.getElementById("dialog").innerHTML = d;
		    	document.getElementById("dialog").style.display = "block";
		    }else{
		    	var dialog  = document.createElement("div");
		    		dialog.id = "dialog";
		    		dialog.className = "dialog";
		    		dialog.innerHTML = d;
		    	document.getElementsByTagName("body")[0].appendChild(dialog);
		    };
		    setTimeout(function(){
		    	var dialog = document.getElementById("dialog");
		    	if(dialog){
		    		document.getElementById("dialog").style.display = "none";
		    	}
	    	}, time || 5000);
		}

		//实验室-帝彬
		dialog("帝彬实验室：视频缓存中  请稍等........         无法播放请在下面联系我们");
		document.getElementById("demo").onclick = function(){
			dialog("帝彬实验室：视频缓存中  请稍等........         无法播放请在下面联系我们");
		}
	</script>
<iframe width="100%" height="100%" allowTransparency="true" frameborder="0" scrolling="no" src="一次解析接口<?php echo $_GET['url'];?>" autoPlay=true ></iframe>
<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
<a  href="http://wpa.qq.com/msgrd?v=3&uin=1974892005&site=qq&menu=yes">帝彬实验室 -----  QQ1974892005</a>
<p><script language="javascript">var datatime=new Date(); document.write("&copy; 2017-"+datatime.getFullYear()+".");</script> 帝彬 <?php echo $lxfs;?> <a target="_blank" href="http://www.dibin.xyz/m/sys.html">帝彬实验室</a> 丨 <a target="_blank" href="http://www.dibin.xyz/m">帝彬云提供计算服务</a></p>
<p><a href="http://www.dibin.xyz/m" target="_blank"><img src="http://m.dibin.xyz/m/m/ic_launcher.png" title="帝彬云提供计算服务"/></a></p>
<a href="http://www.dibin.xyz/m"><img border="0" src="http://webscan.360.cn/status/pai/hash/f211f1df63936271d810d70dbacda6ad"/></a>
</div>
</body>
