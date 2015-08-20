<section id="page">
<!-- SIDEBAR -->
				<div id="sidebar" class="sidebar">
					<div class="sidebar-menu nav-collapse">
						<!--<div class="divide-20"></div>-->
						<!-- SEARCH BAR -->
							<!--<div id="search-bar">
							<input class="search" type="text" placeholder="Search"><i class="fa fa-search search-icon"></i>
						</div>-->
						<!-- /SEARCH BAR -->
						
						<!-- SIDEBAR QUICK-LAUNCH -->
						<!-- <div id="quicklaunch">
						<!-- /SIDEBAR QUICK-LAUNCH -->
						
						<!-- SIDEBAR MENU -->
						<ul>
							<li class="<?php if($menu && $menu == "dashboard"){ echo "active";} ?>">
								<a href="<?php echo base_url('home/dashboard');?>">
								<i class="fa fa-tachometer fa-fw"></i> <span class="menu-text">Dashboard</span>
								<span class="selected"></span>
								</a>		 			
							</li>

							<li class="has-sub <?php if($menu && $menu == "category"){ echo "active";} ?>">
								<a href="javascript:;" class="">
								<i class="fa fa-bookmark"></i> <span class="menu-text">Category</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub">
									<li><a class="" href="<?php echo base_url('category');?>"><span class="sub-menu-text">Category</span></a></li>
									<li><a class="" href="<?php echo base_url('category/subCategory');?>"><span class="sub-menu-text">Sub Category</span></a></li>
								</ul>
							</li>
							<li class="<?php if($menu && $menu == "stores"){ echo "active";} ?>">
								<a href="<?php echo base_url('store');?>">
								<i class="fa fa-archive fa-fw"></i> <span class="menu-text">Business</span>
								<span class="selected"></span>
								</a>					
							</li>
							<li class="<?php if($menu && $menu == "vouchers"){ echo "active";} ?>">
								<a href="<?php echo base_url('vouchers');?>">
								<i class="fa fa-tag"></i> <span class="menu-text">Vouchers</span>
								<span class="selected"></span>
								</a>					
							</li> 
							<li class="<?php if($menu && $menu == "sales"){ echo "active";} ?>">
								<a href="<?php echo base_url('sales');?>">
								<i class="fa fa-tag"></i> <span class="menu-text">Sales</span>
								<span class="selected"></span>
								</a>					
							</li>

							<li class="has-sub <?php if($menu && $menu == "redemptions"){ echo "active";} ?>">
								<a href="javascript:;" class="">
								<i class="fa fa-tag"></i> <span class="menu-text">Redemptions</span>
								<span class="arrow"></span>
								</a>	
								<ul class="sub">
									<li><a class="" href="<?php echo base_url('redemptions');?>"><span class="sub-menu-text">Redemptions</span></a></li>
									<li><a class="" href="<?php echo base_url('redemptions/redemptionsHistory');?>"><span class="sub-menu-text">Redemptions History </span></a></li>
								</ul>
							</li>
							
							<li class="<?php if($menu && $menu == "template"){ echo "active";} ?>">
								<a href="<?php echo base_url('template');?>">
								<i class="fa fa-keyboard-o"></i> <span class="menu-text">Template</span>
								<span class="selected"></span>
								</a>					
							</li>
							<li class="<?php if($menu && $menu == "staff"){ echo "active";} ?>">
								<a href="<?php echo base_url('home/staff');?>">
								<i class="fa fa-users"></i> <span class="menu-text">Staff</span>
								<span class="selected"></span>
								</a>					
							</li>
							<li class="has-sub <?php if($menu && $menu == "support"){ echo "active";} ?>">
								<a href="javascript:;" class="">
								<i class="fa fa-inbox"></i> <span class="menu-text">Support</span>
								<span class="arrow"></span>
								</a>
								<ul class="sub">
									<li><a class="" href="<?php echo base_url('support/inbox');?>"><span class="sub-menu-text">Inbox</span></a></li>
									<li><a class="" href="<?php echo base_url('support/sent');?>"><span class="sub-menu-text">Sent Items</span></a></li>
									<li><a class="" href="<?php echo base_url('support/compose');?>"><span class="sub-menu-text">Compose</span></a></li>
								</ul>
							</li>
							<li class="<?php if($menu && $menu == "notification"){ echo "active";} ?>">
								<a href="<?php echo base_url('notifications');?>">
								<i class="fa fa-bell"></i> <span class="menu-text"> Notification </span>
								<span class="selected"></span>
								</a>					
							</li>
							<li class="<?php if($menu && $menu == "accounts"){ echo "active";} ?>">
								<a href="<?php echo base_url('accounts');?>">
								<i class="fa fa-credit-card"></i> <span class="menu-text"> Accounts </span>
								<span class="selected"></span>
								</a>					
							</li>
							<li class="<?php if($menu && $menu == "page"){ echo "active";} ?>">
								<a href="<?php echo base_url('page');?>">
								<i class="fa fa-table"></i> <span class="menu-text"> CMS </span>
								<span class="selected"></span>
								</a>					
							</li>
							<li class="has-sub <?php if($menu && $menu == "locationSettings"){ echo "active";} ?>">
								<a href="javascript:;" class="">
								<i class="fa fa-map-marker fa-fw"></i> <span class="menu-text">Location Settings</span>
								<span class="arrow"></span>
								</a>	
								<ul class="sub">
									<li><a class="" href="<?php echo base_url('locationSettings/countryList');?>"><span class="sub-menu-text">Country</span></a></li>
									<li><a class="" href="<?php echo base_url('locationSettings/stateList');?>"><span class="sub-menu-text">State </span></a></li>
									<li><a class="" href="<?php echo base_url('locationSettings/cityList');?>"><span class="sub-menu-text">City </span></a></li>
								</ul>
							</li>
							<li class="<?php if($menu && $menu == "System Settings"){ echo "active";} ?>">
								<a href="<?php echo base_url('systemSettings');?>">
								<i class="fa fa-gears"></i> <span class="menu-text"> System Settings </span>
								<span class="selected"></span>
								</a>					
							</li>
							
						</ul>
						<!-- /SIDEBAR MENU -->
					</div>
				</div>
				<!-- /SIDEBAR -->