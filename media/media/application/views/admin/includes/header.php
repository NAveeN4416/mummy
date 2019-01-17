<!DOCTYPE html>
<html lang="en">
<head>
    <title>.:: MEDIA  ::.</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo-light.png" tppabs="http://ableproadmin.com/light/vertical/assets/images/favicon.png" type="image/x-icon">
    <!-- <link rel="icon" href="assets/images/favicon.ico" tppabs="http://ableproadmin.com/light/vertical/assets/images/favicon.ico" type="image/x-icon"> -->

    <link href="http://volivesolutions.com/fonts.googleapis.com/css-family=Open+Sans-300,400,600,700,800.css" rel="stylesheet">
    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/icon/icofont/css/icofont.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/icon/simple-line-icons/css/simple-line-icons.css">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" >
    
  <!-- Chartlist chart css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/plugins/charts/chartlist/css/chartlist.css"  type="text/css" media="all">
    
    <!-- Echart js -->
    <script src="<?php echo base_url();?>assets/admin/plugins/charts/echarts/js/echarts-all.js"></script>
    
     <!-- Data Table Css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/plugins/data-table/css/dataTables.bootstrap4.min.css" >
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/plugins/data-table/css/buttons.dataTables.min.css" >
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/plugins/data-table/css/responsive.bootstrap4.min.css" >
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/css/main.css" >
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/css/custom.css">
    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrap-datetimepicker.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/animate.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/alertify.css"/>
	<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <!--color css-->
    <style type="text/css">
        
        .sidebar-menu>li>a .inactive-arrow {
    float: right;
    position: relative;
    top: 5px;
}
.active-arrow{
display: none !important;
    float: right;
    position: relative;
    top: 5px;

}
li.dropdown.active .active-arrow  {
    display: block !important;

    transition: all ease-in-out .5s;
    -webkit-transition: display 2s; 
    transition: display 2s;
}
li.dropdown.active .inactive-arrow{
    display: none !important;
}
    </style>
</head>
<body class="sidebar-mini fixed">
   <!-- <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>-->
<div class="wrapper">
    <!--   <div class="loader-bg">
    <div class="loader-bar">
    </div>
  </div> -->
    <!-- Navbar-->
    <header class="main-header-top hidden-print">
        <a href="<?php echo base_url();?>admin/index"  class="logo">
        <img src="<?php echo base_url(); ?>assets/images/logo-light.png"  style="height:85%;">
        </a>
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button--><a href="javascript:" data-toggle="offcanvas" class="sidebar-toggle"></a>
            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu">
                <ul class="top-nav">
                   
                    <!-- chat dropdown -->
                   
                    <!-- window screen -->
                    <li class="pc-rheader-submenu">
                        <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                            <i class="icon-size-fullscreen"></i>
                        </a>
                    </li>
                    <!-- User Menu-->
                    <li class="dropdown">
                        <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                            <span><img class="img-circle " src="<?php echo base_url((empty($user_info['image'])) ? "assets/uploads/user_profiles/profile.png": $user_info['image']); ?>" style="width:40px;" alt="User Image"></span>
                            <span><?php echo ucwords(@$userdata['username']); ?> <i class=" icofont icofont-simple-down"></i></span>
                        </a>
                        <ul class="dropdown-menu settings-menu">
                            <!--<li><a href="javascript:void(0)"><i class="icon-settings"></i> Settings</a></li>-->
                            <li><a href="<?php echo base_url();?>admin/profile/<?php echo @$userdata['id'];?>"><i class="icon-user"></i> Profile</a></li>
                            <li class="p-0">
                                <div class="dropdown-divider m-0"></div>
                            </li>
                            
                            <li><a href="<?php echo base_url();?>admin/logout"><i class="icon-logout"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
          
            </div>
        </nav>
    </header>
    <!-- Side-Nav-->
    <aside class="main-sidebar hidden-print " >
        <section class="sidebar" id="sidebar-scroll">
            <div class="user-panel">
                <div class="f-left image"><img src="<?php echo base_url((empty($user_info['image'])) ? "assets/uploads/user_profiles/profile.png": $user_info['image']); ?>" alt="User Image" class="img-circle"></div>
                <div class="f-left info">
                    <p><?php echo ucwords(@$userdata['username']); ?></p>
                    <p class="designation"><?php echo ucwords(@$userdata['email']); ?></p>
                </div>
            </div>
            <!-- sidebar profile Menu-->
           
        

            <!-- Sidebar Menu-->
            <?php if(@$userdata['role']=='admin') { ?>

            <ul class="sidebar-menu">

                    <li class="<?php echo (@$page_name=='dashboard')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/index" >
                            <i class="fa fa-tachometer"></i><span> Dashboard</span></a>
                    </li>
                    <li class="<?php echo (@$page_name=='users')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/users" >
                            <i class="fa fa-users"></i><span>Users</span></a>
                    </li>

                    <li class="<?php echo (@$main_page_name=='info')?'active':'';?>">
                        <a href="javascript:"><i class="fa fa-send"></i><span>Website Info</span><i class="icon-arrow-down"></i></a>

                        <ul class="treeview-menu"> 
<!--                             <li class="<?php echo (@$page_name=='contact_us')?'active':'';?>">
    <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/contactus" >
    <i class="fa fa-volume-control-phone"></i><span>Contact Us</span></a>
</li> -->

                            <li class="<?php echo (@$page_name=='privacy')?'active':'';?>">
                                <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/privacy" >
                                <i class="fa fa-lock"></i><span>Privacy & Policy </span></a>  
                            </li>

                            <li class="<?php echo (@$page_name=='terms')?'active':'';?>">
                                <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/terms" >
                                <i class="fa fa-at"></i><span>Terms & Conditions </span></a>  
                            </li>

                            <li class="<?php echo (@$page_name=='faq')?'active':'';?>">
                                <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/faq" >
                                <i class="fa fa-at"></i><span>FAQ</span></a>  
                            </li>

                            <li class="<?php echo (@$page_name=='help')?'active':'';?>">
                                <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/help" >
                                <i class="fa fa-at"></i><span>HELP</span></a>  
                            </li>
<!-- 
                            <li class="<?php echo (@$page_name=='contact_details')?'active':'';?>">
                                <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/contact_details" >
                                <i class="fa fa-comments"></i><span>Website Requests</span></a>
                            </li> -->
                        </ul>
                    </li>

                    <li class="<?php echo (@$main_page_name=='static')?'active':'';?>">
                        <a href="javascript:"><i class="fa fa-send"></i><span>Website Static</span><i class="icon-arrow-down"></i></a>

                        <ul class="treeview-menu"> 
                            <li class="<?php echo (@$page_name=='banners')?'active':'';?>">
                                <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/banners" >
                                <i class="fa fa-volume-control-phone"></i><span>Banners</span></a>
                            </li>
                            <li class="<?php echo (@$page_name=='index_banners')?'active':'';?>">
                                <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/index_banners" >
                                <i class="fa fa-volume-control-phone"></i><span>Index Banners</span></a>
                            </li>
                            <li class="<?php echo (@$page_name=='about_us')?'active':'';?>">
                                <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/about_us" >
                                <i class="fa fa-lock"></i><span>About us Page</span></a>  
                            </li>
                            <li class="<?php echo (@$page_name=='map')?'active':'';?>">
                                <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/development_map" >
                                <i class="fa fa-lock"></i><span>Development Map</span></a>  
                            </li>
                            <li class="<?php echo (@$page_name=='contact')?'active':'';?>">
                                <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/contact" >
                                <i class="fa fa-at"></i><span>Contact Page</span></a>  
                            </li>
                            <li class="<?php echo (@$page_name=='social_media')?'active':'';?>">
                                <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/social_media" >
                                <i class="fa fa-comments"></i><span>Social Media</span></a>
                            </li>
                            <li class="<?php echo (@$page_name=='newsletter_subscriptions')?'active':'';?>">
                                <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/newsletter_subscriptions" >
                                <i class="fa fa-comments"></i><span>Newslettter Subscriptions</span></a>
                            </li>
                        </ul>
                    </li>

                    <li class="<?php echo (@$main_page_name=='media_databases')?'active':'';?>">
                        <a href="javascript:"><i class="fa fa-medium"></i><span>Media Databases</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu"> 
                            <li class="<?php echo (@$page_name=='databases')?'active':'';?>">
                                <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/databases">
                                <i class="fa fa-database"></i><span>Databases</span></a>
                            </li>
                            <li class="<?php echo (@$page_name=='sites')?'active':'';?>">
                                <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/sites">
                                <i class="fa fa-internet-explorer"></i><span>Sites</span></a>
                            </li>
                        </ul>
                    </li>

                   <li class="<?php echo (@$page_name=='news')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/news" >
                        <i class="fa fa-shield"></i><span>News</span></a>
                    </li>

                    <li class="<?php echo (@$page_name=='blogs')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/blogs" >
                        <i class="fa fa-shield"></i><span>Blogs</span></a>
                    </li>

                    <li class="<?php echo (@$page_name=='events')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/events" >
                        <i class="fa fa-shield"></i><span>Events</span></a>
                    </li>

                    <li class="<?php echo (@$page_name=='exhibitions')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/exhibitions" >
                        <i class="fa fa-shield"></i><span>Exhibitions</span></a>
                    </li>


                    <li class="<?php echo (@$page_name=='gallery_albums')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/gallery_albums" >
                        <i class="fa fa-file-image-o"></i><span>Gallery Albums</span></a>
                    </li>

                    <li class="<?php echo (@$page_name=='stories')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/successfull_stories" >
                        <i class="fa fa-shield"></i><span>Successfull Stories</span></a>
                    </li>
<!--
                    <li class="<?php echo (@$page_name=='countries')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/countries" >
                            <i class="fa fa-flag"></i><span>Countries</span></a>
                    </li>

                    <li class="<?php echo (@$page_name=='cities')?'active':'';?>">
                        <a class="waves-effect waves-dark" href="<?php echo base_url();?>admin/cities" >
                        <i class="fa fa-university"></i><span>Cities</span></a>
                    </li>
-->

            </ul>
            <?php } ?>
        </section>
    </aside>
    <!-- Side-Nav-end-->
    