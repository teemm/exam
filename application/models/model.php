<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model{
	public function main(){

		$url="http://api.nytimes.com/svc/news/v3/content/all/all/700.json?api-key=f7461a77a38ac1ea94c503349d839fe6:13:73589106";
		//  Initiate curl
		$ch = curl_init();
		// Disable SSL verification
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		// Will return the response, if false it print the response
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// Set the url
		curl_setopt($ch, CURLOPT_URL,$url);
		// Execute
		$result=curl_exec($ch);
		// Closing
		curl_close($ch);

		return $result;
	}
}