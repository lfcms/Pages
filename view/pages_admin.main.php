<div class="pages-wrapper">
	<div class="new-page-button">
		<a href="%baseurl%apps/manage/pages/newarticle/">Create New Page</a>
	</div>
	<ol class="pages-list">
		<?php foreach($pages as $page): ?>
		<li><a <?=jsprompt('Are you sure you want to delete this?');?> class="delete_item" href="%baseurl%apps/manage/pages/rm/<?=$page['id'];?>/">x</a> <a href="%baseurl%apps/manage/pages/edit/<?=$page['id'];?>/"><?=$page['title'];?></a></li>
		<?php endforeach; ?>
	</ol>
</div>