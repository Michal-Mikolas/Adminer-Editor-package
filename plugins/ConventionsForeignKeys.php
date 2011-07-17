<?php

/** Convention foreign keys: plugin for Adminer
* Links for foreign keys by convention user_id => users.id. Useful for Ruby On Rails like standard schema conventions.
* @author Ivan Nečas, @inecas
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
*/
class ConventionForeignKeys 
{
    function foreignKeys($table) 
    {
        $ret = array();
        foreach(fields($table) as $field => $args){
          if(ereg("^(.*)_id$", $field, $args)){
            $ret[] = array("table" => $this->plural($args[1]), "source" => array($field), "target" => array("id"));
          }
        }
        return $ret;
    }
    
    /**
     * Pluralize english words    
     * @author Michal Mikoláš <nanuqcz@gmail.com>
     * @param string $name
     * @return string         
     */         
    function plural($name)
    {
        if (preg_match("#(s|x|sh|ch)$#i", $name)) {
            $name.= "es";
        } elseif (preg_match("#y$#i", $name)) {
            $name = preg_replace("#y$#i", "ies", $name);
        } else {
            $name.= "s";
        }

        return $name;
    }
}
?>
