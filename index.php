<?php
ob_start();
session_start();
//session_destroy();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include '../cekirdek/fonksiyon.php';
include '../cekirdek/veritabani.class.php';
include 'mayin.class.php';
$oyun = new mayin();
$_SESSION['hamle'] = $oyun->hamle;
?><!DOCTYPE html> 
<html>
    <head>
	<meta charset="utf-8" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../gene/bootstrap.min.css" rel="stylesheet" />
    <link href="stil.css" rel="stylesheet" />
</head>

<body>
<div class="container" style="width:<?php echo ($oyun->sutun + 1) * 50 + 30 ?>px;">
    <div class="row" class="goster fixed-top" style="width:<?php echo ($oyun->sutun + 1) * 50 + 30 ?>px;">
	<div class="col col-md-4">Hamle:<br /> <span id="hamle"><?php echo $oyun->hamle ?></span></div>
	<div class="col col-md-4">Süre:<br /> </div>
	<div class="col col-md-4">Aşama:<br /> <?php echo $oyun->asama ?></div>
    </div>
    <div class="row">
	<div class="col col-md-12">
	</div>
	<div id="tablo">
	    <?php include 'oyun_tablo.php'; ?>
	</div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    alert('<?php echo $oyun->asama ?>. aşamaya hoş geldiniz. Mayınlara basmadan karşıya geçebilecek misiniz? Hadi başlayalım!');
</script>
<script src="./mayin.js"></script>
</body>
</html>
<?php
ob_end_flush();
