<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Minus1 {
	public static $name         = 'Minus1';
	public static $version      = '1.0';
	public static $author       = 'Dennis Wyman';
	public static $author_url   = 'https://denniswyman.com';
	public static $description  = 'Wrap this tag around any number to subtract one integer from it. Based on Mike Heavers EE2 "Index" plugin to start {count} from zero, but it will work for other things too.';
	public static $typography   = FALSE;
    
	public $return_data = '';

	public function __construct()
	{
		$precount = ee('Security/XSS')->clean(ee()->TMPL->tagdata);
		if (! ctype_digit($precount))
		{
			ee()->output->fatal_error('Minus1 plugin error: Provided input contains non-numeric characters.');
		}
		$this->return_data = $precount - 1;
	}
}

/* End of file pi.minus1.php */
/* Location: ./system/user/addons/minus1/pi.minus1.php */