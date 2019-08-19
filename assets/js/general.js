

function customAlert(message, timeout = 2500){
	$('#custom_alert_message').html('');
	$('#custom_alert_message').html(message+' ');
	$('.custom_alert_icon').show();
	$('#custom_alert').unbind().slideDown('fast', function(){
		$('.custom_alert_icon').effect('bounce', {times : 6 , distance : 10}, timeout,function(){
			$('#custom_alert').hide('fast')
		})
	})
}

function bounce(element)
{
	setInterval(function() {
		$(element).effect('bounce',{distance : 10},1000)
	}, 1000);
}

function formatCurrency(nilai)
{

	numeral.locale('ID');

	let finalformat = 'Rp. '+numeral(nilai).format('0,0');
	return finalformat;
}

function animateShowNotifChat(message, username)
{
	$('#username_notif').html(username)
	$('.isi_pesan_notif').html(message)
	$(".notif_chat").fadeIn('slow').delay(2000).fadeOut('slow')
	$('#receivedsound')[0].play()
}