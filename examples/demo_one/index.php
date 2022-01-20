/*
    demo_one/index.php

    created 20 Jan 2022
    By MR-XieXuan

    The code is public domain :

    https://github.com/MR-XieXuan/PHP_for_H5

    QQ:3325629928
*/

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/demo_one.css">

</head>

<?php

//包含此库
include("../../html.php");

//创建一个H5类
$h5 = new HTML\H5;

//创建一个"h4"盒子（标签）
$h5->CreateBox("h4");
//定义盒子（标签）的属性
$h5->MakeBox_nature("class", "h4");
//定义盒子（标签）内有什么东西“闭环的盒子（成对存在的标签）有效”
$h5->MakeBox_body("我好帅");
//结束这个闭环的盒子（成对存在的标签）的构建
$h5->H5Double_self();

//创建一个“P”盒子（标签）
$h5->CreateBox("p");
//定义这个盒子（标签）内有什么东西
$h5->MakeBox_body("今天的我，依旧是那么的帅");
//结束这个闭环的盒子（成对存在的标签）的构建
$h5->H5Double_self();

//创建一个“div”盒子（标签）
$h5->CreateBox("div");
//定义这个闭环的盒子里有原先创建的所有盒子，并且删除原先所有盒子的记忆
$h5->MakeBox_body($h5->Get_H5());

//结束这个闭环的盒子的构建并打印这个盒子
echo $h5->H5Double_self();

?>