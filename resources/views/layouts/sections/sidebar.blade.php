<div id="sidebar" class="">

  <a id="sidebar-logo-link" class="logo-link" href="{{ url('dashboard') }}">
    <img id="sidebar-logo" class="logo" src="{{ asset('images/sit-logo-white.webp') }}" alt="">
  </a><!-- /.logo -->

  

  <div id="nav-wrap">
    <ul id="side-nav">
      
      <li class="nav-item">
        <a class="nav-item-link" href="/dashboard" data-bs-toggle="tooltip" data-bs-title="Dashboard" data-bs-placement="right">
          <i class="nav-item-icon fa-solid fa-gauge-high"></i>
          <span class="nav-item-label">Dashboard</span>
        </a>
      </li>

    
      <li class="nav-item dropdown" data-bs-theme="dark">
        <a class="nav-item-link dropdown-toggle" href="#" data-bs-toggle="dropdown" role="button">
          <i class="nav-item-icon fa-solid fa-user"></i>
          <span class="nav-item-label">Users</span>
        </a>

        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/users">Users</a></li>
          <li><a class="dropdown-item" href="/roles">Role Permission</a></li>          
        </ul>
      </li><!--/.nav-item-->
        
      <li class="nav-item">
        <a class="nav-item-link" href="/clients" data-bs-toggle="tooltip" data-bs-title="Clients" data-bs-placement="right">
          <i class="nav-item-icon fa-solid fa-sitemap"></i>
          <span class="nav-item-label">Clients</span>
        </a>
      </li>
      
    </ul><!--/#side-nav-->
  </div><!-- /nav-wrap -->  

  <div id="side-bot-btns">
    <livewire:toggle-theme />

    <a href="#" id="toggle-side" class="side-bot-btn" data-bs-toggle="tooltip" data-bs-title="Toggle Expand/Collapse Sidebar" data-bs-placement="right">
      <i class=" fa-solid fa-angles-right"></i>
    </a><!-- /.collapse-expand -->
  </div><!-- /#side-bot-btns -->

</div><!-- /#sidebar -->