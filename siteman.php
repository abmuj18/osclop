<!DOCTYPE html>
<html lang="id" class="js">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="robots" content="noindex">
	<title>
		<?=$this->setting->login_title
			. ' ' . ucwords($this->setting->sebutan_desa)
			. (($header['nama_desa']) ? ' ' . $header['nama_desa']: '')
			. get_dynamic_title_page_from_path();
		?>
	</title>
    <link rel="stylesheet" href="<?= base_url()?>desa/themes/osclop/assets/covid19/css/dashlite.css?ver=1.4.0">
    <link id="skin-default" rel="stylesheet" href="<?= base_url()?>desa/themes/osclop/assets/covid19/css/theme.css?ver=1.4.0">
		<?php if (is_file(LOKASI_LOGO_DESA ."favicon.ico")): ?>
			<link rel="shortcut icon" href="<?= base_url()?><?=LOKASI_LOGO_DESA?>favicon.ico" />
		<?php else: ?>
			<link rel="shortcut icon" href="<?= base_url()?>favicon.ico" />
		<?php endif; ?>
		<script src="<?= base_url()?>assets/bootstrap/js/jquery.min.js"></script>
		<?php require __DIR__ .'/head_tags.php' ?>
</head>

<body class="nk-body npc-crypto ui-clean pg-auth">
    <!-- app body @s -->
    <div class="nk-app-root">
        <div class="nk-split nk-split-page nk-split-md">
            <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container">
                <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                    <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                </div>
                <div class="nk-block nk-block-middle nk-auth-body">
                    <div class="brand-logo pb-5">
                        <a href="<?=site_url(); ?>" class="logo-link">
                            <img class="logo-light logo-img logo-img-lg" src="<?=gambar_desa($header['logo']);?>" srcset="<?=gambar_desa($header['logo']);?> 2x" alt="<?=$header['nama_desa']?>">
                            <img class="logo-dark logo-img logo-img-lg" src="<?=gambar_desa($header['logo']);?>" srcset="<?=gambar_desa($header['logo']);?> 2x" alt="<?=$header['nama_desa']?>">
                        </a>
                    </div>
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Sistem Informasi Desa <?=$header['nama_desa']?></h5>
                            <div class="nk-block-des">
                                <p><?=$header['alamat_kantor']?> <?=$header['nama_kabupaten']?> Kodepos <?=$header['kode_pos']?></p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    
                    <form action="<?=site_url('siteman/auth')?>" method="post">
						<?php if ($_SESSION['siteman_wait']==1): ?>
                            <div class="text-center mt-5">
                                <div class="alert alert-warning" role="alert">
                                  <p id="countdown"></p>
                                </div>
                            </div>
						<?php else: ?>                        
                        <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="default-01">Nama pengguna</label>
                            </div>
                            <input name="username" type="text" class="form-control form-control-lg" placeholder="Nama pengguna">
                        </div><!-- .foem-group -->
                        <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="password">Kata sandi</label>
                                <a class="link link-primary link-sm" tabindex="-1" href="mailto:EMAILANDA" target="_blank">Lupa kata sandi?</a>
                            </div>
                            <div class="form-control-wrap">
                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input name="password" type="password" class="form-control form-control-lg" id="password" placeholder="Kata sandi">
                            </div>
                        </div><!-- .foem-group -->
                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block" type="submit" >Masuk</button>
                        </div>
						<?php if ($_SESSION['siteman']==-1): ?>
							<div class="error">
							    <p class="text-danger">Nama pengguna atau kata sandi yang Anda masukkan salah,
								<?php if ($_SESSION['siteman_try']): ?>
									kesempatan mencoba <?= ($_SESSION['siteman_try']-1); ?> kali lagi.</p>
								<?php endif; ?>
							</div>
						<?php elseif ($_SESSION['siteman']==-2): ?>
							<div class="error">
								Redaksi belum boleh masuk, SID belum memiliki sambungan internet!
							</div>
						<?php endif; ?>
					    <?php endif; ?>                        
                    </form><!-- form -->
                    
                </div><!-- .nk-block -->
                <div class="nk-block nk-auth-footer">
                    <div class="mt-3">
                        <p>&copy; <?= date('Y'); ?> <b><a href="https://github.com/OpenSID/OpenSID" target="_blank"> OpenSID</b></a> <?= substr(AmbilVersi(), 0, 11)?></p>
                    </div>
                </div><!-- .nk-block -->
            </div><!-- .nk-split-content -->
            <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                    <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="<?= base_url()?>desa/themes/osclop/assets/covid19/img/slide1.png" srcset="<?= base_url()?>desa/themes/osclop/assets/covid19/img/slide1.png 2x" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>Coronavirus Disease 2019</h4>
                                    <p>Coronavirus Disease 2019 atau COVID-19 adalah penyakit baru yang dapat mempengaruhi paru-paru dan saluran pernafasan anda. Tanda-tanda umum infeksi yang menunjukan gejala adalah gangguan pernapasan, demam diatas 38 derajat, batuk, sesak napas dan kesulitan bernafas.</p>
                                </div>
                            </div>
                        </div><!-- .slider-item -->
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="<?= base_url()?>desa/themes/osclop/assets/covid19/img/slide2.png" srcset="<?= base_url()?>desa/themes/osclop/assets/covid19/img/slide2.png 2x" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>Lindungi diri dan orang lain</h4>
                                    <p>Jangan Mudik, tetap di rumah jika anda sakit, pakai masker, tutupi mulut dan hidung saat batuk atau bersin, bersihkan permukaan benda yang sering disentuh setiap hari, selalu cuci tangan pakai sabun, serta update informasi situasi COVID-19 di daerah anda.</p>
                                </div>
                            </div>
                        </div><!-- .slider-item -->
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="<?= base_url()?>desa/themes/osclop/assets/covid19/img/slide3.png" srcset="<?= base_url()?>desa/themes/osclop/assets/covid19/img/slide3.png 2x" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>Adaptasi Kebiasaan Baru</h4>
                                    <p>Adaptasi kebiasaan baru atau New Normal adalah cara kita merubah perilaku, gaya hidup, dan kebiasaan. Keadaan dimana ketika PSBB (Pembatasan Sosial Berskala Besar) mulai dilonggarkan, protokol kesehatan tetap dilakukan sehingga kita tetap bisa produktif dengan tetap mencegah terjangkit virus corona.</p>
                                </div>
                            </div>
                        </div><!-- .slider-item -->
                    </div><!-- .slider-init -->
                    <div class="slider-dots"></div>
                    <div class="slider-arrows"></div>
                </div><!-- .slider-wrap -->
            </div><!-- .nk-split-content -->
        </div><!-- .nk-split -->
    </div><!-- app body @e -->
    <!-- JavaScript -->
    <script src="<?= base_url()?>desa/themes/osclop/assets/covid19/js/bundle.js?ver=1.4.0"></script>
    <script src="<?= base_url()?>desa/themes/osclop/assets/covid19/js/scripts.js?ver=1.4.0"></script>  
</body>
</html>
<script src="<?= base_url()?>assets/bootstrap/js/jquery.min.js"></script>
<script>

	function start_countdown(){
		var times = eval(<?= json_encode($_SESSION['siteman_timeout'])?>) - eval(<?= json_encode(time())?>);
		var menit = Math.floor(times / 60); 
		var detik = times % 60;
		timer = setInterval(function(){ 
			detik--;
			if (detik <= 0 && menit >=1){ 
				detik = 60; 
				menit--;
			}
			if (menit <= 0 && detik <= 0){ 
				clearInterval(timer); 
				location.reload();
			} else {
				document.getElementById("countdown").innerHTML = "Anda telah gagal login sebanyak 3 kali, silahkan coba kembali dalam "+menit+" menit "+detik+" detik.";
			}
		}, 1000)
	}

	$('document').ready(function()
	{
		var pass = $("#password");
		$('#checkbox').click(function(){
			if (pass.attr('type') === "password"){
				pass.attr('type', 'text');
			} else {
				pass.attr('type', 'password')
			}
		});

		if ($('#countdown').length)
		{
			start_countdown();
		}
	});

</script>