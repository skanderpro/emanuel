<?php

namespace EB_s;

use GuzzleHttp\Client;

class CRMClient {
	const BASE_URL = 'https://www.glandon-apartments.com';

	protected static $instance;
	protected $client;

	protected function __construct()
	{
		global $opt_name;

		$token = \Redux::get_option($opt_name, 'crm_token');

		$this->client = new Client([
			'base_uri' => static::BASE_URL,
			'headers' => [
				'Authorization' => $token,
				'Accept' => 'application/json',
			],
			'verify' => false,
			'timeout' => 2.0,
		]);
	}

	public static function inst(): self
	{
		if (empty(static::$instance)) {
			static::$instance = new static();
		}

		return static::$instance;
	}

	public function getCategories()
	{
		if (!$this->client) {
			throw new \Exception('Client not configured');
		}

		$resp = $this->client->request('GET', '/api/tickets/categories.json');
		$json = json_decode($resp->getBody()->getContents(), true);

		return is_array($json) ? $json : [];
	}

	public function contactUs($title, $desc)
	{
		if (!$this->client) {
			throw new \Exception('Client not configured');
		}

		$resp = $this->client->request('POST', '/api/tickets.json', [
			'form_params' => [
				'title' => $title,
				'description' => $desc,
				'category_id' => 53, // Emails
			]
		]);
		$json = json_decode($resp->getBody()->getContents(), true);

		return is_array($json) ? $json : [];
	}

	public function contactTeam($title, $desc)
	{
		if (!$this->client) {
			throw new \Exception('Client not configured');
		}

		$resp = $this->client->request('POST', '/api/tickets.json', [
			'form_params' => [
				'title' => $title,
				'description' => $desc,
				'category_id' => 36, // Communiction
			]
		]);
		$json = json_decode($resp->getBody()->getContents(), true);

		return is_array($json) ? $json : [];
	}

	public function sendFormular($title, $desc)
	{
		if (!$this->client) {
			throw new \Exception('Client not configured');
		}

		$resp = $this->client->request('POST', '/api/tickets.json', [
			'form_params' => [
				'title' => $title,
				'description' => $desc,
				'category_id' => 5, // HR
			]
		]);
		$json = json_decode($resp->getBody()->getContents(), true);

		return is_array($json) ? $json : [];
	}
}