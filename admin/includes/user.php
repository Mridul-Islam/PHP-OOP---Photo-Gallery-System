<?php

class User{

	public $id;
	public $username;
	public $password;
	public $first_name;
	public $last_name;



	public static function find_all_user(){
		return self::find_this_query("SELECT * FROM users");
		
	} 


	public static function find_single_user($id){
		$single_user_array = self::find_this_query("SELECT * FROM users WHERE id = $id LIMIT 1");
		return $single_user_array;
	}


	public static function find_this_query($sql){
		global $database;

		$result = $database->query($sql);
		$the_object_array = array();

		while($row = mysqli_fetch_array($result)){
			$the_object_array[] = self::instantiation($row);
		}

		return $the_object_array;
	}


	public static function instantiation($the_user){
		$the_object = new self;

        // $the_object->id         = $the_user['id'];
        // $the_object->username   = $the_user['username'];
        // $the_object->password   = $the_user['password'];
        // $the_object->first_name = $the_user['first_name'];
        // $the_object->last_name  = $the_user['last_name'];

        foreach ($the_user as $the_attribute => $value) {
        	if($the_object->has_the_attribute($the_attribute)){
        		$the_object->$the_attribute = $value;
        	}
        }

        return $the_object;
	}


	private function has_the_attribute($the_attribute){
		$properties = get_object_vars($this);
		return array_key_exists($the_attribute, $properties);
	} 



}






?>