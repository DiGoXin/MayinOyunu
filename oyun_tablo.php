
	    <table class="table" style="width:<?php echo ($oyun->sutun + 1) * 50 ?>px;">
		<?php for ($i = 0; $i <= $oyun->satir; $i++): ?>
    		<tr>
			<?php for ($j = 0; $j <= $oyun->sutun; $j++): ?>
			    <td class="alan m<?php echo $i . '-' . $j ?>" data-id="<?php echo $i . '-' . $j ?>"><?php if ($i == $oyun->satir): ?> <a href="javascript:void(0)" class="kaz kurek"></a><?php endif ?></td>
			<?php endfor; ?>
    		</tr>
		<?php endfor; ?>
	    </table>