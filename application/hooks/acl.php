<?php
class ACL{
    private $CI;
    private $user;
    private static $instance;

    public function __construct(){
        $this->CI =& get_instance();
        self::$instance = $this;
    }
    public static function get_instance(){
        return self::$instance;
    }
    public function auth(){
        $CI = $this->CI;
        return $CI;
    }

}