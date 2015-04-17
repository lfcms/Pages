<h3><i class="fa fa-pencil-square-o"></i> Edit Page</h3>

<?=$this->notice();?>
	
<form class="martop" action="%appurl%edit/<?=$page['id'];?>/" method="post">

	<div class="row">
		<div class="col-10">
			<input type="text" name="title" placeholder="Page Title" value="<?=htmlspecialchars($page['title'], ENT_QUOTES);?>" />
		</div>
		<div class="col-2">
			<a target="_blank" class="button" href="http://parsedown.org/demo">M <i class="fa fa-long-arrow-down"></i></a>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<textarea class="h400 scroll-y" id="ckeditor" name="content"><?=htmlspecialchars($page['content'], ENT_QUOTES);?></textarea>
		</div>
	</div>
	<div class="row">
		<div class="col-6"><button class="green"><i class="fa fa-floppy-o"></i> Save Page</button></div>
		<div class="col-6"><a class="red button" href="%appurl%"><i class="fa fa-ban"></i> Cancel</a></div>
	</div>
</form>
