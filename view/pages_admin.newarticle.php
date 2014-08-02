<div class="pages-wrapper">
	<form class="pages_edit_article" action="%baseurl%apps/manage/pages/newarticle/" method="post">
		<div class="save-page-button">
			<input type="submit" class="submit-button" value="Save Page" /> <?=isset($msg)?$msg:'';?>
		</div>
		<div class="page_title">
			<input name="title" placeholder="Page Title" />
		</div>
		<textarea id="ckeditor" name="content"></textarea>
	</form>
	<?php readfile(ROOT.'system/lib/editor.js'); /* ckeditor */ ?>
</div>