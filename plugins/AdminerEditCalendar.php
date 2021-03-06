<?php

/** Display jQuery UI Timepicker for each date and datetime field
* @uses jQuery-Timepicker, http://trentrichardson.com/examples/timepicker/
* @uses jQuery UI: core, widget, mouse, slider, datepicker
* @author Jakub Vrana, http://www.vrana.cz/
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
*/
class AdminerEditCalendar {
	/** @var string @access protected */
	var $prepend, $langPath;
	
	/**
	* @param string text to append before first calendar usage
	* @param string path to language file, %s stands for language code
	*/
	function AdminerEditCalendar($prepend = "<script type='text/javascript' src='plugins/jquery-ui/jquery.js'></script>\n<script type='text/javascript' src='plugins/jquery-ui/jquery-ui.js'></script>\n<script type='text/javascript' src='plugins/jquery-ui/jquery-ui-timepicker-addon.js'></script>\n<link rel='stylesheet' type='text/css' href='plugins/jquery-ui/css/jquery.ui.all.css'>\n", $langPath = "plugins/jquery-ui/i18n/jquery.ui.datepicker-%s.js") {
		$this->prepend = $prepend;
		$this->langPath = $langPath;
	}
	
	function head() {
		echo $this->prepend;
		if ($this->langPath && function_exists('get_lang')) { // since Adminer 3.2.0
			$lang = get_lang();
			$lang = ($lang == "zh" ? "zh-CN" : ($lang == "zh-tw" ? "zh-TW" : $lang));
			if ($lang != "en" && file_exists(sprintf($this->langPath, $lang))) {
				printf("<script type='text/javascript' src='$this->langPath'></script>\n", $lang);
				echo "<script type='text/javascript'>jQuery(function () { jQuery.timepicker.setDefaults(jQuery.datepicker.regional['$lang']); });</script>\n";
			}
		}
	}
	
	function editInput($table, $field, $attrs, $value) {
		if (ereg("date|time", $field["type"])) {
			$dateFormat = "changeYear: true, dateFormat: 'yy-mm-dd'"; //! yy-mm-dd regional
			$timeFormat = "showSecond: true, timeFormat: 'hh:mm:ss'";
			return "<input id='fields-" . h($field["field"]) . "' value='" . h($value) . "'" . ($maxlength ? " maxlength='$maxlength'" : "") . "$attrs><script type='text/javascript'>jQuery(function () { jQuery('#fields-" . js_escape($field["field"]) . "')."
				. ($field["type"] == "time" ? "timepicker({ $timeFormat })"
				: (ereg("time", $field["type"]) ? "datetimepicker({ $dateFormat, $timeFormat })"
				: "datepicker({ $dateFormat })"
			)) . "; });</script>";
		}
	}
	
}
