<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>Sandi Utama Dashboard</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/css/templatemo_main.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/admin/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/admin/css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/admin/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/admin/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/admin/css/font-awesome.min.css">
<!-- 
Dashboard Template 
http://www.templatemo.com/preview/templatemo_415_dashboard
-->
</head>

<body>
  <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1>Dashboard - Admin Template</h1></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
      </div>   
    </div>
    <div class="template-page-wrapper">
      <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
          <li>
            <form class="navbar-form">
              <input type="text" class="form-control" id="templatemo_search_box" placeholder="Search...">
              <span class="btn btn-default">Go</span>
            </form>
          </li>
          <li class="active"><a href="<?php echo site_url('admin/rumah'); ?>"><i class="fa fa-home"></i>Dashboard</a></li>
          <li class="sub open">
            <a href="javascript:;">
              <i class="fa fa-database"></i> Isi Konten <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="<?php echo site_url('admin/crudblog'); ?>">Berita</a></i></li>
              <li><a href="<?php echo site_url('admin/crudporto'); ?>">Portofolio</a></li>             
              <li><a href="<?php echo site_url('admin/crudtest'); ?>">Testimoni</a></li>
              <li><a href="<?php echo site_url('admin/lihatFoto'); ?>">Gallery</a></li>
            </ul>
          </li>
          <li><a href="data-visualization.html"><i class="fa fa-folder-o" aria-hidden="true"></i>Tambah Post</a></li>
          <li><a href="<?php echo site_url('admin/lihatEmail') ?>"><i class="fa fa-envelope" aria-hidden="true"></i><span class="badge pull-right">42</span>Email</a></li>
          <li><a href="<?php echo site_url('admin/cruduser') ?>"><i class="fa fa-users"></i><span class="badge pull-right">NEW</span>Manage Users</a></li>
          <li><a href="<?php echo site_url('admin/editProfil') ?>"><i class="fa fa-cog"></i>Preferences</a></li>
          <li><a href="<?php echo site_url('login/logout') ?>"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
      </div><!--/.navbar-collapse -->