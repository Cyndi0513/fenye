<?php
	$news = array();
	for($i=0;$i<200;$i++){
		$news[] = array("新闻$i");
	}
	//intval() 将字符串转换成整数
	//pageIndex 从前台传过来的
	$pageIndex = (empty($_GET['pageIndex'])) ? 1 : intval($_GET['pageIndex']);
	//pageIndex 第几页新闻
	//pageIndex = 3; 
	//pageSize = 3;
	//每页start开始
	$pageSize = 3;
	$start = ($pageIndex-1)*$pageSize;
	$outNews = array();
	for($i=0;$i<$pageSize;$i++){
		//如果存在加入数组
		if(!empty($news[$start+$i])){
			$outNews[] = $news[$start+$i];
		}
	}
	print_r(json_encode($outNews));
?>