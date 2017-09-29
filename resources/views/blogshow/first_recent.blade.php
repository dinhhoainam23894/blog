
<div class="content-right col-md-3">
	<div class="widget search">
		<h2 class="title">Search Bar</h2>
		<div class="search-content">
			<div id="search-bar">
			<form action="/search" id="search-form" method="get">
			<input id="sq" name="q" placeholder="Search Here..." type="text" value="">
			<input id="searchsubmit" type="submit" value="">
			</form>
			<span class="search-form-icon"><span class="fa fa-search"></span></span>
			</div>
		</div>
		
	</div>	
	<div class="widget PopularPosts" data-version="1" id="PopularPosts1">
		<h2>Popular Posts</h2>
			<div class="widget-content popular-posts">
			<ul>
				@foreach($data as $key => $list)
				<li>
				<div class="item-content">
					<div class="item-thumbnail">
					<a href="" target="_blank">
					<img alt="" border="0" height="50px" src="{{ url("$list->image")}}" title="Companies Are Discovering That Pittsburgh Is Good for Business" width="50px">
					</a>
					</div>
					<div class="item-title"><a href="">{{ substr($list['title'],0,20) }}...</a></div>
					<div class="item-snippet">{{ substr($list['content'],0,50) }}...</div>
				</div>
				<div style="clear: both;"></div>
				</li>
				@endforeach
			</ul>
			</div>
	</div>
	<div class="widget Label" data-version="1" id="Label1">
		<h2>Categories</h2>
		<div class="widget-content cloud-label-widget-content">
		<span class="label-size label-size-4">
		<a dir="ltr" href="https://bayna-msdesignbd.blogspot.com/search/label/Content%20Marketing">Content Marketing</a>
		</span>
		<span class="label-size label-size-4">
		<a dir="ltr" href="https://bayna-msdesignbd.blogspot.com/search/label/Facebook">Facebook</a>
		</span>
		<span class="label-size label-size-3">
		<a dir="ltr" href="https://bayna-msdesignbd.blogspot.com/search/label/Featured">Featured</a>
		</span>
		<span class="label-size label-size-1">
		<a dir="ltr" href="https://bayna-msdesignbd.blogspot.com/search/label/Firefox">Firefox</a>
		</span>
		<span class="label-size label-size-2">
		<a dir="ltr" href="https://bayna-msdesignbd.blogspot.com/search/label/Google">Google</a>
		</span>
		<span class="label-size label-size-3">
		<a dir="ltr" href="https://bayna-msdesignbd.blogspot.com/search/label/Local%20Search">Local Search</a>
		</span>
		<span class="label-size label-size-2">
		<a dir="ltr" href="https://bayna-msdesignbd.blogspot.com/search/label/Mobile">Mobile</a>
		</span>
		<span class="label-size label-size-4">
		<a dir="ltr" href="https://bayna-msdesignbd.blogspot.com/search/label/News">News</a>
		</span>
		<span class="label-size label-size-5">
		<a dir="ltr" href="https://bayna-msdesignbd.blogspot.com/search/label/Related">Related</a>
		</span>
		<span class="label-size label-size-3">
		<a dir="ltr" href="https://bayna-msdesignbd.blogspot.com/search/label/Tips%20and%20Tricks">Tips and Tricks</a>
		</span>
		<span class="label-size label-size-4">
		<a dir="ltr" href="https://bayna-msdesignbd.blogspot.com/search/label/Tools%20%26%20Analytics">Tools &amp; Analytics</a>
		</span>
		<span class="label-size label-size-2">
		<a dir="ltr" href="https://bayna-msdesignbd.blogspot.com/search/label/Twitter">Twitter</a>
		</span>
		<div class="clear"></div>
		</div>
	</div>	
	<div class="widget HTML" data-version="1" id="HTML5">
		<div class="widget-content">
		<img alt="sidebar ad" border="0" src="{{url('images/sidebar-ad.jpg')}}" title="sidebar ad">
		</div>
		<div class="clear"></div>
		<span class="widget-item-control">
		<span class="item-control blog-admin">
		<a class="quickedit" href="//www.blogger.com/rearrange?blogID=6774780013543044182&amp;widgetType=HTML&amp;widgetId=HTML5&amp;action=editWidget&amp;sectionId=sidebarbtop" onclick="return _WidgetManager._PopupConfig(document.getElementById(&quot;HTML5&quot;));" target="configHTML5" title="Edit">
		</a>
		</span>
		</span>
		<div class="clear"></div>
	</div>
</div>



