<!DOCTYPE html>
<html>
<head>
    <title>E-Kiosk Perpustakaan</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?=base_url();?>public/dist/img/favicon.ico" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('public/bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('public/frontend/css/style.css');?>">

    <style type="text/css">
        video { 
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -100;
            background: url('<?=base_url("public/video/video_space_cover.jpg");?>') no-repeat;
            background-size: cover;
            transition: 1s opacity;
        }
        .stopfade { 
            opacity: .5;
        }

        #form-pesan-error p, #form-pesan-success p {
            margin: 0;
            display: inline;
        }
    </style>

</head>
<body>
    <video autoplay poster="<?=base_url('public/video/video_space_cover.jpg');?>" id="bgvid" loop>
      <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
    <source src="<?=base_url('public/video/among_the_stars.webm');?>" type="video/webm">
    <source src="<?=base_url('public/video/among_the_stars.mp4');?>" type="video/mp4">
    </video>
    <div class="ekios-base">
        <p>SELAMAT DATANG</p>
        <p>EKIOSK PERPUSTAKAAN</p>
        <p><span class="subtitle">POLITEKNIK ELEKTRONIKA NEGERI SURABAYA</span></p>
    </div>

    <div class="col-sm-4 content" id="sidebar">
        <img src="<?=base_url('public/frontend/img/map.png');?>" width="100%">

        <div class="header">
            LOGIN FORM
            <br>
            <span class="subtitles">Untuk akses ekiosk perpustakaan anda harus login.</span>
        </div>
        <div class="alert alert-warning alert-dismissable" id="form-pesan-error" style="display:none">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="icon fa fa-warning"></i> <span class="pesan"></span>
        </div>
        <div class="alert alert-success alert-dismissable" id="form-pesan-success" style="display:none">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="icon fa fa-check"></i> <span class="pesan"></span>
        </div>
        <?php echo form_open('login/dologinajax', 'id="form-login"') ?>
        <button type="button" class="btn-input btn-absolute" data-toggle="tooltip" title="" data-original-title="Lihat Buku"><i class="fa fa-book"></i></button>
        <input type="email" class="text-input" name="l_username" required placeholder="username tanpa @student.pens.ac.id">
        <input type="password" class="text-input" name="l_password" required placeholder="password">
        <button type="button" class="btn-input btn-login" id="btn-login" data-toggle="tooltip" title="" data-original-title="Login"><i class="fa fa-sign-in"></i></button>
        <?php echo form_close(); ?> 
        
    </div>

    <script type="text/javascript" src="<?=base_url('public/plugins/jQuery/jQuery-2.1.3.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('public/bootstrap/js/bootstrap.min.js');?>"></script>
    <script type="text/javascript">
        var idleTime = 0;
        $(document).ready(function() {
            // tooltip
            $('[data-toggle="tooltip"]').tooltip();
            
            //Increment the idle time counter every minute.
            var idleInterval = setInterval(timerIncrement, 60000); // 1 minute

            //Zero the idle timer on mouse movement.
            $(this).mousemove(function (e) {
                idleTime = 0;
                $("body").removeClass('sidebar-collapse');
                $(".ekios-base").removeClass('sidebar-collapse');
            });
            $(this).keypress(function (e) {
                idleTime = 0;
                $("body").removeClass('sidebar-collapse');
                $(".ekios-base").removeClass('sidebar-collapse');
            });

            $('#btn-login').on('click', function () {
                $('#form-login').submit();
                $('#btn-login').addClass('disabled');
            });

            $('#form-login').submit(function(){
            var data = $('#form-login').serializeArray();
            //data.push({name: '<?php echo $this->security->get_csrf_token_name(); ?>', value: '<?php echo $this->security->get_csrf_hash() ?>'});
            $.ajax({
                url:"<?=site_url('login/dologinajax')?>", 
                type:"POST",
                data:data,
                cache: false,
                success:function(respon){
                    var obj = $.parseJSON(respon);
                    if(obj.status==1){
                        $('#form-pesan-success .pesan').html(obj.pesan);
                        $('#form-pesan-success').show();
                        setTimeout(function(){ window.location.href = "<?=site_url('home/koran/')?>"; }, 2500); 
                    }else{
                        $('#form-pesan-error .pesan').html(obj.pesan);
                        $('#form-pesan-error').show();
                    }
                    
                    $('#btn-login').removeClass('disabled'); }
            });
            return false;
        });
            
        });
        function timerIncrement() {
            idleTime = idleTime + 1;
            console.log(idleTime);
            if (idleTime > 1) { // 1 minutes
                $("body").addClass('sidebar-collapse');
                $(".ekios-base").addClass('sidebar-collapse');
            }
        }
    </script>

</body>
</html>