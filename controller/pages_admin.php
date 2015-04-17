<link href="%relbase%lf/apps/pages/css/pages_admin.style.css" rel="stylesheet">
<?php

class pages_admin extends app
{
	public function main($args)
	{
		$this->lf->startTimer(__METHOD__);
		$pages = Page::q()->get();
		include 'view/pages_admin.main.php';
		$this->lf->endTimer(__METHOD__);
	}
	
	public function edit($args)
	{
		$this->lf->startTimer(__METHOD__);
		$id = intval($args[1]);
			
		// Update from $_POST
		if(count($_POST) > 0)
		{
			pages_orm::savepage($id, $_POST);
			$this->notice('Page Saved');
			redirect302();
		}
		
		$page = pages_orm::getpage($id);
		
		include 'view/pages_admin.edit.php';
		$this->lf->endTimer(__METHOD__);
	}
	
	public function rm($args)
	{
		pages_orm::rmpage(intval($args[1]));
		redirect302();
	}
	
	public function newarticle($args)
	{
		$this->lf->startTimer(__METHOD__);
		if(count($_POST) > 0)
		{
			$id = pages_orm::addpage($_POST);
			$this->notice('Page Created');
			redirect302($this->lf->appurl.'edit/'.$id);
		}
		
		include 'view/pages_admin.newarticle.php';
		$this->lf->endTimer(__METHOD__);
	}
}