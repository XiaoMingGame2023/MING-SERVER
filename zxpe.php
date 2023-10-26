<!-- 以下代码为MING SERVER腐竹撰写并开源，模板套用的HTML5UP的HTML模板，在使用本程序时请保留版权信息，谢谢 -->
<?php
$serverIP = "101.42.237.97";// 修改此处的域名及端口为自己的即可
$port = "28652";
$iconlink = 'http://mc.xmbxkj.cn/images/logo.jpg'; // 网站图标链接，可以使图片格式（.png/.jpg/etc.）或者是ico图标，用绝对路径或相对路径均可
$description = 'MING SERVER'; // 描述，会显示在大标题的下方，用html语法写就可以了，换行请用<br>
$imagelink = 'http://mc.xmbxkj.cn/images/logo.jpg'; // 图片链接，会显示在服务器信息右边的圈圈里
require_once __DIR__.'/assetspe/data/datape.php';
//如遇api报错无法访问前往/assetspe/data/按要求修改datape.php切换API
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $description; ?></title>
		<link rel="shortcut icon" href=<?php echo $iconlink; ?>>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assetspe/css/main.css" />
		<noscript><link rel="stylesheet" href="assetspe/css/noscript.css" /></noscript>
		<link rel="stylesheet" href="assetspe/css/pe.css" >
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
			<title><?php echo $description; ?></title>

				<!-- Main -->
					<div id="main">
					    <section id="intro" class="main">
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h2>MING SERVER基岩服务器状态</h2>
										</header>
										<hr>
										<p>状态：<font color="#2a6c0f"><?php echo $status; ?></font></p>
										<p>地址及端口：<font color="#2a6c0f"><?php echo $host; ?></font>
										<a href="<?php echo $url2; ?>" class="minecraft-button">一键加服</a>
											<br>延迟：<font color="#2a6c0f"><?php echo $delay; ?></font>
											<!-- 使用备用api时无地图名-->
											<br>地图名：<font color="#2a6c0f"><?php echo $level_name; ?></font></p>
										<p>联机协议：<font color="#2a6c0f"><?php echo $agreement; ?></font>
											<br>游戏模式：<font color="#2a6c0f"><?php echo $gamemode; ?></font>
										<br>兼容游戏版本：<font color="#2a6c0f"><?php echo $version; ?></font>
											<br>服务器motd：<font color="#2a6c0f"><?php echo $motd; ?></font></p>
										<p>可容纳最大玩家数：<font color="#2a6c0f"><?php echo $max; ?></font>
											<br>在线玩家数：<font color="#2a6c0f"><?php echo $online; ?></font>
										<ul class="actions">
										    
										    
										    <!-- 修改下方链接为自己的官网对应链接 -->
										<li><a href="#" class="button">主页</a></li>
										<li><a href="/gonggao.html" class="button">公告</a></li>
										<li><a href="/gl.html" class="button">管理组</a></li>
										</ul>
									</div>
									<span class="image"><img src=<?php echo $imagelink; ?> alt="" /></span>
								</div>
							</section>
			</div>