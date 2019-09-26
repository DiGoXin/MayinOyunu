<?php
session_start();
//session_destroy();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include '../cekirdek/fonksiyon.php';
include '../cekirdek/veritabani.class.php';
include 'mayin.class.php';
$oyun = new mayin();
?>
<table class="table table-bordered" style="width:<?php echo ($oyun->sutun + 1) * 50 ?>px;">
    <?php foreach ($oyun->harita as $i => $m): ?>
        <tr>
	    <?php foreach ($m as $j => $mm): ?>
		<td class="alan"><?php echo $mm === '*' ? '<img src="gorsel/mayin.png" />' : '<img src="gorsel/k'.$mm.'.png" />'; ?></td>
	    <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>
<?php
$oyun->yenile();
