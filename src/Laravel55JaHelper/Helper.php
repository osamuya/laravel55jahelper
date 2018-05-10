<?php

namespace Laravel55JaHelper;


use Laravel55JaHelper\Useragent\Useragent;

class Helper
{
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
//		$ua = new Useragent();
		echo Useragent::helloUseragent();

		return "foo";
	}
}
