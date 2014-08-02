<div class="pages-wrapper">
	<form class="pages_edit_article" action="%baseurl%apps/manage/pages/edit/<?=$page['id'];?>/" method="post">
		<div class="save-page-button">
			<input type="submit" class="submit-button" value="Save Page" /> <?=isset($msg)?$msg:'';?>
		</div>
		<div class="page_title">
			<input name="title" value="<?=htmlspecialchars($page['title'], ENT_QUOTES);?>" />
		</div>
		<textarea id="ckeditor" name="content"><?=htmlspecialchars($page['content'], ENT_QUOTES);?></textarea>
	</form>
	<?php readfile(ROOT.'system/lib/editor.js'); ?>
</div>