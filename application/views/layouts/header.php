<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="<?=base_url("template/frontend/img/pati_logo.png")?>">

    <title><?=$this->config->item('nama_aplikasi')." ".$this->config->item('nama_instansi')?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url("template/backend/css/bootstrap.min.css")?>" rel="stylesheet">
    <link href="<?=base_url("template/backend/css/bootstrap-reset.css")?>" rel="stylesheet">
    <!--external css-->
    <link href="<?=base_url("template/backend/assets/font-awesome/css/font-awesome.css")?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?=base_url("template/backend/assets/gritter/css/jquery.gritter.css")?>" />
    <!-- Custom styles for this template -->
    <link href="<?=base_url("template/backend/css/style.css")?>" rel="stylesheet">
    <link href="<?=base_url("template/backend/css/style-responsive.css")?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?=base_url("template/backend/assets/bootstrap-datepicker/css/datepicker.css")?>" />
    <link rel="stylesheet" type="text/css" href="<?=base_url("template/backend/assets/bootstrap-fileupload/bootstrap-fileupload.css")?>" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="<?=base_url("template/backend/js/html5shiv.js")?>"></script>
    <script src="<?=base_url("template/backend/js/respond.min.js")?>"></script>
    <![endif]-->
    
    <!-- js should be placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="<?=base_url("template/backend/js/jquery.js")?>"></script>

    <!-- bootstrap select -->
    <link rel="stylesheet" href="<?=base_url("template/backend/assets/bootstrap-select/dist/css/bootstrap-select.css")?>">



    
</head>

<body>

<section id="container" class="">
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div data-original-title="Toggle Navigation" data-placement="right" class="fa fa-bars tooltips"></div>
        </div>
        <!--logo start-->
        <a href="<?=base_url()?>" class="logo" >YK<span> Auth </span> </a> 
        <!--logo end-->
        
        <div class="top-nav ">
            <ul class="nav pull-right top-menu">
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" width="29px" height="29px" src="<?=base_url('template/backend/img/user.png')?>">
                        <span class="username"><?=$_SESSION['blud']['realname']?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li><a href="#"><i class=""></i></a></li>
                        <li><a href="#"><i class=""></i> </a></li>
                        <li><a href="#"><i class=""></i> </a></li>
                        <li><a href="<?=site_url('login_do/logout')?>"><i class="fa fa-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="<?php if($this->uri->segment(2) =="dashboard"){ echo "active"; } ?>" href="<?=base_url('home/dashboard')?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
<?php 
      /*
       * Menu Bar
       */
    foreach ($menu as $main) {
        if($main['MenuParentId'] == '0') {                              
            echo '<li'.($main["MenuHasSubmenu"] ? ' class="sub-menu"' : '').'>';
            $active = $this->uri->segment(1) == $main['MenuModule'] ? ' class="active"': '';
            echo '    <a href="'.($main["MenuHasSubmenu"] ? 'javascript:;' : base_url($main["MenuModule"])).'"'.$active.'>';
            if(!empty($main["MenuIcon"])) {
                echo '    <i class="fa fa-'.$main["MenuIcon"].'"></i>';
            }
            echo '        <span>'.$main["MenuName"].'</span>';            
            echo '    </a>';               
            if($main["MenuHasSubmenu"]) {                                
                echo '<ul class="sub">';
            }
            /*
             * Menu Level 1
             */                            
            foreach ($menu as $submenu1) {
                if($submenu1['MenuParentId'] == $main['MenuId']) {
                    $sub = '';
                    if($submenu1["MenuHasSubmenu"]) {
                        $sub = ' class="sub-menu'.($main['MenuModule'] == $this->uri->segment(1)."/".$this->uri->segment(2) ? ' active' : '').'"';
                    } else {
                        if($submenu1['MenuModule'] == $this->uri->segment(1)."/".$this->uri->segment(2)) {
                            $sub = ' class="active"';
                        }
                    }                    
                    echo '<li'.$sub.'>';
                    echo '    <a href="'.($submenu1["MenuHasSubmenu"] ? 'javascript:;' : base_url($submenu1["MenuModule"])).'">';                    
                    echo          $submenu1["MenuName"];                    
                    echo '    </a>';                       
                    if($submenu1["MenuHasSubmenu"]) {                                        
                        echo '<ul class="sub">';
                    }
                    /*
                     * Menu Level 2
                     */
                    foreach ($menu as $submenu2) {
                        if($submenu2['MenuParentId'] == $submenu1['MenuId']) {
                            echo '<li'.($submenu2["MenuHasSubmenu"] ? ' class="sub-menu"' : '').'>';
                            echo '    <a href="'.($submenu2["MenuHasSubmenu"] ? '#' : base_url($submenu2["MenuModule"])).'"'.($submenu2["MenuHasSubmenu"] ? ' class="dropdown-toggle"' : '').'>';
                            echo            $submenu2["MenuName"];
                            echo '    </a>';   
                            if($submenu2["MenuHasSubmenu"]) {                                        
                                echo '<ul class="sub">';
                            }
                            /*
                             * Menu Level 3
                             */
                            foreach ($menu as $submenu3) {
                                if($submenu3['MenuParentId'] == $submenu2['MenuId']) {
                                    echo '<li'.($submenu3["MenuHasSubmenu"] ? ' class="sub-menu"' : '').'>';
                                    echo '    <a href="'.($submenu3["MenuHasSubmenu"] ? '#' : base_url($submenu3["MenuModule"])).'"'.($submenu3["MenuHasSubmenu"] ? ' class="dropdown-toggle"' : '').'>';
                                    echo          $submenu3["MenuName"];
                                    echo '    </a>';                                       
                                    if($submenu3["MenuHasSubmenu"]) {                                        
                                        echo '<ul class="sub">';
                                    }
                                    /*
                                     * Menu Level 4
                                     */
                                    foreach ($menu as $submenu4) {
                                        if($submenu4['MenuParentId'] == $submenu3['MenuId']) {
                                            echo '<li'.($submenu4["MenuHasSubmenu"] ? ' class="sub-menu"' : '').'>';
                                            echo '    <a href="'.($submenu4["MenuHasSubmenu"] ? '#' : base_url($submenu4["MenuModule"])).'"'.($submenu3["MenuHasSubmenu"] ? ' class="dropdown-toggle"' : '').'>';
                                            echo          $submenu4["MenuName"];
                                            echo '    </a>';   
                                            if($submenu4["MenuHasSubmenu"]) {                                        
                                                echo '<ul class="sub">';                                               
                                            }
                                            /*
                                            * Menu Level 5
                                            */                                                            
                                            if($submenu4["MenuHasSubmenu"]) {
                                                echo "</ul>"; /* End of Menu Level 5 */
                                            }
                                            echo "</li>";                                            
                                        }
                                    }
                                    if($submenu3["MenuHasSubmenu"]) {
                                        echo '</ul>'; /* End of Menu Level 4 */
                                    }
                                    echo '</li>';
                                }
                            }
                            if($submenu2["MenuHasSubmenu"]) {
                                echo '</ul>'; /* End of Menu Level 3 */
                            }
                            echo '</li>';
                        }
                    }
                    if($submenu1["MenuHasSubmenu"]) {
                        echo '</ul>'; /* End of Menu Level 2 */
                    }
                    echo '</li>';

                }
            } 
            if($main["MenuHasSubmenu"]) {
                echo '</ul>'; /* End of Menu Level 1 */
            }
            echo '</li>';                            
          } /* End of Menu Bar */
    }
?>            
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <!-- page start-->