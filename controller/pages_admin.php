<link href="%relbase%lf/apps/pages/css/pages_admin.style.css" rel="stylesheet">
<?php

class pages_admin extends app
{
	public function main($args)
	{
		$pages = $this->db->fetchall('SELECT id, title FROM lf_pages ORDER BY id');
		include 'view/pages_admin.main.php';
	}
	
	public function edit($args)
	{
		if(!preg_match('/^[0-9]+$/', $args[1], $match)) return 'Invalid Edit Request :(';
		
		// Update page from $_POST if submitted
		if(count($_POST) > 0)
		{	
			$result = $this->db->query("
				UPDATE lf_pages 
				SET 
					title 	= '".mysql_real_escape_string($_POST['title'])."', 
					content = '".mysql_real_escape_string($_POST['content'])."' 
				WHERE id = ".$match[0]
			);
			$msg = 'Saved.';
		}
		
		$page = $this->db->fetch("SELECT * FROM lf_pages WHERE id = ".$match[0]);
		
		include 'view/pages_admin.edit.php';
	}
	
	public function rm($args)
	{
		$this->db->query("DELETE FROM lf_pages WHERE id = ".intval($args[1]));
		redirect302();
	}
	
	public function newarticle($args)
	{
		if(count($_POST) > 0)
		{	
			$this->db->query("INSERT INTO lf_pages (`id`, `title`, `content`)
				VALUES (NULL, 
					'".htmlspecialchars($_POST['title'], ENT_QUOTES)."', 
					'".mysql_real_escape_string($_POST['content'])."' 
				)");
			
			redirect302($this->lf->appurl.'edit/'.$this->db->last());
		} 
		
		include 'view/pages_admin.newarticle.php';
	}
}