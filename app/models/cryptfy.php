<?php
class Cryptfy extends AppModel {

    public $table           = false;
    public $availableCrypts = array('md5', 'sha1', 'sha256', 'base64');


    public function hash($text, $hash = null) {
        switch($hash) {
            case "md5":
                return md5($text);
            case "sha256":
                return bin2hex(mhash(MHASH_SHA256, $text));
            case "base64":
                return base64_encode($text);
            case "sha1":
                return sha1($text);
            default:
                self::hash($text, 'md5');
        }

        return false;
    }


    public function getAll($string) {
        $results = array();
        foreach ($this->availableCrypts as $crypt) {
            $results[$crypt] = $this->hash($string, $crypt);
        }

        return $results;
    }
}