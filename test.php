<?php


$url = 'https://vip.123pan.cn/1685968/%E7%BD%91%E7%9B%98%E8%BD%AC%E7%A7%BB/ARCANA%20PROJECT%E3%80%8E%E5%A4%A2%E3%81%A7%E4%B8%96%E7%95%8C%E3%82%92%E5%A4%89%E3%81%88%E3%82%8B%E3%81%AA%E3%82%89%E3%80%8F.mkv';

$private_key = '16695';

$uid = 1685968;

$expire_time = time() + 60;   // 该签发的资源30s以后过期

$rand_value = rand(0, 100000); // 生成随机数

$parse_result = parse_url($url); // 解析 URL

$request_path = rawurldecode($parse_result["path"]); // /29/音乐/02.一千零一夜-李克勤.wma

$sign = md5(sprintf("%s-%d-%d-%d-%s", $request_path, $expire_time, $rand_value, $uid, $private_key));

$wait = sprintf("%d-%d-%d-%s", $expire_time, $rand_value, $uid, $sign);

$result = $url . "?auth_key=" . $wait;

echo $result;
