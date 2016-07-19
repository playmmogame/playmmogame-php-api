<?php
/**
 *@see https://github.com/playmmogame/playmmogame-php-api
 *@author steven@playmmogame.com
 *@Description: this is php client for playmmogame.com auth and login
*/
class Playmmogame {
	public $gametoken; // game token
	public $uid; 
	public $access_token; //when player login,the server will give a oauth token to client,and player put it to server for access token;
	const AUTH_URL = "https://playmmogame.com/v1/auth";
	const USER_URL = "https://playmmogame.com/v1/member/info";
	public function __construct($uid,$game_token) {
		$this->game_token = $game_token;
		$this->uid = $uid;
		$this->playmmogame($uid,$game_token);
	}
	
	public function playmmogame($uid,$game_token) {
		$this->game_token = $game_token;
		$this->uid = $uid;
		$this->auth($uid,$game_token);
	}
	
	public function auth() {
		//you can config it cache file for get the access info
		$array['uid'] = $this->uid;
		$array['game_token'] = $this->game_token;
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