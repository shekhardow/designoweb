<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
<div id="m_aside_left" class="m-grid__item  m-aside-left  m-aside-left--skin-dark ">
   <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
      <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
         <li class="m-menu__item <?php if($title == 'Dashboard'){ echo 'm-menu__item--expanded'; } ?>" aria-haspopup="true">
            <a href="{{url('admin/dashboard')}}" class="m-menu__link"><i class="m-menu__link-icon fas fa-chart-line"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Dashboard</span><span class="m-menu__link-badge"></span> </span></span></a>
         </li>
         <li class="m-menu__section ">
            <h4 class="m-menu__section-text">Components</h4>
            <i class="m-menu__section-icon flaticon-more-v2"></i>
            <!-- <li class="m-menu__item <?php //if ($title == 'Users'||$title == 'View Users') {echo 'm-menu__item--expanded';} ?>" aria-haspopup="true">
               <a href="{{url('admin/users')}}" class="m-menu__link">
                  <i class="m-menu__link-icon fa flaticon-users-1"></i>
                  <span class="m-menu__link-title"> <span class="m-menu__link-wrap"> 
                     <span class="m-menu__link-text">Users</span><span class="m-menu__link-badge"></span> </span>
                  </span>
               </a>
            </li> -->
            <li class="m-menu__item <?php if($title == 'Blogs'||$title == 'Add Blog'||$title == 'Edit Blog'){ echo 'm-menu__item--expanded'; } ?>" aria-haspopup="true">
               <a href="{{url('admin/blogs')}}" class="m-menu__link">
                  <i class="m-menu__link-icon fab fa-blogger"></i>
                  <span class="m-menu__link-title"> <span class="m-menu__link-wrap"> 
                     <span class="m-menu__link-text">Blogs</span><span class="m-menu__link-badge"></span> </span>
                  </span>
               </a>
            </li>
            <li class="m-menu__item <?php if($title == 'Press Release'||$title == 'Add Press Release'||$title == 'Edit Press Release'){ echo 'm-menu__item--expanded'; } ?>" aria-haspopup="true">
               <a href="{{url('admin/press_release')}}" class="m-menu__link">
                  <i class="m-menu__link-icon fas fa-newspaper"></i>
                  <span class="m-menu__link-title"> <span class="m-menu__link-wrap"> 
                     <span class="m-menu__link-text">Press Release</span><span class="m-menu__link-badge"></span> </span>
                  </span>
               </a>
            </li>
            <li class="m-menu__item <?php if($title == 'Case Studies'||$title == 'Add Case Studies'||$title == 'Edit Case Studies'||$title == 'View Case Studies'){ echo 'm-menu__item--expanded'; } ?>" aria-haspopup="true">
               <a href="{{url('admin/case_studies')}}" class="m-menu__link">
                  <i class="m-menu__link-icon fas fa-info-circle"></i>
                  <span class="m-menu__link-title"> <span class="m-menu__link-wrap"> 
                     <span class="m-menu__link-text">Case Studies</span><span class="m-menu__link-badge"></span> </span>
                  </span>
               </a>
            </li>
            <li class="m-menu__item <?php if($title == 'Portfolio'||$title == 'Add Project'||$title == 'Edit Project'){ echo 'm-menu__item--expanded'; } ?>" aria-haspopup="true">
               <a href="{{url('admin/portfolio')}}" class="m-menu__link">
                  <i class="m-menu__link-icon fas fa-portrait"></i>
                  <span class="m-menu__link-title"> <span class="m-menu__link-wrap"> 
                     <span class="m-menu__link-text">Portfolio</span><span class="m-menu__link-badge"></span> </span>
                  </span>
               </a>
            </li>
            <li class="m-menu__item <?php if($title == 'Testimonials'||$title == 'Add Testimonial'||$title == 'Edit Testimonial'||$title == 'View Testimonial'){ echo 'm-menu__item--expanded'; } ?>" aria-haspopup="true">
               <a href="{{url('admin/testimonials')}}" class="m-menu__link">
                  <i class="m-menu__link-icon fas fa-comments"></i>
                  <span class="m-menu__link-title"> <span class="m-menu__link-wrap"> 
                     <span class="m-menu__link-text">Testimonials</span><span class="m-menu__link-badge"></span> </span>
                  </span>
               </a>
            </li>
            {{-- <li class="m-menu__item <?php //if($title == 'About Us'){ echo 'm-menu__item--expanded'; } ?>" aria-haspopup="true">
               <a href="{{url('admin/about')}}" class="m-menu__link">
                  <i class="m-menu__link-icon flaticon-information"></i>
                  <span class="m-menu__link-title"> <span class="m-menu__link-wrap"> 
                     <span class="m-menu__link-text">About Us</span><span class="m-menu__link-badge"></span> </span>
                  </span>
               </a>
            </li> --}}
            <li class="m-menu__item <?php if($title == 'Social'){ echo 'm-menu__item--expanded'; } ?>" aria-haspopup="true">
               <a href="{{url('admin/social')}}" class="m-menu__link">
                  <i class="m-menu__link-icon fa fa-share-alt"></i>
                  <span class="m-menu__link-title"> 
                     <span class="m-menu__link-wrap">
                        <span class="m-menu__link-text">Social</span>
                     </span>
                  </span>
               </a>
            </li>
         </li>
      </ul>
   </div>
</div>