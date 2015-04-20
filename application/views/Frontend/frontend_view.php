<!DOCTYPE html>
<html>
<head>
    <title>E-Kiosk Perpustakaan</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?=base_url();?>public/dist/img/favicon.ico" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('public/bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('public/frontend/css/style.css');?>">

</head>
<body>
    <div class="ekios-base">
        SELAMAT DATANG <br>
        EKIOS PERPUSTAKAAN <br>
        <span class="subtitle">POLITEKNIK ELEKTRONIKA NEGERI SURABAYA</span>
    </div>

    <div class="col-sm-4 content">
        <img src="<?=base_url('public/frontend/img/map.png');?>" width="100%">

        <div class="header">
            LOGIN FORM
            <br>
            <span class="subtitles">Untuk akses ekios perpustakaan anda harus login.</span>
        </div>
        <button type="submit" class="btn-input btn-absolute"><i class="fa fa-check"></i></button>
        <input type="email" class="text-input" name="email" placeholder="email@student.pens.ac.id">
        <input type="email" class="text-input" name="email" placeholder="Password">
        
    </div>

    <script type="text/javascript" src="<?=base_url('public/plugins/jQuery/jQuery-2.1.3.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('public/bootstrap/js/bootstrap.min.js');?>"></script>
</body>
</html>