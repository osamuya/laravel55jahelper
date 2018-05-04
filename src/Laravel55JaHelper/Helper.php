<?php

namespace Laravel55JaHelper;

class Helper
{
    public function __construct() {
        

        
    }


    public function helloHelper() {
        
        
        return "Hello Helper for Laravel55Ja";
    }
    
    
    /*
    |--------------------------------------------------------------------------
    | Method makeUniqueid
    |--------------------------------------------------------------------------
    | make uniqeid
    | * @access public
    | * @param STIRINGS $timestamp
    | * @return $timestamp
    | * @throws
    | * @todo
    |
    */
    public function makeUniqueid($oiprefix="000") {

        $uniqueid_tmp = uniqid();
        // (example)5-94f5-3b53-8eda
        $uiprefix = substr($uniqueid_tmp,0,1);
        $ui1 = substr($uniqueid_tmp,1,4);
        $ui2 = substr($uniqueid_tmp,5,4);
        $ui3 = substr($uniqueid_tmp,9,4);
        $uniqueid = $oiprefix."-".$uiprefix."-".$ui1."-".$ui2."-".$ui3;

        return $uniqueid;
    }
}
