<?php

	/*$sql = 'SELECT id, title FROM lf_pages';
	$this->db->query($sql);
	$pages = $this->db->fetchall();*/
	
	$pages = (new LfPages)->cols('id, title')->getAll();
	
	$args = '';
	if(count($pages))
	{
		$args .= '<select name="ini">
			<option value="">-- Select an article --</option>';
		foreach($pages as $page)
			$args .= '<option value="'.$page['id'].'">'.$page['id'].'. '.$page['title'].'</option>';
		$args .= '</select> ';
		
		$args .= '<a href="%baseurl%apps/pages/edit/'.$save['ini'].'">Edit this Page</a>  or ';
		
			
		$args = str_replace('value="'.$save['ini'].'"', 'value="'.$save['ini'].'" selected="selected"', $args);
	}
	
	$args .= '<a href="%baseurl%apps/pages/new/">Create New Page</a>';
	
	/*$args .= '<input type="checkbox" name="ini[title]" checked="checked">
			Show Title';*/
?>