<?php

/**
* 
*/
class User extends ActiveRecord\Model
{

	static $has_many = array(
		array('posts', 'class_name' => 'Post')
	);

}