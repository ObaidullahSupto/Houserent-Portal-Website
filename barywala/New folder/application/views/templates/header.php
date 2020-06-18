<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport"content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Barywala.Com</title>
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/img/feature/6.png">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/slicknav.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/color-switcher.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/ion.rangeSlider.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/ion.rangeSlider.skinFlat.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/responsive.css"/>    
    <link rel="stylesheet" href="https://cdn.lineicons.com/1.0.0/LineIcons.min.css"/>
    <style class="cp-pen-styles">#carousel3d .carousel-3d-slide {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-flex: 1;
          -ms-flex: 1;
              flex: 1;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
          -ms-flex-direction: column;
              flex-direction: column;
      -webkit-box-pack: center;
          -ms-flex-pack: center;
              justify-content: center;
      text-align: center;
      background-color: #33333387;
      padding: 20px;
      -webkit-transition: all 2s;
      transition: all 2s;
    }
      #carousel3d .carousel-3d-slide.current {
        background-color: #33333387;
        color: #fff;
      }    
    </style>    
  </head>
  <body>
    <header id="header-wrap">
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-md-9 col-xs-6">
              <ul class="links clearfix">
                <a href="mailto:>info@barywala.com">
                    <li><i class="lni-envelope"></i>info@barywala.com</li>
                </a>
              </ul>
            </div>
            
            <div class="col-lg-5 col-md-3 col-xs-6">
              <div class="header-top-right float-right">
               <?php if(!$this->session->userdata('logged_in')): ?>               
                <a href="<?php echo base_url();?>users/login" class="header-top-button">Log In</a>
                <a href="<?php echo base_url();?>users/signup" class="header-top-button white-bg">Sign Up</a>
                 <?php endif; ?>
                 <?php if($this->session->userdata('logged_in')): ?>
                 
                  <a style="color:#fff;" href="<?php echo base_url();?>users/profile" ><?php echo 'Welcome - '.$this->session->userdata('name').'';?></a>
                  <a href="<?php echo base_url();?>users/logout" class="header-top-button">Sign Out</a>
                <?php endif; ?>
              </div>
            </div>
           
          </div>
        </div>
      </div>

      <nav class="navbar navbar-expand-lg navbar-light bg-white"data-toggle="sticky-onscroll">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggler"type="button"data-toggle="collapse"data-target="#main-navbar"aria-controls="main-navbar"aria-expanded="false"aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="lin-menu"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>/assets/img/feature/logo.png" alt=""/></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item active">
                  <a class="nav-link" href="<?php echo base_url();?>"><i class="lni-home"></i>Home</a>                
              </li>

              <?php if($this->session->userdata('logged_in')): ?>
               <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>dashboard">Dashboard</a>                
              </li>
              <?php endif; ?>

              <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>about">About Us</a>                
              </li>            
              
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>contact"> Contact Us </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>users/check">Rent Your Property</a>             
              </li>
            </ul>
          </div>
        </div>
          <!-- Mobile NavBar -->

        <ul class="mobile-menu">
          <li><a class="active" href="<?php echo base_url();?>"> Home </a></li>
          <li><a href="<?php echo base_url();?>about">About Us</a></li>
          <?php if($this->session->userdata('logged_in')): ?>
            <li><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
          <?php endif; ?>
          <li><a href="<?php echo base_url();?>contact">Contact Us</a></li>
          <li><a href="<?php echo base_url();?>users/check"> Rent Your Property </a></li>

        </ul>
      </nav>

      <div class="clearfix"></div>
    </header>

    <div class="container">
        <!--Registration Message-->
        <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class=" alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
        <?php endif; ?>
        <!--Post Creation Message -->
        <?php if($this->session->flashdata('post_created')): ?>
        <?php echo '<p class=" alert alert-success">'.$this->session->flashdata('post_created').'</p>';?>
        <?php endif; ?>
        <!--Category Creation Message -->
        <?php if($this->session->flashdata('category_created')) : ?>
        <?php echo '<p class=" alert alert-success">'.$this->session->flashdata('category_created').'</p>';?>
        <?php endif; ?>
        <!--Log in failed Message -->
        <?php if($this->session->flashdata('login_failed')) : ?>
        <?php echo '<p class=" alert alert-danger">'.$this->session->flashdata('login_failed').'</p>';?>
        <?php endif; ?>
        <!--Log in Message -->
        <?php if($this->session->flashdata('user_loggedin')) : ?>
        <?php echo '<p class=" alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>';?>
        <?php endif; ?>
        <!--Log out Message -->
        <?php if($this->session->flashdata('user_loggedout')) : ?>
        <?php echo '<p class=" alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>';?>
        <?php endif; ?>
        <!--Mail sent Message -->
        <?php if($this->session->flashdata('mail_sent')) : ?>
        <?php echo '<p class=" alert alert-success">'.$this->session->flashdata('mail_sent').'</p>';?>
        <?php endif; ?>
        <!--Mail failed Message -->
        <?php if($this->session->flashdata('mail_failed')) : ?>
        <?php echo '<p class=" alert alert-danger">'.$this->session->flashdata('mail_failed').'</p>';?>
        <?php endif; ?>
        <!--Comment Error -->
        <?php if($this->session->flashdata('comment_error')) : ?>
        <?php echo '<p class=" alert alert-danger">'.$this->session->flashdata('comment_error').'</p>';?>
        <?php endif; ?>
        <!--Comment Done-->
        <?php if($this->session->flashdata('comment_create')) : ?>
        <?php echo '<p class=" alert alert-success">'.$this->session->flashdata('comment_create').'</p>';?>
        <?php endif; ?>

        
         <!--User update Done-->
        <?php if($this->session->flashdata('user_update')) : ?>
        <?php echo '<p class=" alert alert-success">'.$this->session->flashdata('user_update').'</p>';?>
        <?php endif; ?>
         <!--Error user update Done-->
        <?php if($this->session->flashdata('error_user_update')) : ?>
        <?php echo '<p class=" alert alert-success">'.$this->session->flashdata('error_user_update').'</p>';?>
        <?php endif; ?>

        <!--Post update Done-->
        <?php if($this->session->flashdata('post_edited')) : ?>
        <?php echo '<p class=" alert alert-success">'.$this->session->flashdata('post_edited').'</p>';?>
        <?php endif; ?>

        <!--Error post update-->
        <?php if($this->session->flashdata('error_edit')) : ?>
        <?php echo '<p class=" alert alert-success">'.$this->session->flashdata('error_edit').'</p>';?>
        <?php endif; ?>

        <!--delete Done-->
        <?php if($this->session->flashdata('post_deleted')) : ?>
        <?php echo '<p class=" alert alert-success">'.$this->session->flashdata('post_deleted').'</p>';?>
        <?php endif; ?>

        <!--Error delete-->
        <?php if($this->session->flashdata('error_delete')) : ?>
        <?php echo '<p class=" alert alert-success">'.$this->session->flashdata('error_delete').'</p>';?>
        <?php endif; ?>


        
    </div>
          