<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar" style="height: auto;">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img alt="User Image" class="img-circle" src="{{ URL::asset('public/assets/dist/img/user2-160x160.jpg') }}">
      </div>
      <div class="pull-left info">
        <p>Admin</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      
      <li class="active treeview">
        <a href="{{ url('admin') }}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span> </i>
        </a>
          
      </li> 
      @if(str_contains(Auth::guard('admin')->user()->email,'admin'))
       
  <li class="treeview {{ (isset($page_action) && $page_title=='User')?"active":'' }} ">
        <a href="#">
          <i class="fa fa-user"></i>
          <span>Manage Users</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="{{ (isset($page_action) && $page_action=='Create User')?"active":'' }}" ><a href="{{ route('user.create')}}"><i class="fa fa-user-plus"></i> Create User</a></li>
           <li class="{{ (isset($page_action) && $page_action=='View User')?"active":'' }}"><a href="{{ route('user')}}"><i class="fa  fa-list"></i> View User</a></li>
        </ul>
      </li>
 
      
     
      
       <li class="treeview {{ (isset($page_action) && $page_title=='FreeTrial')?"active":'' }} ">
        <a href="#">
          <i class="fa fa-user"></i>
          <span>Manage FreeTrial</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a> 
        <ul class="treeview-menu">
           <li class="{{ (isset($page_action) && $page_action=='View FreeTrial ')?"active":'' }}"><a href="{{ url('admin/freeTrial')}}"><i class="fa  fa-list"></i> View FreeTrial</a></li>
        </ul>
      </li>  
      
       <li class="treeview {{ (isset($page_action) && $page_title=='Kyc')?"active":'' }} ">
        <a href="#">
          <i class="fa fa-user"></i>
          <span>Manage Kyc & Risk Profile</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a> 
        <ul class="treeview-menu">
           <li class="{{ (isset($page_action) && $page_action=='View Kyc')?"active":'' }}"><a href="{{ url('admin/kyc')}}"><i class="fa  fa-list"></i> View Kyc</a></li>
           <li class="{{ (isset($page_action) && $page_action=='View Risk Profile')?"active":'' }}"><a href="{{ url('admin/riskProfile')}}"><i class="fa  fa-list"></i> View Risk Profile</a></li>
        </ul>
      </li> 
      @endif
      @if(str_contains(Auth::guard('admin')->user()->email,'tracksheet') || str_contains(Auth::guard('admin')->user()->email,'admin'))
      
      
      <li class="treeview {{ (isset($page_action) && $page_title=='Track Sheet')?"active":'' }} ">
        <a href="#">
          <i class="fa fa-user"></i>
          <span>Manage Track Sheet </span>
          <i class="fa fa-angle-left pull-right"></i>
        </a> 
        <ul class="treeview-menu">
             <li class="{{ (isset($page_action) && $page_action=='Create Track Sheet')?"active":'' }}" ><a href="{{ route('trackSheet.create')}}"><i class="fa fa-user-plus"></i> Add Track Sheet</a></li>
          
           <li class="{{ (isset($page_action) && $page_action=='View Track Sheet')?"active":'' }}"><a href="{{ url('admin/trackSheet ')}}"><i class="fa  fa-list"></i> View Track Sheet </a></li>
        </ul>
      </li> 
      @endif


      @if(str_contains(Auth::guard('admin')->user()->email,'blog') || str_contains(Auth::guard('admin')->user()->email,'admin'))
      
       <li class="treeview {{ (isset($page_action) && $page_title=='Blog')?"active":'' }} ">
        <a href="#">
          <i class="fa fa-user"></i>
          <span>Manage Blog</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a> 
        <ul class="treeview-menu">
         <li class="{{ (isset($page_action) && $page_action=='Create Blog')?"active":'' }}" ><a href="{{ route('blog.create')}}"><i class="fa fa-user-plus"></i>Post Blog</a></li>
          <li class="{{ (isset($page_action) && $page_action=='View Blog')?"active":'' }}"><a href="{{ url('admin/blog')}}"><i class="fa  fa-list"></i> View Blog</a></li>
        </ul>
      </li>
      @endif
      
      @if(str_contains(Auth::guard('admin')->user()->email,'admin'))
      
       <li class="treeview {{ (isset($page_action) && $page_title=='Contact')?"active":'' }} ">
        <a href="#">
          <i class="fa fa-user"></i>
          <span>Manage Contact</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a> 
        <ul class="treeview-menu">
           <li class="{{ (isset($page_action) && $page_action=='View Contact')?"active":'' }}"><a href="{{ url('admin/contact')}}"><i class="fa  fa-list"></i> View Contact</a></li>
        </ul>
      </li>  
      
      
        
       <li class="treeview {{ (isset($page_action) && $page_title=='Faq')?"active":'' }} ">
        <a href="#">
          <i class="fa fa-user"></i>
          <span>Manage Faq</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a> 
        <ul class="treeview-menu">
         <li class="{{ (isset($page_action) && $page_action=='Create Faq')?"active":'' }}" ><a href="{{ route('faq.create')}}"><i class="fa fa-user-plus"></i> Create Faq</a></li>
          <li class="{{ (isset($page_action) && $page_action=='View Faq')?"active":'' }}"><a href="{{ url('admin/faq')}}"><i class="fa  fa-list"></i> View Faq</a></li>
        </ul>
      </li> 
      
        <li class="treeview {{ (isset($page_action) && $page_title=='Gallery')?"active":'' }} ">
        <a href="#">
          <i class="fa fa-user"></i>
          <span>Manage Gallery</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a> 
        <ul class="treeview-menu">
         <li class="{{ (isset($page_action) && $page_action=='Create Gallery')?"active":'' }}" ><a href="{{ route('gallery.create')}}"><i class="fa fa-user-plus"></i>Post Image</a></li>
          <li class="{{ (isset($page_action) && $page_action=='View Gallery')?"active":'' }}"><a href="{{ url('admin/gallery')}}"><i class="fa  fa-list"></i> View Gallery</a></li>
        </ul>
      </li> 
      
        
      
       <li class="treeview {{ (isset($page_action) && $page_title=='Career')?"active":'' }} ">
        <a href="#">
          <i class="fa fa-user"></i>
          <span>Manage Career</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a> 
        <ul class="treeview-menu">
         <li class="{{ (isset($page_action) && $page_action=='View Career')?"active":'' }}"><a href="{{ url('admin/career')}}"><i class="fa  fa-list"></i> View Career</a></li>
        </ul>
      </li> 

 
      @endif
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
 
