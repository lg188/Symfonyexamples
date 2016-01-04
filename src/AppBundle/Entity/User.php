<?php
use JMS\Serializer\Annotation\MaxDepth;

class User{
	private $username;
	/** 
	 * @MaxDepth(1) 
	 */
	private $friends;
	/** 
	 * @MaxDepth(1) 
	 */
	private $posts;
}
class Post{
	private $title;
	private $author;
}
?>
