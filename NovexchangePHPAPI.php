<?php

class NovaExChange {
	//https://novaexchange.com/remote/faq/
	const URL = "https://novaexchange.com/remote/v2";
	const SUCCESS = "success";
	const ERROR = "error";

	private $key;
	private $secret;

	public function __construct($key='', $secret='') {
		$this->key = $key;
		$this->secret = $secret;
	}

	public static function publicAPI($endpoint) {
		$url = self::URL .'/' .$endpoint .'/';
		$json = self::get($url);
		$data = json_decode($json);
		if( $data->status !== self::SUCCESS && $data->status !== self::ERROR )
			throw new Exception("Access Failed publicAPI.");
		else
			return $data;
	}

	/* GETアクセス */
	private static function get($url) {
		$ch = curl_init();
		$ops = array(
			CURLOPT_URL => $url,
			CURLOPT_HEADER => false,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_SSL_VERIFYPEER => false,
		);

		curl_setopt_array($ch, $ops);
		$data = curl_exec($ch);
		curl_close($ch);

		return $data;
	}
}
?>
