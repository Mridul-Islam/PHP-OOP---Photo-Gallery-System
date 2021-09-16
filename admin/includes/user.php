<?php

class User{

	public static function find_all_user(){
		global $database;

		$sql = "SELECT * FROM users";
		$all_users = $database->query($sql);
		return $all_users;
	} 


	public static function find_single_user($id){
		global $database;

		$sql = "SELECT * FROM users WHERE id = $id LIMIT 1";
		$single_user = $database->query($sql);
		//$result = mysqli_fetch_array($single_user);
		return $single_user;
	}



}






?>