<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="<?=base_url("template/frontend/img/pati_logo.png")?>">

    <title>e-Budgeting | Login</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url("template/backend/css/bootstrap.min.css")?>" rel="stylesheet">
    <link href="<?=base_url("template/backend/css/bootstrap-reset.css")?>" rel="stylesheet">
    <!--external css-->
    <link href="<?=base_url("template/backend/assets/font-awesome/css/font-awesome.css")?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?=base_url("template/backend/assets/gritter/css/jquery.gritter.css")?>" />
    <!-- Custom styles for this template -->
    <link href="<?=base_url("template/backend/css/style.css")?>" rel="stylesheet">
    <link href="<?=base_url("template/backend/css/style-responsive.css")?>" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="<?=base_url("template/backend/js/html5shiv.js")?>"></script>
    <script src="<?=base_url("template/backend/js/respond.min.js")?>"></script>
    <![endif]-->
</head>

<body class="login-body">

<div class="container">

    <form class="form-signin" action="<?=site_url('login_do/login')?>" method="POST">
    <h2 class="form-signin-heading">silahkan login</h2>
    <div class="login-wrap">
        <input type="text" name="username" class="form-control" placeholder="User ID" autofocus>
        <input type="password" name="password" class="form-control" placeholder="Password">
        <label class="control-label">Pilih Tahun</label>
        <select class="form-control" id="tahun" name="tahun" style="font-size: 12px;">
            <?php
                for($i=2018; $i<=2023;$i++) {
            ?>
                <option <?= date('Y') == $i ? 'selected' : ''?> value="<?= $i ?>" > <?= $i ?></option>
            <?php
                }
            ?>
        </select>
        <br>
        <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
        
    </div>

        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Forgot Password ?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Enter your e-mail address below to reset your password.</p>
                        <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
                    </div>

                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                        <button class="btn btn-success" type="button">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->

    </form>

</div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?=base_url("template/backend/js/jquery.js")?>"></script>
    <script src="<?=base_url("template/backend/js/jquery.form.min.js"); ?>"></script>
    <script src="<?=base_url("template/backend/js/bootstrap.min.js")?>"></script>
    <script type="text/javascript" src="<?=base_url("template/backend/assets/gritter/js/jquery.gritter.js")?>"></script>

    <script type="text/javascript">
        $(function() {
            $('form').ajaxForm({
                dataType: 'json',
                success: function(data){
                    if(data.success) {
                        location.href = '<?=base_url('home/dashboard')?>';
                    } else{
                        $.gritter.add({
                            title: 'Login Gagal',
                            text: data.msg,
                            class_name: 'gritter-error gritter-center'
                        });
                    }
                }
            });
        });
    </script>
  </body>
</html>
