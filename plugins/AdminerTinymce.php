<?php

/** Edit all fields containing "_html" by HTML editor TinyMCE and display the HTML in select
* @uses TinyMCE, http://tinymce.moxiecode.com/
* @author Jakub Vrana, http://www.vrana.cz/
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
*/
class AdminerTinymce {
	/** @var string @access protected */
	var $path;
	
	/**
	* @param string
	*/
	function AdminerTinymce($path = "plugins/tiny_mce/tiny_mce.js") {
		$this->path = $path;
	}
	
	function head() {
		$lang = "en";
		if (function_exists('get_lang')) { // since Adminer 3.2.0
			$lang = get_lang();
			$lang = ($lang == "zh" ? "zh-cn" : ($lang == "zh-tw" ? "zh" : $lang));
			if (!file_exists(dirname($this->path) . "/langs/$lang.js")) {
				$lang = "en";
			}
		}
		?>
<script type="text/javascript" src="<?php echo h($this->path); ?>"></script>
<script type="text/javascript">
tinyMCE.init({
	mode: 'none',
	theme: 'advanced',
	plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,advlist",
	entity_encoding: 'raw',
	theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
	theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
	theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
	theme_advanced_toolbar_location: 'top',
	theme_advanced_toolbar_align: 'left',
	width: '800',
	height: '360', 
	language: 'cs', 	
  language: '<?php echo $lang; ?>',
  file_browser_callback : "filebrowser"
});

function filebrowser(field_name, url, type, win) {
    url = document.location.href.split('/').slice(0, -1).join('/')+'/';
    path = url.replace(/^(http|https):\/\/[^\/]+(\/.*)$/, '$2');
    
    fileBrowserURL = path + "plugins/pdw_file_browser/index.php?editor=tinymce&filter=" + type;
      
    tinyMCE.activeEditor.windowManager.open(
        {   
            title: "PDW File Browser",
            url: fileBrowserURL,
            width: 950,
            height: 650,
            inline: 0,
            maximizable: 1,
            close_previous: 0
        }, { 
            window : win,
            input : field_name
        }
    );    
}
</script>
<?php
	}
	
	function selectVal(&$val, $link, $field) {
		if (ereg("_html", $field["field"]) && $val != '&nbsp;') {
			$shortened = (substr($val, -10) == "<i>...</i>");
			if ($shortened) {
				$val = substr($val, 0, -10);
			}
			//! shorten with regard to HTML tags - http://php.vrana.cz/zkraceni-textu-s-xhtml-znackami.php
			$val = preg_replace('~<[^>]*$~', '', html_entity_decode($val, ENT_QUOTES)); // remove ending incomplete tag (text can be shortened)
			if ($shortened) {
				$val .= "<i>...</i>";
			}
			if (class_exists('DOMDocument')) { // close all opened tags
				$dom = new DOMDocument;
				if (@$dom->loadHTML("<meta http-equiv='Content-Type' content='text/html; charset=utf-8'></head>$val")) { // @ - $val can contain errors
					$val = preg_replace('~.*<body[^>]*>(.*)</body>.*~is', '\\1', $dom->saveHTML());
				}
			}
		}
	}
	
	function editInput($table, $field, $attrs, $value) {
		if (ereg("text", $field["type"]) && ereg("_html", $field["field"])) {
			return "<textarea$attrs id='fields-" . h($field["field"]) . "' rows='12' cols='50'>" . h($value) . "</textarea><script type='text/javascript'>
tinyMCE.remove(tinyMCE.get('fields-" . js_escape($field["field"]) . "') || { });
tinyMCE.execCommand('mceAddControl', true, 'fields-" . js_escape($field["field"]) . "');
document.getElementById('form').onsubmit = function () {
	tinyMCE.each(tinyMCE.editors, function (ed) {
		ed.remove();
	});
};
</script>";
		}
	}
	
}
