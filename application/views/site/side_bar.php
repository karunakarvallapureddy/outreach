<div id="secondary" class="widget-area" role="complementary">
						<aside id="recent-posts-2" class="blog-widget widget widget_recent_entries">

						<h1 class="widget-title links-head "><span class="htitle">Useful Links</span></h1>

						<ul>

							<li><a href="<?php echo base_url();?>">Home</a></li>
<?php foreach($cms_titles as $values){?>
<li ><a data-target="#" href="<?php echo base_url()."Cms/".str_replace(" ","-",str_replace("-","_",$values['title']));?>"><?php echo $values['title'];?></a></li>
<?php } ?>
						</ul>

						</aside>

						

						<aside id="categories-3" class="blog-widget widget widget_categories">

						<h1 class="widget-title links-head2"><span class="htitle">Latest News</span></h1>

						<ul>
<?php if($latest_news){

foreach($latest_news as $news){
?>
<li><?php echo substr($news['title'],0,27)."...";?></li>
<?php 
}} else{?>
<li>No Latest News.</li>
<?php }?>
						
						</ul>

						</aside>

					</div>