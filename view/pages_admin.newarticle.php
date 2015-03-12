Back to <a href="%appurl%">pages list</a>

<h3>New Page</h3>

<?=$this->notice();?>

<form class="martop" action="%appurl%newarticle" method="post">
	
	Title:
	<input style="width: 100%; padding: 2px; font-size: 20px" name="title" placeholder="Page Title" />

	<p>Editor supports MarkDown via <a target="_blank" href="http://parsedown.org/demo">Parsedown</a></p>
	
	<textarea style="width: 100%; height: 500px; padding: 2px; margin-top: 10px;" id="ckeditor" name="content" placeholder="Page Content"></textarea>
	
	<input type="submit" class="blue martop" value="Save Page" />
</form>
<?php /*readfile(ROOT.'system/lib/editor.js');*/ ?>