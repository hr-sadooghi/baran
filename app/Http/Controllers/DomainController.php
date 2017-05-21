<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DomainController extends Controller
{
   public function checkDomain($domain) {
	   $whois = file_get_contents("http://whois.nic.ir/?name=$domain");
	   if (strpos($whois, 'ERROR:101: no entries found') !== false) {
	       return array('domain'=>$domain, 'status'=>'free');
	   } else {
	       list(, $expireDate) = explode('expire-date:', $whois);
	       list($expireDate) = explode('<br', $expireDate);
	       $expireDate = trim(strip_tags($expireDate));
	   		return array('domain'=>$domain, 'status'=>'registered', 'expireDate'=>$expireDate);
		}
	}

	public function checkDomainBatch($domainList) {
		$domainList = array('itlove.ir', '123itlove.ir', 'h2l.ir', 'hamsal.ir', 'dgc.ir'/*, 'linkgozar.ir', 'how2learn.ir'*/);
		$res = array();
		foreach ($domainList as $domain) {
		   $whois = file_get_contents("http://whois.nic.ir/?name=$domain");
		   if (strpos($whois, 'ERROR:101: no entries found') !== false) {
		       $res[] = array('domain'=>$domain, 'status'=>'free');
		   } else {
		       list(, $expireDate) = explode('expire-date:', $whois);
		       list($expireDate) = explode('<br', $expireDate);
		       $expireDate = trim(strip_tags($expireDate));
		   		$res[] = array('domain'=>$domain, 'status'=>'registered', 'expireDate'=>$expireDate);
			}
		}
		return $res;
	}

}
