/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/*
 $('.basla').on('click', function () {
 var ids = $(this).parents('td').data('id').split('-');
 $(this).parents('td').html('<img src="./gorsel/k0.png" />');
 var x = parseInt(ids[0]);
 var y = parseInt(ids[1]);
 console.log(ids);
 //$('td').html('');
 
 console.log('.m' + (x - 1) + '-' + y);
 console.log('.m' + x + '-' + (y - 1));
 console.log('.m' + x + '-' + (y + 1));
 
 $('.m' + (x - 1) + '-' + y).html('<a href="javascript:void(0)" class="kaz kurek"></a>');
 $('.m' + x + '-' + (y - 1)).html('<a href="javascript:void(0)" class="kaz kurek"></a>');
 $('.m' + x + '-' + (y + 1)).html('<a href="javascript:void(0)" class="kaz kurek"></a>');
 });
 */





$(document).ready(function () {

    $("html, body").animate({ scrollTop: $(document).height() }, 1000);

    $(document).on('click', '.kaz', function (e) {
	var bu = $(this).parents('td');
	var id = bu.data('id');
	var ids = id.split('-');
	var x = parseInt(ids[0]);
	var y = parseInt(ids[1]);
	console.log(bu.position());
	console.log($(window).height());
	console.log(e.pageY);
	$.get('http://sistem.anadolusistem.com/mayin/ajax_c.php?data=' + id, function (g) {
	    console.log(g);
	    if (g.sonuc > 0) {

		alert(g.metin);
		$.get('http://sistem.anadolusistem.com/mayin/ajax_t.php', function (t) {
		    $('#tablo').html(t);
		    setTimeout(
			    function () {
				window.location.reload();
			    }, 5000);
		});
	    } else {

		bu.html(g.metin);
		$('#hamle').html(g.hamle);

		bu.removeClass();
		bu.addClass('alan');
		//bu.addClass('toprak');

		$('.m' + (x - 1) + '-' + y).html('<a href="javascript:void(0)" class="kaz kurek"></a>');
		$('.m' + x + '-' + (y - 1)).html('<a href="javascript:void(0)" class="kaz kurek"></a>');
		$('.m' + x + '-' + (y + 1)).html('<a href="javascript:void(0)" class="kaz kurek"></a>');

	    }


	}, 'json');
    });

});