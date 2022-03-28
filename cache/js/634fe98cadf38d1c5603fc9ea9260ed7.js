$(document).on('change','select[name=parent_id]',function(){if($(this).val())
{$('#group_id').hide();}
else
{$('#group_id').show();}});if($('select[name=parent_id]').val())
{$('#group_id').hide();}