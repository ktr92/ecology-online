if($('select[name=type]').val()!='reCAPTCHA')
{$('#recaptcha_public_key, #recaptcha_private_key').hide();}
$('select[name=type]').change(function(){if($(this).val()=='reCAPTCHA')
{$('#recaptcha_public_key, #recaptcha_private_key').show();}
else
{$('#recaptcha_public_key, #recaptcha_private_key').hide();}});