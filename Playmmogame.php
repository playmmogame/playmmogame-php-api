<?php
/**
 *@see https://github.com/playmmogame/playmmogame-php-api
 *@author steven@playmmogame.com
 *@Description: this is php client for playmmogame.com auth and login
*/
class Playmmogame {
	public $gametoken; // game token
	public $user; 
	public $access_token; //when player login,the server will give a oauth token to client,and player put it to server for access token;
	const AUTH_URL = "https://playmmogame.com/v1/auth";
	const USER_URL = "https://playmmogame.com/v1/user";
	public function __construct($user,$game_token) {
		$this->game_token = $game_token;
		$this->user = $user;
		$this->playmmogame($user,$game_token);
	}
	
	public function playmmogame($user,$game_token) {
		$this->game_token = $game_token;
		$this->user = $user;
		$this->auth($user,$game_token);
	}
	
	public function auth() {
		//you can config it cache file for get the access info
		$array['user'] = $this->user;
		$array['token'] = $this->game_token;
		$access_token = $this->request();
		$this->access_token = $access_token;
		return $this->access_token;
	}
	
	//user info
	public function member(){
		$array['access_token'] = $this->access_token;
		return $this->request();
	}
	
	public function request($method,$url,$array()) {
		$array['time'] = time();
		
		
	}
}