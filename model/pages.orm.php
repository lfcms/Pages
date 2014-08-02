<?php

class pages_orm extends orm
{
	public function all()
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
		$page->save();
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