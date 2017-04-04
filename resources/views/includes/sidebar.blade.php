<ul class="sidebar-menu">

        <li class="treeview" >
            <a href="#">
                <i class="fa fa-folder"></i>
                <span>Pengumuman</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('announcement.index') }}">
                        <i class="fa fa-angle-double-right"></i>
                        Manage
                    </a>
                </li>
            </ul>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('announcement.create') }}">
                        <i class="fa fa-angle-double-right"></i>
                        Create
                    </a>
                </li>
            </ul>
        </li>

        <li class="treeview" >
            <a href="#">
                <i class="fa fa-folder"></i>
                <span>Verifikasi</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ URL::to('users') }}">
                        <i class="fa fa-angle-double-right"></i>
                        Daftar Pengguna
                    </a>
                </li>

                <li>
                    <a href="{{ URL::to('verification') }}">
                        <i class="fa fa-angle-double-right"></i>
                        Pengguna Terverifikasi
                    </a>
                </li>

                <li>
                    <a href="{{ URL::to('verification/go') }}">
                        <i class="fa fa-angle-double-right"></i>
                        Verifikasi Pengguna (KTP)
                    </a>
                </li>
            </ul>
        </li>

        <li class="treeview" >
            <a href="#">
                <i class="fa fa-folder"></i>
                <span>User Reports</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ URL::to('user') }}">
                        <i class="fa fa-angle-double-right"></i>
                        Manage
                    </a>
                </li>
            </ul>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ URL::to('user/create') }}">
                        <i class="fa fa-angle-double-right"></i>
                        Create
                    </a>
                </li>
            </ul>
        </li>

    <li class="treeview" >
        <a href="#">
            <i class="fa fa-folder"></i>
            <span>Kupon</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="{{ URL::to('coupon/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Tambah Kupon
                </a>
            </li>
        </ul>
        <ul class="treeview-menu">
            <li>
                <a href="{{ URL::to('coupon') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Manajemen Kupon
                </a>
            </li>
        </ul>

        <ul class="treeview-menu">
            <li>
                <a href="{{ URL::to('coupon-usages') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Penggunaan Kupon
                </a>
            </li>
        </ul>
    </li>

</ul>
