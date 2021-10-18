<?php

class Photo extends Db_object {

	protected static $db_table = "photos";
	protected static $db_table_fields = array('id', 'title', 'caption', 'description', 'filename', '$alternate_text', 'type', 'size');
	public $id;
	public $title;
	public $caption;
	public $description;
	public $filename;
	public $alternate_text;
	public $type;
	public $size;


	public $tmp_path;
	public $upload_directory = "images";

	public function picture_path() {
		return $this->upload_directory . DS . $this->filename;
	}




} // End of class




?>