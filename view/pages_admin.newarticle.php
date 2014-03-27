<form class="pages_edit_article" action="%baseurl%apps/manage/pages/newarticle/" method="post">
	<input name="title" class="article_title" placeholder="Title" />
	<textarea id="ckeditor" name="content"></textarea>
	<input class="submit-button" type="submit" value="Save" /> <?=$msg;?>
</form>
<?php readfile(ROOT.'system/lib/editor.js'); /* ckeditor */ ?>