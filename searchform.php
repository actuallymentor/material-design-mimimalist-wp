<!-- <form role="search" method="get" id="searchform" class="searchform" action="http://web.dev/wordpress/" _lpchecked="1">
	<div class="row">
		<input class="col l9 m9 s12" placeholder="Search by topic, title or category" type="text" value="" name="s" id="s">
		<input class="btn col l3 m3 s12 left primary" type="submit" id="searchsubmit" value="Search">
	</div>
</form> -->

<form role="search" method="get" id="searchform" class="searchform" action="<?php echo get_option('siteurl') ?>" _lpchecked="1">
	<div class="input-field">
		<input placeholder="Search by topic, title or category" id="search" type="search" name="s" required>
	</div>
</form>

