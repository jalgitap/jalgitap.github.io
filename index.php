<?php
// get json file
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://cdn01.rumahweb.com/under-construction/panduan.json");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$links = json_decode(curl_exec($ch));
curl_close($ch);
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mohon maaf, website <?php echo $_SERVER['HTTP_HOST'];?> sedang dalam perbaikan!</title>
<meta name="description" content="Gerbang Anda untuk mendunia telah terbuka. Segera buat website dan email <?php echo $_SERVER['HTTP_HOST'];?> dan mulai perjalanan bisnis Anda.">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet">
<link href="https://cdn01.rumahweb.com/under-construction/style.css" rel="stylesheet">
</head>
<body>
        <div style="background: #014CA0;color:#fff;padding:10px;">
                <div class="container text-center" style="font-size:14px;font-weight:600;line-height: 20px;">Selamat datang di Pondok Pesantren Taruna Al Quran.</div>
        </div>
        <section class="hero">
                <div style="background-image:url('https://cdn01.rumahweb.com/under-construction/img/dot.png');background-repeat:no-repeat;margin: -60px 0;padding: 60px 0;background-position: 30px 50px;">
                        <div class="container">
                                <div class="row">
                                        <div class="col-md-7">
                                                <p class="top1">Gerbang Anda untuk mendunia telah terbuka</p>
                                                <p class="top2"><b style="color: #FFC546;"><?php echo ucfirst($_SERVER['HTTP_HOST']);?></b><br>sudah aktif</p>
                                                <p class="top3">Segera bangun website, buat akun email, dan mulai mendapatkan peluang dan kemungkinan baru. <b>#thinkbig</b> <b>#growbigger</b></p>
                                        </div>
                                        <!--<div class="col-md-5"><img src="https://cdn01.rumahweb.com/under-construction/img/hero.png" alt="<?php echo ucfirst($_SERVER['HTTP_HOST']);?> sudah aktif" width="400"></div>-->
                                </div>
                        </div>
                </div>
        </section>
        <section class="steps" style="padding: 80px 0;">
                <div class="container">
                        <h2 class="text-center" style="font-size:36px; font-weight:600;color:#0D145A;line-height:50px;margin-bottom: 40px;">Website UNDER CONSTRUCTION</h2>
                        <div class="row">
                            <div class="text-center"><img src="under.png" class="img-responsive"></div>
                                        <div class="box step1">
                                        <h4>Email</h4>
                                        <p><b>pptarunaalquran@gmail.com</b> untuk berkomunikasi dengan lebih profesional.</p>
                                </div>
                            </div>
                            
                        </div>
                </div>
        </section>
        <section class="bantuan">
                       
                                <div class="text-center"><img src="under1.png" class="img-responsive"></div>
                        
        </section>
        <footer>
                <div class="container">
                <p class="text-center" style="font-size:24px;line-height: 32px;color: #0D145A;margin:80px 0 30px 0">Powered by <a href="https://www.kadeco.id" style="font-weight: 800;color:#0D145A;text-decoration: none;">Kadeco Indonesia</a></p>
        </div>
        </footer>
</div>
</body>
    <!--<script type="text/javascript" src="https://chat.rumahweb.com/js/resource.js"></script>-->
    <!--<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>-->
    <!--<script>-->
    <!--$(document).ready(function(){-->
    <!--    $(document).on('click', '.livechat', function(x) {-->
    <!--        if($('.rwlivechat-area').css('display') == 'none'){-->
    <!--            document.getElementById("rwlivechat-check").checked = true;-->
    <!--        }-->
    <!--        else{-->
    <!--            document.getElementById("rwlivechat-check").checked = false;-->
    <!--        }-->
    <!--        $('.livechatbanner').hide();-->
    <!--        $('.livechat-btn').show();-->
    <!--        x.preventDefault();-->
    <!--    });-->
    <!--});-->
    <!--</script>-->
</html>