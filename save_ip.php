<?php
// 获取JSON数据
$data = file_get_contents('php://input');
$info = json_decode($data, true);

// 获取IP和设备信息
$ip = $info['ip'];
$device = $info['device'];

// 格式化内容
$content = "IP: $ip\n";
$content .= "User-Agent: " . $device['userAgent'] . "\n";
$content .= "Platform: " . $device['platform'] . "\n";
$content .= "Language: " . $device['language'] . "\n";
$content .= "------------------------------\n";

// 保存到ip.txt文件
file_put_contents('ip.txt', $content, FILE_APPEND);

echo "数据已保存!";
?>
