<?php

	/*$sql = 'SELECT id, title FROM lf_pages';
	$this->db->query($sql);
	$pages = $this->db->fetchall();*/
	
	$pages = (new LfPages)->cols('id, title')->getAll();
	
	if(count($pages))
	{
		$args = '<select name="ini" id="">
			<option value="">-- Select an article --</option>';
		foreach($pages as $page)
			$args .= '<option value="'.$page['id'].'">'.$page['id'].' - '.$page['title'].'</option>';
		$args .= '</select> or ';
		
		$args = str_replace('value="'.$save['ini'].'"', 'value="'.$save['ini'].'" selected="selected"', $args);
	}
	
	$args .= '<a href="%baseurl%apps/manage/pages/new/">Create New Page</a>';
?>