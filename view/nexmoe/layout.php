<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
	<title><?php e($title.' - '.config('site_name'));?></title>
	<link rel="stylesheet" href="//cdnjs.loli.net/ajax/libs/mdui/0.4.1/css/mdui.css">
	<script src="//cdnjs.loli.net/ajax/libs/mdui/0.4.1/js/mdui.min.js"></script>
	<script src="//cdn.bootcss.com/jquery/1.12.3/jquery.min.js"></script>	
	<script src="//cdn.staticfile.org/layer/2.3/layer.js"></script>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
	<script src="//cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
	 <style>
		.mdui-appbar .mdui-toolbar			
			height:56px;
			font-size: 10px;
		}
       		 .mdui-toolbar>*{
			padding: 0 6px;
			margin: 0 2px;
			opacity:0.5;
		}
		.mdui-toolbar>.mdui-typo-headline{
			padding: 0 1px 0 0;
		}
		.mdui-toolbar>i{
			padding: 0;
		}
		.mdui-toolbar>a:hover,a.mdui-typo-headline,a.active{
			opacity:1;
		}
		.mdui-container{
			max-width:950px;
		}
		.mdui-list-item{
			-webkit-transition:none;
			transition:none;
		}
		.mdui-list>.th{
			background-color:initial;
		}
		.mdui-list-item>a{
			width:100%;
			line-height: 48px
		}
		.mdui-list-item{
			margin: 2px 0px;
			padding:0;
		}
		.mdui-toolbar>a:last-child{
			opacity:1;
		}
		#instantclick-bar {
        		background: white;
        	}
		.mdui-img-fluid, .mdui-video-fluid {
            height: -webkit-fill-available;
        }
		.dplayer-video-wrap .dplayer-video {
			height: -webkit-fill-available !important;
		}
        .gslide iframe, .gslide video {
           height: -webkit-fill-available;
        }
		@media screen and (max-width:950px)	{		
			.mdui-list-item .mdui-text-right{
				display: none;
			}
			.mdui-container{
				width:100% !important;
				margin:0px;
			}
			.mdui-toolbar>*{				
				display: none;
			}
			.mdui-toolbar>a:last-child,.mdui-toolbar>.mdui-typo-headline,.mdui-toolbar>i:first-child{
				display: block;
			}
		}
		.spec-col{padding:.9em;display:flex;align-items:center;white-space:nowrap;flex:1 50%;min-width:225px}
		.spec-type{font-size:1.35em}
		.spec-value{font-size:1.25em}
		.spec-text{float:left}
		.device-section{padding-top:30px}
		.spec-device-img{height:auto;height:340px;padding-bottom:30px}
		#dl-header{margin:0}
		#dl-section{padding-top:10px}
		#dl-latest{position:relative;top:50%;transform:translateY(-50%)}
	</style>
</head>
<body class=" mdui-appbar-with-toolbar mdui-theme-primary-indigo mdui-theme-accent-pink">
	<header class="mdui-appbar mdui-appbar-fixed mdui-color-theme mdui-appbar-inset">	
	<div class="mdui-toolbar mdui-color-theme">
        <span class="mdui-btn  mdui-typo-headline mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-drawer="{target: '#main-drawer', swipe: true}" mdui-tooltip="{content: '??????'}"><i class="mdui-icon material-icons">menu</i></span>
		<a href="/" class="mdui-typo-headline"><?php e(config('site_name'));?></a>
		<?php foreach((array)$navs as $n=>$l):?>
			<i class="mdui-icon material-icons mdui-icon-dark" style="margin:0;">chevron_right</i>
			<a href="<?php e($l);?>"><?php e($n);?></a>
		<?php endforeach;?>
	</div>	
	</header>

<div class="mdui-drawer mdui-drawer-close mdui-color-indigo-50" id="main-drawer">
	<div class="mdui-grid-tile">
		<a href="javascript:;"><img src="//p.ssl.qhimg.com/t01ad8dba0b68972b26.jpg"/></a>
		<div class="mdui-grid-tile-actions mdui-grid-tile-actions-gradient">
			<div class="mdui-grid-tile-text">
				<div class="mdui-grid-tile-title"><?php e($title.' - '.config('site_name'));?></div>
				<div class="mdui-grid-tile-subtitle">Onedrive</div>
    			</div>
   		 </div>
	</div>   
	<div class="mdui-list" mdui-collapse="{accordion: true}">
		<a href="/" class="mdui-list-item mdui-ripple">
			<i class="mdui-list-item-icon mdui-icon material-icons">home</i>
			<div class="mdui-list-item-content">??????</div>
		</a>
    		<?php e(config('drawer'));?>
	</div>
</div>
  
 
<div class="mdui-container">
	<div class="mdui-container-fluid"></div>
    	<?php view::section('content');?>
</div>
</body>
</html>
