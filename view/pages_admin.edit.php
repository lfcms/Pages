<form class="pages_edit_article" action="%baseurl%apps/manage/pages/edit/<?=$page['id'];?>/" method="post">
	<input name="title" class="article_title" value="<?=htmlspecialchars($page['title'], ENT_QUOTES);?>" />
	
	<textarea id="ckeditor" name="content"><?=htmlspecialchars($page['content'], ENT_QUOTES);?></textarea>
	
	<input type="submit" class="submit-button" value="Save" /> <?=$msg;?>
</form>
<?php readfile(ROOT.'system/lib/editor.js'); ?>