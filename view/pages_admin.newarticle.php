<h3><i class="fa fa-plus"></i> New Page</h3>

<?=notice();?>

<form class="martop" action="%appurl%newarticle" method="post">
	
	<div class="row">
		<div class="col-10">
			<input style="font-size: 24px;" type="text" name="title" placeholder="Page Title" />
		</div>
		<div class="col-2">
			<a target="_blank" class="button" href="http://parsedown.org/demo">M <i class="fa fa-long-arrow-down"></i></a>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<textarea style="width: 100%" class="h400 scroll-y" id="ckeditor" name="content" placeholder="Create a page using HTML or Markdown..."></textarea>
		</div>
	</div>
	<div class="row">
		<div class="col-6"><button class="green"><i class="fa fa-floppy-o"></i> Save Page</button></div>
		<div class="col-6"><a class="red button" href="%appurl%"><i class="fa fa-ban"></i> Cancel</a></div>
	</div>
</form>
<?php /*readfile(ROOT.'system/lib/editor.js');*/ ?>