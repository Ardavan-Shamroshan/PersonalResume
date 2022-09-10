<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="{{ asset('admin-assets/images/logo.svg') }}" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{ asset('admin-assets/images/logo-mini.svg') }}" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="{{ auth()->user()->photo == null ? asset('admin-assets/images/faces/face15.jpg') : asset(auth()->user()->photo) }}" alt="">
              <span class="count p-1 bg-success" wire:offline.class="bg-danger"></span>

            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal" wire:offline.class="d-none">{{ auth()->user()->name }}</h5>
              <span class="d-none" wire:offline.class.remove="d-none"><i class="fa fa-wifi"></i> connection lost...!</span>
            </div>
          </div>

      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items {{ active('admin.dashboard') }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">dashboard</span>
        </a>
      </li>
      <li class="nav-item menu-items {{ active('admin.author') }}">
        <a class="nav-link" href="{{ route('admin.author') }}" >
          <span class="menu-icon">
            <i class="mdi mdi-account"></i>
          </span>
          <span class="menu-title">authors</span>
        </a>
      </li>
      <li class="nav-item menu-items {{ active('admin.category') }}">
        <a class="nav-link" href="{{  route('admin.category') }}">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">categories</span>
        </a>
      </li>
      <li class="nav-item menu-items {{ active('admin.post') }}">
        <a class="nav-link" href="{{ route('admin.post') }}">
          <span class="menu-icon">
            <i class="mdi mdi-newspaper"></i>
          </span>
          <span class="menu-title">posts</span>
        </a>
      </li> <li class="nav-item menu-items {{ active('admin.skill') }}">
        <a class="nav-link" href="{{ route('admin.skill') }}">
          <span class="menu-icon">
            <i class="mdi mdi-bike"></i>
          </span>
          <span class="menu-title">skills</span>
        </a>
      </li>
      <li class="nav-item menu-items {{ active('admin.project') }}">
        <a class="nav-link" href="{{ route('admin.project') }}">
          <span class="menu-icon">
            <i class="mdi mdi-web"></i>
          </span>
          <span class="menu-title">sample and projects</span>
        </a>
      </li>

      <li class="nav-item menu-items {{ active('admin.experience') }}">
        <a class="nav-link" href="{{ route('admin.experience') }}">
          <span class="menu-icon">
            <i class="mdi mdi-chart-bar"></i>
          </span>
          <span class="menu-title">expreiences</span>
        </a>
      </li>

      <li class="nav-item menu-items {{ active('admin.user') }}">
        <a class="nav-link" href="{{ route('admin.user') }}">
          <span class="menu-icon">
            <i class="mdi mdi-account-group"></i>
          </span>
          <span class="menu-title">uesrs</span>
        </a>
      </li>
      <li class="nav-item menu-items {{ active('admin.setting') }}">
        <a class="nav-link" href="{{ route('admin.setting') }}">
          <span class="menu-icon">
            <i class="mdi mdi-settings-outline"></i>
          </span>
          <span class="menu-title">setting</span>
        </a>
      </li>
    </ul>
  </nav>
