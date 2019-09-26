
<table class="table table-bordered" style="width:<?php echo ($oyun->sutun + 1) * 50 ?>px;">
    <?php foreach ($oyun->harita as $i => $m): ?>
        <tr>
	    <?php foreach ($m as $j => $mm): ?>
		<td class="alan" style="width:50px; height:50px; text-align: center; font-weight: bold; color: <?php echo $oyun->renk[$mm] ?>; background-color: <?php echo isset($oyun->koridor[$i][$j]) ? '#ddd;' : '#FFF;' ?>"><?php echo $mm === '*' ? '<img src="mayin.png" />' : '<img src="gorsel/k'.$mm.'.png" />'; ?></td>
	    <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>