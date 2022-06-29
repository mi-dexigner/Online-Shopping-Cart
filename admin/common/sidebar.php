  
 <input type="checkbox" id="nav-toggle">
 <div class="sidebar">
     <div class="sidebar-brand">
         <h2><span class="lab la-mix"></span> <span>MI Admin</span></h2>
     </div>

     <div class="sidebar-menu">
         <ul>
             <li class="active"><a href="<?php echo ADMIN_URL; ?>"><span class="las la-igloo"></span> <span>Dashboard</span></a>
             </li>
              <!-- active -->
             <li class="menu-dropdown"><a href="<?php echo ADMIN_URL; ?>edit"><span class="las la-thumbtack"></span> <span>Posts</span></a>
                <ul class="submenu">
                    <li><a href="<?php echo ADMIN_URL; ?>edit"><span>All Posts</span></a></li>
                    <li><a href="<?php echo ADMIN_URL; ?>post-new"><span>Add New</span></a></li>
                    <li><a href="<?php echo ADMIN_URL; ?>edit-tags?taxonomy=category"><span>Categories</span></a></li>
                    <li><a href="<?php echo ADMIN_URL; ?>edit-tags?taxonomy=post_tag"><span>Tags</span></a></li>
                </ul>
             </li>
             <li><a href="<?php echo ADMIN_URL; ?>"><span class="las la-photo-video"></span> <span>Media</span></a></li> 
             <li class="menu-dropdown"><a href="<?php echo ADMIN_URL; ?>edit?post_type=page"><span class="lar la-file"></span> <span>Pages</span></a>
                    <ul class="submenu">
                    <li><a href="<?php echo ADMIN_URL; ?>edit?post_type=page"><span>All Pages</span></a></li>
                    <li><a href="<?php echo ADMIN_URL; ?>post-new?post_type=page"><span>Add New</span></a></li>
                </ul>
             </li>
              <li><a href="<?php echo ADMIN_URL; ?>"><span class="las la-comment-alt"></span> <span>Comments</span></a></li> 
               <li><a href="<?php echo ADMIN_URL; ?>"><span class="lar la-envelope"></span> <span>Contact</span></a></li>
             <li class="menu-dropdown"><a href="<?php echo ADMIN_URL; ?>"><span class="las la-store-alt"></span> <span>Store</span></a>
 <ul class="submenu">
                    <li><a href="<?php echo ADMIN_URL; ?>"><span>Order</span></a></li>
                    <li><a href="<?php echo ADMIN_URL; ?>"><span>Report</span></a></li>
                    <li><a href="<?php echo ADMIN_URL; ?>"><span>Coupon</span></a></li>
                    <li><a href="<?php echo ADMIN_URL; ?>"><span>Customer</span></a></li>
                    <li><a href="<?php echo ADMIN_URL; ?>"><span>Payment</span></a></li>
                    <li><a href="<?php echo ADMIN_URL; ?>"><span>Settings</span></a></li>
                </ul>
             </li>
             <li class="menu-dropdown"><a href="<?php echo ADMIN_URL; ?>edit?post_type=product"><span class="las la-shopping-bag"></span> <span>Products</span></a>
 <ul class="submenu">
                    <li><a href="<?php echo ADMIN_URL; ?>edit?post_type=product"><span>All Products</span></a></li>
                    <li><a href="<?php echo ADMIN_URL; ?>post-new?post_type=product"><span>Add New</span></a></li>
                    <li><a href="<?php echo ADMIN_URL; ?>"><span>Categories</span></a></li>
                    <li><a href="<?php echo ADMIN_URL; ?>"><span>Tags</span></a></li>
                </ul>
             </li>
             <li class="menu-dropdown">
                <a href="<?php echo ADMIN_URL; ?>users"><span class="las la-user"></span> <span>Users</span></a>
 <ul class="submenu">
                    <li><a href="<?php echo ADMIN_URL; ?>users"><span>All Users</span></a></li>
                    <li><a href="<?php echo ADMIN_URL; ?>user-new"><span>Add New</span></a></li>
                    <li><a href="<?php echo ADMIN_URL; ?>profile"><span>Profile</span></a></li>
                    
                </ul>
             </li>
             <li class="menu-dropdown">
                <a href="<?php echo ADMIN_URL; ?>options-general"><span class="las la-cog"></span> <span>Settings</span></a></li>
         </ul>
     </div>
 </div> 