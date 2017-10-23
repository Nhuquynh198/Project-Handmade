<!DOCTYPE html>
<html>
<head>
  <title>Handmade KingDom</title>
  <meta charset="utf-8">

   <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.js"></script> -->
    
    <link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet"> 
    <link href="<?=base_url('assets/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet"> 
    <script src="<?=base_url('assets/js/jquery.min.js')?>"></script>   
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script> 

</head>
<style>
.header nav 
{
	background: #14bb4e;
	display:block;
}

.navbar-nav>li>a
{
	color: #FFF;
	font-size: 13px;
	font-weight:600;
	line-height:20px;
	position:relative;
}
.navbar-nav>li>a:hover
{
	background:#0fa041;
	color:#FFF;	
}
.navbar .navbar-nav > li.dropdown:hover > a, 
.navbar .navbar-nav > li.dropdown:hover > a:hover,
.navbar .navbar-nav > li.dropdown:hover > a:focus {
    background-color: rgb(231, 231, 231);
    color: rgb(85, 85, 85);
	text: decoration;
}
li.dropdown:hover > .dropdown-menu {
    display: block;
}
body{
    padding:10px;
}
.show-on-hover:hover > ul.dropdown-menu {
    display: block;  
}

.full {
    width: 100%;    
}
.gap {
	height: 30px;
	width: 100%;
	clear: both;
	display: block;
}
.footer {
	/*background: #EDEFF1;*/
	
	background:#14bb4e;
	height: auto;
	padding-bottom: 30px;
	position: relative;
	width: 100%;
	border-bottom: 1px solid #CCCCCC;
	border-top: 1px solid #DDDDDD;
}
.footer p {
	margin: 0;
}
.footer img {
	max-width: 100%;
}
.footer h3 {
	border-bottom: 1px solid #BAC1C8;
	color: #ffffff;
	font-size: 18px;
	font-weight: 600;
	line-height: 27px;
	padding: 40px 0 10px;
	text-transform: uppercase;
}
.footer ul {
	font-size: 13px;
	list-style-type: none;
	margin-left: 0;
	padding-left: 0;
	margin-top: 15px;
	color: #7F8C8D;
}
.footer ul li a {
	padding: 0 0 5px 0;
	display: block;
}
.footer a {
	color: #ffffff
}
.supportLi h4 {
	font-size: 20px;
	font-weight: lighter;
	line-height: normal;
	margin-bottom: 0 !important;
	padding-bottom: 0;
}
.newsletter-box input#appendedInputButton {
	background: #FFFFFF;
	display: inline-block;
	float: left;
	height: 30px;
	clear: both;
	width: 100%;
}
.newsletter-box .btn {
	border: medium none;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	-o-border-radius: 3px;
	-ms-border-radius: 3px;
	border-radius: 3px;
	display: inline-block;
	height: 40px;
	padding: 0;
	width: 100%;
	color: #fff;
}
.newsletter-box {
	overflow: hidden;
}
.bg-gray {
	background-image: -moz-linear-gradient(center bottom, #BBBBBB 0%, #F0F0F0 100%);
	box-shadow: 0 1px 0 #B4B3B3;
}
.social li {
	background: none repeat scroll 0 0 #B5B5B5;
	border: 2px solid #B5B5B5;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	-o-border-radius: 50%;
	-ms-border-radius: 50%;
	border-radius: 50%;
	float: left;
	height: 36px;
	line-height: 36px;
	margin: 0 8px 0 0;
	padding: 0;
	text-align: center;
	width: 36px;
	transition: all 0.5s ease 0s;
	-moz-transition: all 0.5s ease 0s;
	-webkit-transition: all 0.5s ease 0s;
	-ms-transition: all 0.5s ease 0s;
	-o-transition: all 0.5s ease 0s;
}
.social li:hover {
	transform: scale(1.15) rotate(360deg);
	-webkit-transform: scale(1.1) rotate(360deg);
	-moz-transform: scale(1.1) rotate(360deg);
	-ms-transform: scale(1.1) rotate(360deg);
	-o-transform: scale(1.1) rotate(360deg);
}
.social li a {
	color: #EDEFF1;
}
.social li:hover {
	border: 2px solid #2c3e50;
	background: #2c3e50;
}
.social li a i {
	font-size: 16px;
	margin: 0 0 0 5px;
	color: #EDEFF1 !important;
}
.footer-bottom {
	background: #E3E3E3;
	border-top: 1px solid #DDDDDD;
	padding-top: 10px;
	padding-bottom: 10px;
}
.footer-bottom p.pull-left {
	padding-top: 6px;
}
.payments {
	font-size: 1.5em;	
}
</style>
<body>
<header class="header">
  <div class="container-fluid">
  	<img src="<?=base_url('images-q/caption.PNG')?>" width="1450" height="110">
  	
   
      <nav class="navbar">
        <div class="container-fluid">
          <div class="navbar-header">
          <a class="navbar-brand" href="#"></a>
          </div>
          <ul class="nav navbar-nav">
          
            <li><a href="<?=site_url('sanpham/index')?>">TRANG CHỦ</a></li>
            <li><a href="#">ĐẸP&KHỎE</a></li>
            <li><a href="#">THỜI TRANG HANDMADE</a></li>
            <li><a href="#">QUÀ LƯU NIỆM</a></li>
            <!--<li><a href="#">TIN TỨC</a></li> -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">TIN TỨC <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Tin tức hot trong tuần</a></li>
                <li><a href="#">Tin khuyến mại</a></li>
                
              </ul>
            </li>
            <li><a href="#">LIÊN HỆ</a></li>
        
          </ul>
       <form class="navbar-form navbar-right">
              <div class="input-group">
              	<input type="text" class="form-control" placeholder="Tìm Kiếm">
                   	<div class="input-group-btn">
                      <button class="btn btn-default" type="submit">
                          <i class="glyphicon glyphicon-search"></i>
                      </button>
                	</div>
              </div>
      </form>
        </div>
      </nav>
  <div class="topbar hidden-sm hidden-md">
  	<div class="container">
		<div class="row">
        	<div class="col-lg-9 cod-md-9 cod-sm-6 a-left">
            	<div class="hot_new_side">
                    <div class="title_hot_news">
                        <a href="#">
                            <span style="color:#F00" class="glyphicon glyphicon-star"></span>
                        </a>
                        <span style="font-family:Tahoma, Geneva, sans-serif">
                            <strong>TIN TỨC HOT</strong>
                        </span>
                        
                        <marquee behavior="scroll" direction="left" onMouseOver="this.stop();" onMouseOut="this.start();">
                            <a class="title_ticker" title="">Cách làm hoa bằng giấy nhũn</a>&emsp;&emsp;&emsp;
                            <a class="title_ticker" title="">Kiều thị như quỳnh</a>&emsp;&emsp;&emsp;
                            <a class="title_ticker" title="">Cách làm đẹp bằng dầu dừa</a>&emsp;&emsp;&emsp;
                            <a class="title_ticker" title="">Hướng dẫn làm thiệp chúc mừng giáng sinh đẹp</a>&emsp;&emsp;&emsp;
                            <a class="title_ticker" title="">Kiều thị như quỳnh</a>&emsp;&emsp;&emsp;
                            <a class="title_ticker" title="">Viện Công Nghệ Thông Tin -ITPLUS</a>&emsp;&emsp;&emsp;
                        </marquee>
                    </div>
                  
                </div>
            </div>
            <div class="col-ms-6 col-md3 col-lg-3">
            	<div class="top-cart-contain f-right">
                	<div class="title_icons">
                    	<li class="dropdown">
                          <div class="btn-group show-on-hover">
                              <a href="#" class=" dropdown-toggle" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-user" style="color:#14bb4e"></span> Tài khoản <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="<?=site_url('dangky/add')?>">Đăng ký</a></li>
                                <li class="divider"></li>
                                <li><a href="<?=site_url('dangnhap/add')?>">Đăng nhập</a></li>
                              </ul>
                         </div>
                    	
                    	 <!--<li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#14bb4e">
                          	<span class="glyphicon glyphicon-user"></span>Tài khoản <b class="caret"></b>
                          </a>
                          <ul class="dropdown-menu">
                            <li><a href="<?=site_url('dangky/add')?>">Đăng ký tài khoản</a></li>
                            <li><a href="<?=site_url('dangnhap/add')?>">Đăng nhập</a></li>
                          </ul>
                        </li>
       					 </a>Tài khoản-->
                         
                         <!--<a style="padding-right:0px;"></a>-->
                        <a href="#" style="color:#14bb4e">
          					<span class="glyphicon glyphicon-shopping-cart"></span>
       					</a>Giỏ hàng
                    </div>
            </div>
        </div>
    </div>
  </div>
</header>


<section class="awe-section-2">
	<div class="section_blog_and_product container">
    <div class="container">
    	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" >
        	
                
        <div class="col-lg-9 col-md-9" >
        	<h5 class="name_aside">
            	<!--Begin product-->
   					<?=$contents ;?>     
				<!--End product-->
            </h5>
        </div>	    
        </div>
    </div>
    </div>
</section>



        <footer>
            <div class="footer" id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                            <h3> Lorem Ipsum </h3>
                            <ul>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                            </ul>
                        </div>
                        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                            <h3> Lorem Ipsum </h3>
                            <ul>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                            </ul>
                        </div>
                        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                            <h3> Lorem Ipsum </h3>
                            <ul>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                            </ul>
                        </div>
                        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                            <h3> Lorem Ipsum </h3>
                            <ul>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                                <li> <a href="#"> Lorem Ipsum </a> </li>
                            </ul>
                        </div>
                        <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                            <h3> Lorem Ipsum </h3>
                            <ul>
                                <li>
                                    <div class="input-append newsletter-box text-center">
                                        <input type="text" class="full text-center" placeholder="Email ">
                                        <button class="btn  bg-gray" type="button"> Lorem ipsum <i class="fa fa-long-arrow-right"> </i> </button>
                                    </div>
                                </li>
                            </ul>
                            <ul class="social">
                                <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                                <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                                <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                                <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                                <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                            </ul>
                        </div>
                    </div>
                    <!--/.row--> 
                </div>
                <!--/.container--> 
            </div>
            <!--/.footer-->            
            <div class="footer-bottom">
                <div class="container">
                    <p class="pull-left"> Copyright © Footer 2014. All right reserved. </p>
                    <div class="pull-right">
                        <ul class="nav nav-pills payments">
                            <li><i class="fa fa-cc-visa"></i></li>
                            <li><i class="fa fa-cc-mastercard"></i></li>
                            <li><i class="fa fa-cc-amex"></i></li>
                            <li><i class="fa fa-cc-paypal"></i></li>
                        </ul> 
                    </div>
                </div>
            </div>
            <!--/.footer-bottom--> 
        </footer>
</body>
</html>