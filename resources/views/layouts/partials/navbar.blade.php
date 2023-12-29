<aside class="left-sidebar">
    <div>
      <div
        class="brand-logo d-flex align-items-center justify-content-between"
      >
        <a href="{{ route('dashboard') }}" class="text-nowrap logo-img">
          <img
            src="{{ asset('/assets/images/logos/logo.png') }}"
            width="180"
            alt=""
          />
        </a>
        <div
          class="close-btn d-xl-none d-block sidebartoggler cursor-pointer"
          id="sidebarCollapse"
        >
          <i class="ti ti-x fs-8"></i>
        </div>
      </div>
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link"
              href="{{ route('dashboard') }}"
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Dashboard</span>
            </a>
          </li>
          {{-- Tille --}}
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Product</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" 
            href="{{ route('category') }}" 
            aria-expanded="false">
              <span>
                <i class="ti ti-alert-circle"></i>
              </span>
              <span class="hide-menu">Danh mục</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" 
            {{-- href="{{ route('admin.product.index') }}"  --}}
            aria-expanded="false">
              <span>
                <i class="ti ti-article"></i>
              </span>
              <span class="hide-menu">Sản phẩm</span>
            </a>
          </li>
          
          <li class="sidebar-item">
            <a
              class="sidebar-link"
              {{-- href="{{ route('admin.size.index') }}" --}}
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-cards"></i>
              </span>
              <span class="hide-menu">Size</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link"
              {{-- href="{{ route('admin.color.index') }}" --}}
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-aperture"></i>
              </span>
              <span class="hide-menu">Màu sắc</span>
            </a>
          </li>
          
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">User</span>
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link"
              {{-- href="{{ route('admin.user.index') }}" --}}
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-user"></i>
              </span>
              <span class="hide-menu">Thành viên</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link"
              {{-- href="{{ route('admin.role.index') }}" --}}
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-key"></i>
              </span>
              <span class="hide-menu">Quyền</span>
            </a>
          </li>
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Order</span>
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link"
              {{-- href="{{ route('admin.order.index') }}" --}}
              aria-expanded="false"
            >
              <span>
                <i class="ti ti-list"></i>
              </span>
              <span class="hide-menu">Các đơn hàng</span>
            </a>
          </li>
          
        </ul>
        
      </nav>
    </div>
  </aside>