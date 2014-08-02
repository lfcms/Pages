<link href="%relbase%lf/apps/pages/css/pages_admin.style.css" rel="stylesheet">
<?php

class pages_admin extends app
{
	public function main($args)
	{
		$pages = pages_orm::all();
		include 'view/pages_admin.main.php';
	}
	
	public function edit($args)
	{
		$id = intval($args[1]);
			
		// Update from $_POST
		if(count($_POST) > 0)
			pages_orm::savepage($id, $_POST);
		
		$page = pages_orm::getpage($id);
		
		include 'view/pages_admin.edit.php';
	}
	
	public function rm($args)
	{
		pages_orm::rmpage(intval($args[1]));
		redirect302();
	}
	
	public function newarticle($args)
	{		
		if(count($_POST) > 0)
		{
			$id = pages_orm::addpage($_POST);
			redirect302($this->lf->appurl.'edit/'.$id);
		}
		
		include 'view/pages_admin.newarticle.php';
	}
}