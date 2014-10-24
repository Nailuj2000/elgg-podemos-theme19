<?php
/**
 * Page Layout
 *
 * Contains CSS for the page shell and page layout
 *
 * Default layout: 990px wide, centered. Used in default page shell
 *
 * @package Elgg.Core
 * @subpackage UIlgg-page-topbar
 */
?>
/* <style> /**/

/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
<?php // the width is on the page rather than topbar to handle small viewports ?>
.elgg-page-default {
	min-width: 800px;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	/*max-width: 1290px; /*antes 990*/
	margin: 0 auto;
	min-height: 65px;
}
.elgg-page-default .elgg-page-navbar > .elgg-inner {
	/*max-width: 1290px; /*antes 990*/
	margin: 0 auto;
	height: auto;
}
.elgg-page-default .elgg-page-body > .elgg-inner {
	/*max-width: 1290px; /*antes 990*/
	margin: 0 auto;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	/*max-width: 1290px; /*antes 990*/
	margin: 0 auto;
	padding: 5px 0;
	/*border-top: 1px solid #DEDEDE;*/
	/*ESTILO AÑADIDO*/
	background-color:#000;
}

/***** TOPBAR ******/
.elgg-page-topbar {
	background:#612d62; /*antes #352235; y antes #424242;*/
	/*border-top: 1px solid #424242;
	border-bottom: 1px solid #000000; comentado */
	padding: 0px; /*antes 0 20px;*/
	position: relative;
	height: 44px; /*antes 32*/
	z-index: 1;
}

/***** PAGE MESSAGES ******/
.elgg-system-messages {
	position: fixed;
	top: 32px;
	right: 20px;
	max-width: 500px;
	z-index: 2000;
}
.elgg-system-messages li {
	margin-top: 10px;
}
.elgg-system-messages li p {
	margin: 0;
}

/***** PAGE HEADER ******/
.elgg-page-header {
	padding: 5px 20px 10px;
	position: relative;
	background: #60B8F7;
}
.elgg-page-header > .elgg-inner {
	position: relative;
}
/***** PAGE NAVBAR ******/
.elgg-page-navbar {
	padding: 0 20px;
	position: relative;
	background: #4787B8;
}
.elgg-page-navbar > .elgg-inner {
	position: relative;
}

/***** PAGE BODY LAYOUT ******/
.elgg-page-body {
	padding: 0px;
}

.elgg-layout {
	min-height: 360px;
}
.elgg-layout-widgets > .elgg-widgets {
	float: right;
}
.elgg-sidebar {
	position: relative;
	padding: 45px 0 20px 30px; /*antes 32px 0 20px 30px;*/
	float: left; /*antes right;*/
	width: 20%; /*antes 21.212121%;*/
	margin: -1px 0 0 0px; /*antes 0;*/
	/*border-left: 1px solid #EBEBEB;*/
	background-color:#272727;/*estilo añadido*/
}
.elgg-sidebar-alt {
	position: relative;
	padding: 32px 30px 20px 0;
	float: left;
	width: 16.161616%;
	margin: 0 30px 0 0;
	
}
.elgg-main {
	position: relative;
	min-height: 360px;
	padding: 0px 0 0px 0; /*antes 12px 0 10px 0*/
	background-color:#414141;
	color:#969696;
	padding-left:10px; /*ESTILO AÑADIDO*/
}
.elgg-main > .elgg-head {
	padding-bottom: 5px;
	border-bottom: 1px solid #EBEBEB;
	margin-bottom: 10px;
}

.elgg-layout-one-sidebar{
	/*ESTILO AÑADIDO*/
	background-color:#272727;
}

.elgg-layout-one-sidebar .elgg-main {
	float: left;
	width: 72.4% /*antes 72.525252%;*/
}
.elgg-layout-two-sidebar .elgg-main {
	float: left;
	width: 50.101010%;
}

/***** PAGE FOOTER ******/
.elgg-page-footer {
	color: #999;
	/*padding: 0 10px;*/
	position: relative;
	text-decoration:none;
	
}

.elgg-page-footer a:hover {
	color: #fff;
}
