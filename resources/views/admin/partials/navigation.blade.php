
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <!-- <img src="{!! asset('admin/dist/img/user2-160x160.jpg') !!}" class="img-circle" alt="User Image"> -->
          @if(Auth::user()->image)
             <img src="{!!  asset('public/uploads/users/thumbnail_image/'. Auth::user()->image) !!}" class="img-circle" alt="User Image">
          @else
             <img src="{!!  asset('public/uploads/admin/dist/img/user2-160x160.jpg') !!}" class="img-circle" alt="User Image">
          @endif
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->first_name}} {{ Auth::user()->last_name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
      
      <!-- <li class="header">MAIN NAVIGATION</li> -->
      

      <li class="treeview {{ ( !empty($slug2) && ( $slug2 == 'users') )? 'active' : '' }}">
        <a href="javascript:void(0);">
          <i class="fa fa-home"></i>
          <span>User Management</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ ( !empty($slug3) && ( $slug3 == 'freelancers' )  )? 'active' : '' }}">
            <a href="{{ route('admin.freelancers') }}"><i class="fa fa-user-md"></i> Freelancers</a>
          </li>
          <li class="{{ ( !empty($slug3) && ( $slug3 == 'customers' )  ) ? 'active' : '' }}">
            <a href="{{ route('admin.customers') }}"><i class="fa fa-wheelchair"></i> Customers</a>
          </li>
        </ul>
      </li> 

      <li class="treeview {{ ( !empty($slug2) && ( $slug2 == 'category') )? 'active' : '' }}">
        <a href="javascript:void(0);">
          <i class="fa fa-home"></i>
          <span>Category Management</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ ( !empty($slug3) && ( $slug3 == 'categories' )  )? 'active' : '' }}">
            <a href="{{ route('admin.categories') }}"><i class="fa fa-user-md"></i> Category</a>
          </li>
          <li class="{{ ( !empty($slug3) && ( $slug3 == 'sub-categories' )  ) ? 'active' : '' }}">
            <a href="{{ route('admin.sub_categories') }}"><i class="fa fa-wheelchair"></i> Sub-Category</a>
          </li>
        </ul>
      </li> 

       <li class="treeview {{ ( !empty($slug2) && ( $slug2 == 'order') )? 'active' : '' }}">
        <a href="javascript:void(0);">
          <i class="fa fa-home"></i>
          <span>Order Management</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ ( !empty($slug3) && ( $slug3 == 'order' )  )? 'active' : '' }}">
            <a href="{{ route('admin.today_order') }}"><i class="fa fa-user-md"></i> Today's Order</a>
          </li>
          <li class="{{ ( !empty($slug3) && ( $slug3 == 'sub-categories' )  ) ? 'active' : '' }}">
            <a href="{{ route('admin.past_order') }}"><i class="fa fa-wheelchair"></i> Past Order</a>
          </li>
        </ul>
      </li> 

      <li class="{{ ( !empty($slug2) && ( $slug2 == 'plans' ) )? 'active' : '' }}">
        <a href="{{ route('admin.plan') }}">
          <i class="fa fa-bookmark"></i> <span>Subscription Plan</span>
        </a>
      </li>

      <li class="{{ ( !empty($slug2) && ( $slug2 == 'vendor-subscription' ) )? 'active' : '' }}">
        <a href="{{ route('admin.vendor_subscription') }}">
          <i class="fa fa-bookmark"></i> <span>Vendor Subscription</span>
        </a>
      </li>

      <li class="{{ ( !empty($slug2) && ( $slug2 == 'email-templates' ) )? 'active' : '' }}">
        <a href="{{ route('admin.email_templates') }}">
          <i class="fa fa-envelope"></i> <span>Email Templates</span>
        </a>
      </li>
      <li class="{{ ( !empty($slug2) && ( $slug2 == 'pages' ) )? 'active' : '' }}">
        <a href="{{ route('admin.pages') }}">
          <i class="fa fa-bookmark"></i> <span>Static Pages</span>
        </a>
      </li>
      <li class="{{ ( !empty($slug2) && ( $slug2 == 'global-settings' ) )? 'active' : '' }}">
        <a href="{{ route('admin.global_settings') }}">
          <i class="fa fa-gear"></i> <span>Global Settings</span>
        </a>
      </li>
      <li class="{{ ( !empty($slug2) && ( $slug2 == 'enquiry' ) )? 'active' : '' }}">
        <a href="{{ route('admin.enquiry') }}">
          <i class="fa fa-bookmark"></i> <span>Enquiry</span>
        </a>
      </li>
    </ul>
    </section>
    <!-- /.sidebar -->
  </aside>