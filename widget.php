<h4 class="no_martop">Quick Post</h4>

<form method="post" action="<?=\lf\requestGet('AdminUrl');?>apps/pages/newarticle">
	<ul class="vlist">
		<li>
			<input type="text" name="title" placeholder="Post Title"/>
		</li>
		<li>
			<textarea  name="content" placeholder="Write a post..." id="" cols="30" rows="10"></textarea>
		</li>
		<li>
			<input class="green button" type="submit" />
		</li>
	</ul>
</form>

<h4>Recent Pages</h4>

<ul>
<?php

//include __DIR__.'/model/blog.php';

foreach( (new \LfPages)->order('id', 'DESC')->limit(5)->getAll() as $page ): ?>
	<li><a href="<?=\lf\requestGet('AdminUrl');?>apps/pages/edit/<?=$page['id'];?>"><?=$page['title'];?></a></li>
<?php endforeach; ?>
</ul>