<h3><i class="fa fa-pencil-square-o"></i> Edit Page</h3>

<?=notice();?>
	
<form class="martop" action="%appurl%edit/<?=$page['id'];?>/" method="post">

	<div class="row">
		<div class="col-10">
			Site Title
			<input style="font-size: 24px;" type="text" name="title" placeholder="Page Title" value="<?=htmlspecialchars($page['title'], ENT_QUOTES);?>" />
		</div>
		<div class="col-2">
			Markdown
			<a target="_blank" class="button" href="http://parsedown.org/demo">M <i class="fa fa-long-arrow-down"></i></a>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			Page Body
		
		
			<textarea style="width: 100%" class="h400 scroll-y" id="content" name="content"><?=htmlspecialchars($page['content'], ENT_QUOTES);?></textarea>
			
			
			<div id="editor" class="dark_b"><?=htmlspecialchars($page['content'], ENT_QUOTES);?></div>
			
			
			
		</div>
	</div>
	<div class="row">
		<div class="col-6">
			<button class="green"><i class="fa fa-floppy-o"></i> Save</button>
		</div>
		<div class="col-6">
			<a class="red button" href="%appurl%"><i class="fa fa-ban"></i> Cancel</a>
		</div>
	</div>
</form>
<style type="text/css" media="screen">
	#editor { 
		position: relative;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		height: <?=($linecount*16);?>px;
	}
</style>


<script src="https://d1n0x3qji82z53.cloudfront.net/src-min-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
$(document).ready(function(){
	var editor = ace.edit("editor");
	
	editor.setShowPrintMargin(false);
	editor.setTheme("ace/theme/textmate");
	editor.getSession().setMode("ace/mode/html");
	editor.focus(); //To focus the ace editor
	
	$("#content").hide();
	
	// ty SelçukDERE http://stackoverflow.com/a/23965289
	editor.getSession().on("change", function () {
        $("#content").val(editor.getSession().getValue());
    });
});
</script>