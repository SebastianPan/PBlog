<!-- SIDEBAR -->
		<div class="sidebar">

			<div class="sidebarBox">
				<form role="search" id="sidebarSearchForm" method="get" action="<?php bloginfo('url'); ?>">
					<input class="form-control" name="s" value="Ara.." onfocus="if(this.value=='Ara..'){ this.value = '' }" onblur="if(this.value==''){ this.value = 'Ara..' }" type="text" name="search">
					<i class="fa fa-search input-icon-search"></i>
				</form>
			</div>

			<div class="sidebarBox">
				<div class="title">Menü</div>
				<ul>
					<li><a href="<?php bloginfo('url'); ?>">Anasayfa</a></li>
					<?php wp_list_pages('title_li=&'); ?>
				</ul>
			</div>
			
			<?php dynamic_sidebar(1,'sidebar'); ?>

		</div>
<!-- SIDEBAR /end -->