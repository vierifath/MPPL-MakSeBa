<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('/adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-3">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                              with font-awesome or any other icon font library -->
                    <h2 class="text-center font-weight-bold mb-4"><span style="color:red;">MakSeBa</span></h2>


                </ul>


                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                          with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fa fa-handshake"></i>
                            <p>
                                List
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            @role('admin')
                            <li class="nav-item">
                                <a href="{{route ('admins.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Cuisines</p>
                                </a>
                            </li>
                            @endrole
                            @role('video-creator')
                            <li class="nav-item">
                                <a href="{{route ('videos.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Videos</p>
                                </a>
                            </li>
                            @endrole

                            <!-- <li class="nav-item">
                                <a href="{{route ('categories.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Categories</p>
                                </a>
                            </li> -->

                        </ul>
                    </li>
                </ul>




            </nav>
        </div>
    </aside>
</aside>