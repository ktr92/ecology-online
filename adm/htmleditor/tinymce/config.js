var config_htmleditor = {
	// General options
	mode : "specific_textareas",
	editor_selector : "htmleditor",
	theme : "modern",
	language : config_language,
	file_browser_callback : "diafanimages",
	convert_urls : false,
	plugins : "spellchecker,table,hr,image,link,lists,emoticons,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,diafanimages,filemanager,code,textcolor,colorpicker",
    toolbar: [	"code,|,undo,redo,|,cut,copy,paste,pastetext,selectall,removeformat,|,link,unlink,anchor,table,hr,|,media,diafanimages,filemanager","bold,italic,underline,strikethrough,superscript,subscript,|,forecolor,backcolor,|,alignleft,aligncenter,alignright,alignjustify,|,numlist,bullist,|,outdent,indent,blockquote",
	"formatselect,fontselect,fontsizeselect"],
	valid_elements : "*[*],insert",
	extended_valid_elements: "*[*]",
	cleanup : false,
	menubar : false,
	verify_html : false,
	cleanup_on_startup : false,
	element_format : "html",
	gecko_spellcheck : true,
	inline_styles: false,
	external_filemanager_path: base_path + "adm/htmleditor/tinymce/plugins/filemanager/",
	image_advtab: true,
};
tinyMCE.init(config_htmleditor);