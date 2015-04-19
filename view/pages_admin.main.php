<a href="%appurl%newarticle/" class="blue button marbot">
	<i class="fa fa-plus"></i> 
	New Page
</a>

<ol class="efvlist rounded">
	<?php foreach($pages as $page): ?>
	
	<li> 
		<a href="%appurl%edit/<?=$page['id'];?>/"><?=$page['title'];?></a>
		<a <?=jsprompt();?> class="x pull-right" href="%appurl%rm/<?=$page['id'];?>/"><i class="fa fa-trash"></i></a>
	</li>
	
	<?php endforeach; ?>
</ol>