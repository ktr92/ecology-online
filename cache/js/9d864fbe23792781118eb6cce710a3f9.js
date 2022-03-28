var admin_fields="#hr3, #start_admin, #useradmin, #htmleditor, #copy_files";$(document).on('change',"select[name=role_id]",show_param_role_rel);show_param_role_rel();function show_param_role_rel()
{var role_id=$("select[name=role_id],input[name=role_id]").val();if(admin_roles.indexOf(role_id)==-1)
{$(admin_fields).hide();}
else
{$(admin_fields).show();}
$(param[0]).hide();$(param[role_id]).show();}