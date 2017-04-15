<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\phpStudy\WWW\AHalf\public/../application/index\view\timeaxis\timeaxis.html";i:1492240177;}*/ ?>
﻿<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>垂直时间轴</title>
	<link rel="stylesheet" type="text/css" href="../dist/css/bootstrap-grid.min.css" />
	<link href="http://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../dist/css/htmleaf-demo.css">
	<style type="text/css">
		.demo{ background: #e8e8e8; padding: 1.1em 0}
		.main-timeline{
		    position: relative;
		    -webkit-transition: all 0.4s ease 0s;
		    -moz-transition: all 0.4s ease 0s;
		    -ms-transition: all 0.4s ease 0s;
		    transition: all 0.4s ease 0s;
		}
		.main-timeline:before{
		    content: "";
		    width: 3px;
		    height: 100%;
		    background: #1abc9c;
		    position: absolute;
		    top: 0;
		    left: 60%;
		}
		.main-timeline .timeline{
		    margin-left:10px;
            margin-right:20px;
		    margin-bottom: 1.1em;
		    position: relative;
		}
		.main-timeline .timeline:before,
		.main-timeline .timeline:after{
		    content: "";
		    display: block;
		    width: 100%;
		    clear: both;
		}
		.main-timeline .timeline-icon{
		    width: 35px;
		    height: 35px;
		    border-radius: 50%;
		    background: #1abc9c;
		    overflow: hidden;
		    margin-left: -26px;
		    position: absolute;
		    top: 0;
		    left: 60%;
		    text-align: center;
		}
		.main-timeline .timeline-icon i{
		    font-size: 20px;
		    line-height: 35px;
		    color: #fff;
		}
		.main-timeline .timeline-content{
			float: left;
		    width: 45%;
		    padding: 20px ;
			padding-left:-30px;
		    border-radius: 3px;
		    background: #fff;
		    -webkit-box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
		    -moz-box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
		    -ms-box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
		    box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
		    -webkit-transition: all 0.3s ease 0s;
		    -moz-transition: all 0.3s ease 0s;
		    -ms-transition: all 0.3s ease 0s;
		    transition: all 0.3s ease 0s;
		}
		.main-timeline .timeline-content:before{
		    content: "";
		    border-left: 7px solid #1abc9c;
		    border-top: 7px solid transparent;
		    border-bottom: 7px solid transparent;
		    position: absolute;
		}
		.main-timeline .title{
		    font-size: 12px;
		    color: #fff;
		    padding: 10px;
		    background: #1abc9c;
		    border-radius: 2px 2px 0 0;
		    margin: -20px -20px 10px;
		}
		.main-timeline .description{
		    color: #9EA3AA;
		}
		@media only screen and (max-width: 990px){
		    .main-timeline .title{
		        font-size: 25px;
		    }
		    .main-timeline .timeline-content::before{
		        top: 16px;
		    }
		}
		@media only screen and (max-width: 767px){
		    .main-timeline{ margin-left: 20px; }
		    .main-timeline:before{ left: 0; }
		    .main-timeline .timeline-content{
		        width: 90%;
		        float: right;
		    }
		    .main-timeline .timeline-content:before,
		    .main-timeline .timeline-content.right:before{
		        left: 10%;
		        right: inherit;
		        margin-left: -6px;
		        border-left: 0;
		        border-right: 7px solid #1abc9c;
		    }
		    .main-timeline .timeline-icon{
		        left: 0;
		    }
		}
		@media only screen and (max-width: 479px){
		    .main-timeline .timeline-content{
		        width: 85%;
		    }
		    .main-timeline .timeline-content:before,
		    .main-timeline .timeline-content.right:before{
		        left: 15%;
		    }
		    .main-timeline .title{
		        font-size: 20px;
		    }
		    .main-timeline .timeline-content:before{
		        top: 13px;
		    }
		}
	</style>
</head>
<body>
	<div class="htmleaf-container">
		<header class="htmleaf-header">
			<h1>我的痕迹</h1>
		</header>
		<div class="demo">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12">
	                    <div class="main-timeline">
	                        <div class="timeline">
	                            <div class="timeline-icon">
	                                <i class="fa fa-bookmark"></i>
	                            </div>
	                            <div class="timeline-content">
	                                <h2 class="title">2017-04-10</h2>
									<img src="../dist/pictures/p1.jpg" class="description img-responsive center-block" />
	                                <a href="#"><i>万物皆有裂缝，那是光进来的地方</i></a>
	                            </div>
	                        </div>

	                        <div class="timeline">
	                            <div class="timeline-icon">
	                                <i class="fa fa-bookmark"></i>
	                            </div>
								<div class="timeline-content">
									<h2 class="title">2017-02-23</h2>
									<img src="../dist/pictures/p2.jpg" class="description img-responsive center-block" />
									<a href="#"><i>向日葵一样快乐</i></a>
								</div>
	                        </div>

	                        <div class="timeline">
	                            <div class="timeline-icon">
	                                <i class="fa fa-bookmark"></i>
	                            </div>
								<div class="timeline-content">
									<h2 class="title">2016-12-30</h2>
									<img src="../dist/pictures/p3.jpg" class="description img-responsive center-block" />
									<a href="#"><i>梦中的城堡</i></a>
								</div>
	                        </div>

	                        <div class="timeline">
	                            <div class="timeline-icon">
	                                <i class="fa fa-bookmark"></i>
	                            </div>
								<div class="timeline-content">
									<h2 class="title">2016-12-12</h2>
									<img src="../dist/pictures/p5.jpg" class="description img-responsive center-block" />
									<a href="#"><i>彷佛只有在去往失败的路上从未迷失方向</i></a>
								</div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</body>
</html>
