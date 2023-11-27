<div id="sidebar" class="sidebar responsive ace-save-state">
    <ul class="nav nav-list">
        <li class="active">
            <a href="{{url('/admin')}}">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
            </a>

            <b class="arrow"></b>
        </li>
        <li>
            <a href="{{route('organization.list.get')}}">
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text"> Organization Lists </span>
            </a>

            <b class="arrow"></b>
        </li>
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text">
                    Menu Entry
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{{route('menu.index')}}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Main Menu
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="{{route('sub-menu-one.index')}}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Sub-Menu-Label-1
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="{{route('sub-menu-two.index')}}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Sub-Menu-Label-2
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="{{route('sub-menu-three.index')}}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Sub-Menu-Label-3
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>