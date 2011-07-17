<?php

/** Edit fields ending with "_path" by <input type="file"> and link to the uploaded files from select
* @author Jakub Vrana, http://www.vrana.cz/
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
*/
class AdminerFileUpload {
    /** @var string @access protected */
    var $uploadPath, $displayPath;
    
    /**
    * @param string prefix for uploading data (create writable subdirectory for each table containing uploadable fields)
    * @param string prefix for displaying data, null stands for $uploadPath
    */
    function AdminerFileUpload($uploadPath = "../userfiles/", $displayPath = null) {
        $this->uploadPath = $uploadPath;
        $this->displayPath = (isset($displayPath) ? $displayPath : $uploadPath);
    }
    
    function editInput($table, $field, $attrs, $value) {
        if (ereg('(.*)_path$', $field["field"])) {
            return "<input type='file' name='fields-$field[field]'>";
        }
    }
    
    function processInput($field, $value, $function = "") {
        if (ereg('(.*)_path$', $field["field"], $regs)) {
            $table = ($_GET["edit"] != "" ? $_GET["edit"] : $_GET["select"]);
            $name = "fields-$field[field]";
            if ($_FILES[$name]["error"] || !eregi('(\\.([a-z0-9]+))?$', $_FILES[$name]["name"], $regs2)) {
                return false;
            }
            //! unlink old
            $filename = uniqid() . $regs2[0];
            $this->preparePath("$this->uploadPath$table/");
            if (!move_uploaded_file($_FILES[$name]["tmp_name"], "$this->uploadPath$table/$filename")) {   //bylo: "$this->uploadPath$table/$regs[1]-$filename"
                return false;
            }
            return q($filename);
        }
    }
    
    function selectVal($val, &$link, $field) {
        if ($val != "&nbsp;" && ereg('(.*)_path$', $field["field"], $regs)) {
            $link = "$this->displayPath$_GET[select]/$regs[1]-$val";
        }
    }
    
    /**
     * Create directory to upload, if not exists
     * @author Michal Mikoláš <nanuqcz@gmail.com>
     * @param string $path
     * @return void               
     */         
    function preparePath($path) {
        if (!is_dir($path)) {
            mkdir($path, 0777);
            chmod($path, 0777);
        }
    }
    
}