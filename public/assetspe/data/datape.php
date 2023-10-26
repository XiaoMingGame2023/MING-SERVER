<?php
// 以下为端口调用逻辑，不懂请不要改动
//$url = "https://motd.imc.re/api?host=$serverIP:$port";
// 备用接口，需要时将前面接口注释，删除该接口的//
$url = "http://api.xmbxkj.cn/?ip=$serverIP&port=$port&java=";
$data = file_get_contents($url);
$json = json_decode($data, true);
// 将JSON数据解析为变量
$host = $json['host'];
$version = $json['version'];
$status = $json['status'];
$agreemen = $json['agreemen'];
$max = $json['max'];
$level_name = $json['level_name'];
$gamemode = $json['gamemode'];
$delay = $json['delay'];
$online = $json['online'];
$agreement = $json['agreement'];
$motd = $json['motd'];
$host = $json['ip'];
$url2 = "minecraft://?addExternalServer=$description|$serverIP:$port";
 //转换服务器 MOTD 颜色参数为 HTML
    $motd = str_replace("§k", "", $motd);
    $motd = str_replace("§l", "", $motd);
    $motd = str_replace("§m", "", $motd);
    $motd = str_replace("§n", "", $motd);
    $motd = str_replace("§o", "", $motd);
    $motd = str_replace("§r", '<font color="#">', $motd);
    $motd = str_replace("§0", '<font color="#000000">', $motd);
    $motd = str_replace("§1", '<font color="#0000AA">', $motd);
    $motd = str_replace("§2", '<font color="#00AA00">', $motd);
    $motd = str_replace("§3", '<font color="#00AAAA">', $motd);
    $motd = str_replace("§4", '<font color="#AA0000">', $motd);
    $motd = str_replace("§5", '<font color="#AA00AA">', $motd);
    $motd = str_replace("§6", '<font color="#FFAA00">', $motd);
    $motd = str_replace("§7", '<font color="#AAAAAA">', $motd);
    $motd = str_replace("§8", '<font color="#555555">', $motd);
    $motd = str_replace("§9", '<font color="#5555FF">', $motd);
    $motd = str_replace("§a", '<font color="#55FF55">', $motd);
    $motd = str_replace("§b", '<font color="#55FFFF">', $motd);
    $motd = str_replace("§c", '<font color="#FF5555">', $motd);
    $motd = str_replace("§d", '<font color="#FF55FF">', $motd);
    $motd = str_replace("§e", '<font color="#FFFF55">', $motd);
    $motd = str_replace("§f", '<font color="#FFFFFF">', $motd);

    $cleanHostName = str_replace(array("§k", "§l", "§m", "§n", "§o", "§r", "§0", "§1", "§2", "§3", "§4", "§5", "§6", "§7", "§8", "§9", "§a", "§b", "§c", "§d", "§e", "§f"), "", $Info['HostName']); //清除服务器 MOTD 颜色参数

?>