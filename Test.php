<?php
require_once ("Playmmogame.php");
$uid = trim($_GET['uid']);
$game_token = ""; //got it from game developer center https://playmmogame.com/developer
$client = new Playmmogame($uid, $game_token);
$access_token = $client->auth(); //get access token
$member = $client->member();