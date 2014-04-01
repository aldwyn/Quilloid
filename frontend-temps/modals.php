<div id='modal1'>
	<div class="modal-dialog">
		<div class="container"></div>
		<div class="container"></div>
		<form class="signup-form ask-form subhead" action="applications/saveAndPost.php" method="POST">
			<div id="close1" class="close right btn">X</div>
			<h2>Post a Blog</h2>
			<input type="hidden" name="medium" value="BLOG"/><br/>
			<input type="text" placeholder="Topic" name="title"/><br/>
			<input class="input-tags" type="text" placeholder="Tags(optional, comma-separated)" name="tags"/><br/>
			<textarea placeholder="Content here..." name="content"></textarea><br/>
			<button class="btn big-btn" type="submit">Post</button>
		</form>
	</div>
</div>
<div id='modal2'>
	<div class="modal-dialog">
		<div class="container"></div>
		<div class="container"></div>
		<form class="signup-form ask-form subhead" action="applications/saveAndPost.php" method="POST">
			<div id="close2" class="close right btn">X</div>
			<h2>Share a Quote</h2>
			<input type="hidden" name="medium" value="QUOTE"/><br/>
			<input type="text" placeholder="Quote" name="title"/><br/>
			<input class="input-tags" type="text" placeholder="Tags(optional, comma-separated)" name="tags"/><br/>
			<textarea placeholder="Further elaboration of your quote here..." name="content"></textarea><br/>
			<button class="btn big-btn" type="submit">Share</button>
		</form>
	</div>
</div>
<div id='modal3'>
	<div class="modal-dialog">
		<div class="container"></div>
		<div class="container"></div>
		<form class="signup-form ask-form subhead" action="applications/saveAndPost.php" method="POST">
			<div id="close3" class="close right btn">X</div>
			<h2>Ask a Question</h2>
			<input type="hidden" name="medium" value="QUESTION"/><br/>
			<input type="text" placeholder="Question" name="title"/><br/>
			<input class="input-tags" type="text" placeholder="Tags(optional, comma-separated)" name="tags"/><br/>
			<textarea placeholder="Description of the question provided..." name="content"></textarea><br/>
			<button class="btn big-btn" type="submit">Ask</button>
		</form>
	</div>
</div>
<!-- <div id='modal4'>
	<div class="modal-dialog">
		<div class="container"></div>
		<div class="container"></div>
		<form class="signup-form ask-form subhead" action="applications/uploadPhoto.php" method="POST">
			<div id="close4" class="close right btn">X</div>
			<h2>Upload a Photo</h2>
			<input type="text" placeholder="Title" name="title"/><br/>
			<input class="btn big-btn" type="file" /><br/>
			<textarea placeholder="Caption here..." name="caption"></textarea><br/>
			<button class="btn big-btn" type="submit">Upload</button>
		</form>
	</div>
</div> -->