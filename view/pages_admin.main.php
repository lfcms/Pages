<a href="%appurl%newarticle/" class="blue button marbot">Create New Page</a>

<ol class="efvlist">
	<?php foreach($pages as $page): ?>
	
	<li>
		<a <?=jsprompt();?> class="x pull-right" href="%appurl%rm/<?=$page['id'];?>/">x</a> 
		<a href="%appurl%edit/<?=$page['id'];?>/"><?=$page['title'];?></a>
	</li>
	
	<?php endforeach; ?>
</ol>