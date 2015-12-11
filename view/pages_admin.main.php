<a href="%appurl%newarticle/" class="blue button marbot">
	<i class="fa fa-plus"></i> 
	New Page
</a>

<ol class="efvlist rounded">
	<?php foreach($pages as $page): ?>
	
	<li> 
		<?=$page['id'];?>. 
		<?=$page['title'];?>
		<div id="page_tools" class="pull-right">
			<a title="Edit Page" href="%appurl%edit/<?=$page['id'];?>/"><i class="fa fa-pencil"></i></a>
			<a title="Delete Page" <?=jsprompt();?> class="x" href="%appurl%rm/<?=$page['id'];?>/"><i class="fa fa-trash"></i></a>
		</div>
	</li>
	
	<?php endforeach; ?>
</ol>