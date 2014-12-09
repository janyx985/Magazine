<?php
<<<<<<< HEAD
<<<<<<< HEAD
class Post extends Base {
	//protected $table = 'posts';
	protected $fillable = ['title','content'];
	
	public static function filterBySearch($q, $value)
	{
		$q->where('title',$value);
	}
=======
class Post extends Eloquent {
	protected $table = 'posts';
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
=======
class Post extends Eloquent {
	protected $table = 'posts';
>>>>>>> ed54c42441fb1d231a7e7d42485af9f5fd8a2cb6
}