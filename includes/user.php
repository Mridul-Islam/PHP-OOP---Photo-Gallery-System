<?php

class User extends Db_object{

	protected static $db_table = "users";
	protected static $db_table_fields = array('username', 'password', 'first_name', 'last_name', 'user_image');
	public $id;
	public $username;
	public $password;
	public $first_name;
	public $last_name;
	public $user_image;
	public $upload_directory = "images";
	public $image_placeholder= "https://via.placeholder.com/350x150&text=image";


	public function image_path_and_placeholder() {
		return empty($this->user_image) ? $this->image_placeholder: $this->upload_directory . DS . $this->user_image;
	}

	




} // End of class






?>