<!DOCTYPE html>
<html lang="zh-cn">

<head>
	<style type='text/css'>
	body {cursor: url(https://freda.cn-gd.ufileos.com/mouse/normal.png), default;}
	a:hover{cursor: url(https://freda.cn-gd.ufileos.com/mouse/link.png), pointer;}
	</style>
	<meta charset="<?php $this->options->charset(); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php $this->archiveTitle(array(
				'category'  =>  _t('分类 %s 下的文章'),
				'search'    =>  _t('包含关键字 %s 的文章'),
				'tag'       =>  _t('标签 %s 下的文章'),
				'author'    =>  _t('%s 发布的文章')
			), '', ' - '); ?><?php $this->options->title(); ?></title>
	<!-- 通过自有函数输出HTML头部信息 -->
	<?php $this->header(); ?>
	<link rel="stylesheet" href="<?php $this->options->themeUrl('/base/style.css'); ?>">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<!--flower-->
<div id="clickCanvas" style=" position:fixed;left:0;top:0;z-index:999999999;pointer-events:none;"></div>
<!-- fireworks1 -->
<!--
<script type="text/javascript" src="https://freda.cn-gd.ufileos.com/firework/meme.js"></script>
<canvas class="fireworks" style="position:fixed;left:0;top:0;z-index:99999999;pointer-events:none;"></canvas>
<script type="text/javascript" src="https://freda.cn-gd.ufileos.com/firework/anime.min.js"></script>
<script type="text/javascript" src="https://freda.cn-gd.ufileos.com/firework/fireworks.js"></script>
-->
<!-- fireworks2 not work well -->
<!--
<canvas class="fireworks" style="position:fixed;left:0;top:0;z-index:99999999;pointer-events:none;"> 
</canvas>
<script type="text/javascript" src="/usr/plugins/firework/anime.min.js"></script>
<script type="text/javascript" src="/usr/plugins/firework/fireworks.js"></script>
-->