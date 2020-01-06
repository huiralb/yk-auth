<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="<?=base_url("template/frontend/img/pati_logo.png")?>">

    <title>e-Budgeting | RSUD Soewondo Pati</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url("template/frontend/css/bootstrap.min.css")?>" rel="stylesheet">
    <link href="<?=base_url("template/frontend/css/theme.css")?>" rel="stylesheet">
    <link href="<?=base_url("template/frontend/css/bootstrap-reset.css")?>" rel="stylesheet">
    <!--external css-->
    <link href="<?=base_url("template/frontend/assets/font-awesome/css/font-awesome.css")?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?=base_url("template/frontend/css/flexslider.css")?>"/>
    <link href="<?=base_url("template/frontend/assets/bxslider/jquery.bxslider.css")?>" rel="stylesheet" />
    <link href="<?=base_url("template/frontend/assets/fancybox/source/jquery.fancybox.css")?>" rel="stylesheet" />

    <link rel="stylesheet" href="<?=base_url("template/frontend/assets/revolution_slider/css/rs-style.css")?>" media="screen">
    <link rel="stylesheet" href="<?=base_url("template/frontend/assets/revolution_slider/rs-plugin/css/settings.css")?>" media="screen">

    <!-- Custom styles for this template -->
    <link href="<?=base_url("template/frontend/css/style.css")?>" rel="stylesheet">
    <link href="<?=base_url("template/frontend/css/style-responsive.css")?>" rel="stylesheet" />

    <!--Datatables-->
    <link rel="stylesheet" type="text/css" href="<?=base_url("template/frontend/assets/datatables/jquery.dataTables.min.css")?>">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="<?=base_url("template/frontend/js/html5shiv.js")?>"></script>
    <script src="<?=base_url("template/frontend/js/respond.min.js")?>"></script>
<![endif]-->
</head>

<body>
    <!--header start-->
    <header class="header-frontend">
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="fa fa-bar"></span>
                        <span class="fa fa-bar"></span>
                        <span class="fa fa-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">eBudgeting<span> RSUD Soewondo Pati</span></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="<?php if($this->uri->segment(2) ==""){ echo "active"; } ?>"><a href="<?= base_url("main/") ?>">Home</a></li>
                        <li class="<?php if($this->uri->segment(2) =="pilkades" || $this->uri->segment(2) =="periode_desa" || $this->uri->segment(2) =="dashboard"){ echo "active"; } ?>"><a href="<?= base_url("main/pilkades") ?>">Pilkades</a></li>
                        <li class="<?php if($this->uri->segment(2) =="berita" || $this->uri->segment(2) =="berita_detail"){ echo "active"; } ?>"><a href="<?= base_url("main/berita") ?>">Berita</a></li>
                        <li class="<?php if($this->uri->segment(2) =="pengumuman" || $this->uri->segment(2) =="pengumuman_detail"){ echo "active"; } ?>"><a href="<?= base_url("main/pengumuman") ?>">Pengumuman</a></li>
                        <li class="<?php if($this->uri->segment(2) =="download"){ echo "active"; } ?>"><a href="<?= base_url("main/download") ?>">Download</a></li>
                        <li><a href="<?= base_url("main/login") ?>">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--header end-->

     