	<?php 
	if(Bufferapp::isPaid()){
		$mxr=BUFFERAPP_MAXRSSP;
	}
	else{
		$mxr=BUFFERAPP_MAXRSS;
	}
	?>
	<div id="ways" class="section bufferapp">
		<section>
			<div class="row">
				<span class="span6">
					<div class="circle"><div class="hover fade">Some cool text here</div><img src="<?=get_bloginfo('template_directory');?>/images/upload.png" height="75" /></div>
					<a rel="csv" class="fade button trigger">CVS Upload</a>
					<div class="clearfix"></div>
				</span>
				<span class="span6">
					<div class="circle"><div class="hover fade">Some cool text here</div><img src="<?=get_bloginfo('template_directory');?>/images/rss.png" height="75" /></div>
					<a rel="rss" class="fade button trigger">RSS Import</a>
					<div class="clearfix"></div>
				</span>
				<!-- <span class="span3">
					<div class="circle"><div class="hover fade">Some cool text here</div><img src="<?=get_bloginfo('template_directory');?>/images/around.png" height="75" /></div>
					<a rel="repost" class="fade button" href="/?page_id=17">Repost</a>
					<div class="clearfix"></div>
				</span> -->
				<div class="clearfix"></div><br />
                <br />
                <a class="queue" href="/?page_id=17">Take me to my current Bulk.ly queue &rarr;</a>
			</div>
		</section>
	</div>
	<div id="overlay">
	<?php 	$page_obj = get_page_by_path('bufferapp-access');?>
	<?php if(file_exists(BUFFERAPP_UPLOAD."t_".get_current_user_id().".csv")): ?>
	<!-- <a href="<?php echo home_url()?>/?bufferapp_upload=1&page_id=<?php echo $page_obj->ID?>">Process your current upload</a> -->
	<?php endif;?>
	<?php if(file_exists(BUFFERAPP_UPLOAD."t_".get_current_user_id().".xsv")): ?>
	<!-- <br>Or<br>
	<a href="<?php echo home_url()?>/?bufferapp_upload=1&page_id=<?php echo $page_obj->ID?>&store=1">Process your saved opml</a> -->
	<?php endif; ?>
	
	<div class="overlay wrap">
	<span class="close">x</span>
	<div id="rss">
	<h2>Let's get some RSS data</h2>
	<!-- <a href="<?php echo home_url()?>/?bufferapp_upload=1&page_id=<?php echo $page_obj->ID?>&feedly=1">Connect to feedly</a><br />
	OR --> <br />
	<br />
	<form method="post"  enctype="multipart/form-data">
    <label>Enter RSS feed(s) (must include http://):</label><br />
	<textarea rows="4" cols="50" name="rss" value="">
	</textarea><br />
	<br />
	</div>
	
	<input type="hidden" name="bufferapp_upload" value="1"/>
	<input name="fmt" value="YMD" type="hidden">
	<!-- <select name="fmt">
	<option value="ymd">YMD</option>
	<option value="mdy">MDY</option>
	<option value="dmy">DMY</option>
	
	</select> -->
	<div id="csv">
	<h2>Upload your CSV</h2><br />
	<br />
	<div class="close">x</div>
	<input type="file" name="file"/><br />
	<br />
	</div>
	<input type="submit" value="Submit">
	</div>
	<?php $services=array('twitter'=>1,'facebook'=>1)?>
	<?php foreach($services as $s):?>
	<input type="hidden" name="aservice[<?php echo $s?>" value="1"/>
	<?php endforeach;?>
	</form>
	</div>
	
	
