<?php

namespace Laravel55JaHelper;


use Laravel55JaHelper\Useragent\Useragent;

class Helper
{

	public $user_agent;

    public function __construct() {

    }


    public function helloHelper() {
        return "Hello Helper for Laravel55Ja";
    }




/**
 * User agent judgment
 *
 * $option null        -> Simply judge whether it is pc | sp(smartphone)
 * $option 'type'      -> Judge whether it is pc | pad | sp(smartphone)
 * $option 'useragent' -> Determine pc | android | ios
 * $option 'device'    -> Detailed device determination
 * | Windows|Macintosh|iPhone|iPad|iPod|Android|AndroidTablet|WindowsPhone|false(No match) |
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
	static public function ua($option = null)
	{
		$ua = new Useragent();
		$re = $ua->helloUseragent2();

		echo Useragent::helloUseragent();

		// var_dump($this->user_agent);
//		echo $this->user_agent->helloUseragent();

		// echo $this->helloHelper();
		return "foo";
	}




		// public function makeUniqueid($prefix=null) {
		//
		// 	$uniqueid = "xxxx";
		// 	return $uniqueid;
		// }

		public static function makeUniqueid($prefix="000") {

        $uniqueid_tmp = uniqid();
        // (example)5-94f5-3b53-8eda
        $uiprefix = substr($uniqueid_tmp,0,1);
        $ui1 = substr($uniqueid_tmp,1,4);
        $ui2 = substr($uniqueid_tmp,5,4);
        $ui3 = substr($uniqueid_tmp,9,4);
        $uniqueid = $prefix."-".$uiprefix."-".$ui1."-".$ui2."-".$ui3;

        return $uniqueid;
    }





}
