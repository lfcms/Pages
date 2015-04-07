Back to <a href="%appurl%">pages list</a>

<h3>Edit Page</h3>

<?=$this->notice();?>
	
<form class="martop" action="%appurl%edit/<?=$page['id'];?>/" method="post">	
	
	Title:
	<input style="width: 100%; padding: 2px; font-size: 20px" name="title" value="<?=htmlspecialchars($page['title'], ENT_QUOTES);?>" />

	<p>Editor supports MarkDown via <a target="_blank" href="http://parsedown.org/demo">Parsedown</a></p>
	
	<textarea style="width: 100%; height: 500px; padding: 2px; margin-top: 10px;" id="ckeditor" name="content"><?=htmlspecialchars($page['content'], ENT_QUOTES);?></textarea>
	<div class="row">
		<div class="col-6">
			<input type="submit" class="blue" value="Save Page" />
		</div>
		<div class="col-6">
			<a href="%appurl%" class="red button">Cancel</a>
		</div>
	</div>
</form>
<?php /*readfile(ROOT.'system/lib/editor.js');*/ ?>