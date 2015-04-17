<?php

class Page
{
	public function __construct()
	{
		$this->db = db::init();
		//$this->router = Router::init();
	}
	
	public function get($id)
	{
		return orm::q('lf_pages')->get1byid($id);
	}
	
	public static function query()
	{
		return orm::q('lf_pages');
	}
	
	// q is an alias for query()
	public static function q()
	{
		return self::query();
	}
	
	public function allpages()
	{
		return orm::q('lf_pages')->cols('id, title')->order()->get();
	}
	
	public function getpage($id)
	{
		return orm::q('lf_pages')->filterByid($id)->first();
	}
	
	public function rmpage($id)
	{
		return orm::q('lf_pages')->filterByid($id)->delete();
	}
	
	public function savepage($id, $data)
	{
		$page = orm::q('lf_pages')->filterByid($id);
		foreach($data as $col => $val)
		{
			$setcol = "set$col";
			$page->$setcol($val);
		}
		return $page->save();
	}
	
	public function addpage($data)
	{
		$insert = orm::q('lf_pages')->add();
		foreach($data as $col => $val)
		{
			$setcol = "set$col";
			$insert->$setcol($val);
		}
		return $insert->save();
	}
}