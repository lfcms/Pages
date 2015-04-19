<?php

class Page extends orm
{
	//public $table = 'lf_pages';
	
	/*public function get($id = null)
	{
		return orm::q('lf_pages')->get1byid($id);
	}*/
	protected $table = 'lf_pages';
	
	public function pageList()
	{
		return orm::q('lf_pages')->cols('id, title')->order()->get();
	}
	
	public function getById($id)
	{
		return orm::q('lf_pages')->filterByid($id)->first();
	}
	
	public function rmById($id)
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