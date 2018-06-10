<?php 
namespace GreatPay\GreatPayment;
use Illuminate\Config\Repository;
/**
 * 主要入口
 */
class GreatPayment
{
	 /**
     * @var Repository
     */
    protected $config;
	function __construct(Repository $config)
	{
	   $this->config = $config;
	}

	public static function success(){
		echo 111;
	}
}


