<?php
function adminer_object() {
    // required to run any plugin
    include_once "./plugins/plugin.php";
    
    // autoloader
    foreach (glob("plugins/*.php") as $filename) {
        include_once "./$filename";
    }
    
    $plugins = array(
        // specify enabled plugins here
        new AdminerTinymce,
        new ConventionForeignKeys,
        new AdminerSlugify,
        new AdminerEditCalendar,
        new AdminerFileUpload,
        new AdminerEnumOption,
    );
    
    
    
    /* It is possible to combine customization and plugins: */
    class AdminerCustomization extends AdminerPlugin 
    {
        /** zobrazovat jen jednu databázi */
        public function database() 
        {
            // database name, will be escaped by Adminer
            return 'database_name';
        }
        
        /** vlastní přihlašování */
        function credentials() {
            // server, username and password for connecting to database
            return array('localhost', 'root', '');
        }
        function login($login, $password) {
            // validate user submitted credentials
            return ($login == 'admin' && $password == 'admin');
        }
        
        /** zobrazovat jen tabulky s komentářem */
        function tableName($tableStatus) {
            // tables without comments would return empty string and will be ignored by Adminer
            return h($tableStatus["Comment"]);
        }
        
        /** zobrazovat jen sloupce s komentářem */
        function fieldName($field, $order = 0) {
            // only columns with comments will be displayed
            return (!ereg('_(md5|sha1)$', $field["field"]) ? h($field["comment"]) : "");
        }
    }
    
    return new AdminerCustomization($plugins);
}

// include original Adminer or Adminer Editor
include "./editor.php";
