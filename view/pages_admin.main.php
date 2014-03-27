<div class="new-article-button">
	<a href="%baseurl%apps/manage/pages/newarticle/">Create New Page</a>
</div>
<p>Select an article below to edit it.</p>
<ol class="article-list">
	<?php foreach($pages as $page): ?>
	<li><a <?=jsprompt('Are you sure you want to delete this?');?> class="delete_item" href="%baseurl%apps/manage/pages/rm/<?=$page['id'];?>/">x</a> <a href="%baseurl%apps/manage/pages/edit/<?=$page['id'];?>/"><?=$page['title'];?></a></li>
	<?php endforeach; ?>
</ol>