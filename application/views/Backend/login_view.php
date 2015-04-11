<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login | E-kiosk Perpus Backend</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?=base_url();?>public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="<?=base_url();?>public/plugins/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?=base_url();?>public/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?=base_url();?>public/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="<?=base_url();?>public/dist/img/favicon.ico" />

    <style type="text/css">
        .login-base {
            padding: 4px;
            text-align: center;
            color: #f0f0f0;
            -o-box-shadow: inset 0 0 3px rgba(0,0,0,.1);
            -ms-box-shadow: inset 0 0 3px rgba(0,0,0,.1);
            -moz-box-shadow: inset 0 0 3px rgba(0,0,0,.1);
            -webkit-box-shadow: inset 0 0 3px rgba(0,0,0,.1);
            box-shadow: inset 0 0 3px rgba(0,0,0,.1);
            margin: 0 0 10px 0;
        }
        .error {
            background-color: #E36A5D;
        }
        .sukses {
            background-color: #6DC274;
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?=base_url();?>"><b>Ekiosk</b>Perpus</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <?php if(isset($error)){ ?><div class="login-base error"><h4><?= $error; ?></h4></div><?php } ?>
            <?php if(isset($sukses)){ ?><div class="login-base sukses"><h4><?= $sukses; ?></h4></div><?php } ?>
            <p class="login-box-msg">Silakan login untuk masuk ke Dashboard</p>
            <?php
                $attributes = array(
                    'id' => 'login',
                    'role' => 'form'
                ); 
                echo form_open('login/dologin',$attributes);
            ?>
                <div class="form-group has-feedback">
                    <input name="l_username" type="text" class="form-control" placeholder="Username" value="<?php echo set_value('l_username'); ?>" required />
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input name="l_password" type="password" class="form-control" placeholder="Password" required />
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input name="l_ingat" type="checkbox" value="ingat"> Ingat Saya
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-success btn-block btn-flat">Masuk &nbsp;<i class="fa fa-chevron-right"></i></button>
                    </div>
                    <!-- /.col -->
                </div>
            <?php echo form_close(); ?> 

            <a href="<?=site_url()?>login/lupa">Lupa Password ?</a> | <a href="<?=site_url()?>daftar">Buat akun baru</a>

        </div>
        <!-- /.login-box-body -->
        <div style="margin: 5px auto; opacity: 0.5; text-align: center;">
            Copyright &copy; 2015 - E-Kiosk Perpustakaan<br><b>Best in Chrome Browser. <i>{elapsed_time} detik</i></b>
        </div>
        <!-- /.login-box-footer -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    <script src="<?=base_url();?>public/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=base_url();?>public/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?=base_url();?>public/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
    $(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
    </script>
</body>

</html>
