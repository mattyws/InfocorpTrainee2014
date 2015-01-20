<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class View
{
    protected $_file;
    protected $_data = array();
     
    public function __construct($file)
    {                
        $this->_file = $file;
    }
     
    public function set($key, $value)
    {        
        $this->_data[$key] = $value;
    }
     
    public function get($key) 
    {
        return $this->_data[$key];
    }
     
    public function output()
    {        
        if (!file_exists($this->_file))
        {
            throw new Exception("Template " . $this->_file . " doesn't exist.");
        }
         
        extract($this->_data);
        ob_start();
        include($this->_file);
        $output = ob_get_contents();
        ob_end_clean();
        return $output;
    }
}

?>