            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                  <h3>Dashboard</h3>
                  <ul class="nav side-menu">
                    <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Home </a>
                    </li>
                    <!-- <li><a><i class="fa fa-edit"></i> Post (Artikel) <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{route('post.index')}}">Artikel</a></li>
                        <li><a href="{{route('post.tampil_hapus')}}">sampah</a></li>
                      </ul>
                    </li>
                    <li><a href="{{route('category.index')}}"><i class="fa fa-tags"></i> Kategori Post </a>
                    <li><a href="{{route('tag.index')}}"><i class="fa fa-list"></i> Tag Post </a> -->
                    <li><a><i class="fa fa-shopping-bag"></i> Produk <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{route('produk.index')}}">Produk Detail</a></li>
                        <li><a href="{{route('kategori-produk.index')}}">Produk Kategori</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <div class="menu_section">
                </div>
  
              </div>
              <!-- /sidebar menu -->