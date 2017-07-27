<?php
/**
 * @Author: anchen
 * @Date:   2017-07-22 18:10:05
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-07-22 19:27:07
 */

$url = 'http://test.niooo.cn';

// $data['headertext'] = '全国最大的时时彩高手交流群635200554'; // title1
// $data['headertext1'] = '彩届计划大师唐朝联盟虎嫂Ｑ42615';//title2
// $data['imagerUrl'] = $url.'/xcximg/ssc.jpg';
// $data['headUrl'] = $url.'/xcximg/a1.jpg';
// $data['title']='时时彩计划';


$data['headertext'] = '王欣颖个人工作室'; // title1
$data['headertext1'] = '个人版网页定制';//title2
$data['imagerUrl'] = $url.'/xcximg/1.jpg';//
$data['headUrl'] = $url.'/xcximg/2.jpg';//
$data['title']='王欣颖个人工作室';



$data['name'] = '王欣颖';
$data['wx'] = '微信号  shichanggongzui';
$data['email'] = '481476614@qq.com';

echo json_encode($data);