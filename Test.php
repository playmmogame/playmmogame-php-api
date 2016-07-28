<?php
require_once ("Playmmogame.php");
$user = trim($_GET['user']);
$game_token = ""; //got it from game developer center https://playmmogame.com/developer
$client = new Playmmogame($user, $game_token);
$access_token = $client->auth(); //get access token
$member = $client->member();