<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <span class="text-primary">
                    <img src="{{url('/backend/img')}}/logo_1.png" width="50" height="50"/>
                </span>
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2">Swaj</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="bx bx-chevron-left d-block d-xl-none align-middle"></i>
            </a>
          </div>

          <div class="menu-divider mt-0"></div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner">
            
            <li class="menu-item active open">
              <a
                href="{{url('swaj/dashboard')}}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-home-smile"></i>
              
                <div class="text-truncate" data-i18n="Dashboard">Dashboard</div>
              </a>
            </li>

          </ul>
          
          <ul class="menu-inner">
           <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div class="text-truncate">Master</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{url('/swaj/size')}}" class="menu-link">
                    <div class="text-truncate" data-i18n="Size">Size</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{url('/swaj/category')}}" class="menu-link">
                    <div class="text-truncate" data-i18n="Category">Category</div>
                  </a>
                </li>
                 <li class="menu-item">
                  <a href="{{url('/swaj/color')}}" class="menu-link">
                    <div class="text-truncate" data-i18n="Category">Color</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-fluid.html" class="menu-link">
                    <div class="text-truncate" data-i18n="Banner">Banner</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div class="text-truncate" data-i18n="Container">Coupon</div>
                  </a>
                </li>
                
              </ul>
            </li>
 
            <li class="menu-item">
              <a
                href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-email.html"
                target="_blank"
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-envelope"></i>
                <div class="text-truncate" data-i18n="Email">Product</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-email.html"
                target="_blank"
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-envelope"></i>
                <div class="text-truncate">Order</div>
              </a>
            </li>

          </ul>
          
        </aside>