@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

            <li>
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>
             <li>
                <router-link :to="{ name: 'group.index' }">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('quickadmin.group.title')</span>
                </router-link>
            </li>
              <li>
                <router-link :to="{ name: 'user-file.index' }">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('quickadmin.user-file.title')</span>
                </router-link>
            </li>
              <li>
                <router-link :to="{ name: 'upload.index' }">
                    <i class="fa fa-gears"></i>
                    <span class="title">@lang('quickadmin.upload.title')</span>
                </router-link>
            </li>
            <li>
                <router-link :to="{ name: 'auth.change_password' }">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </router-link>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>

