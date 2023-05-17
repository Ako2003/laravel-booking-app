<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('admin/dashboard') }}">
                <div class="sidebar-brand-icon mx-3">{{ __('Legacy Randevu') }}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item {{ request()->is('admin/dashboard') || request()->is('admin/dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{ __('İdarə Paneli') }}</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            {{-- <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <span>{{ __('User Management') }}</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}" href="{{ route('admin.permissions.index') }}"> <i class="fa fa-briefcase mr-2"></i> {{ __('Permissions') }}</a>
                        <a class="collapse-item {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}" href="{{ route('admin.roles.index') }}"><i class="fa fa-briefcase mr-2"></i> {{ __('Roles') }}</a>
                        <a class="collapse-item {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}" href="{{ route('admin.users.index') }}"> <i class="fa fa-user mr-2"></i> {{ __('Users') }}</a>
                    </div>
                </div>
            </li> --}}

            {{-- <li class="nav-item {{ request()->is('admin/rooms') || request()->is('admin/rooms/*') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('admin.rooms.index')}}">
                    <span>{{ __('Otaq') }}</span>
                </a>
                <div id="collapseRoom" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->is('admin/countries') || request()->is('admin/countries/*') ? 'active' : '' }}" href="{{ route('admin.countries.index') }}"> <i class="fa fa-briefcase mr-2"></i> {{ __('country') }}</a>
                        <a class="collapse-item {{ request()->is('admin/categories') || request()->is('admin/categories/*') ? 'active' : '' }}" href="{{ route('admin.categories.index') }}"> <i class="fa fa-user mr-2"></i> {{ __('category') }}</a>
                        <a class="collapse-item {{ request()->is('admin/rooms') || request()->is('admin/rooms/*') ? 'active' : '' }}" href="{{ route('admin.rooms.index') }}"><i class="fa fa-briefcase mr-2"></i> {{ __('room') }}</a>
                    </div>
                </div>
            </li> --}}

            <li class="nav-item {{ request()->is('admin/doctors') || request()->is('admin/doctors/*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.doctors.index') }}">
                    <i class="fas fa-user-md"></i>
                    <span>{{ __('Doctors') }}</span>
                </a>
            </li>

            <li class="nav-item {{ request()->is('admin/bookings') || request()->is('admin/bookings/*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.bookings.index') }}">
                    <i class="fa fa-briefcase mr-2"></i>
                    <span>{{ __('Randevu') }}</span>
                </a>
            </li>

            <li class="nav-item {{ request()->is('admin/rooms') || request()->is('admin/rooms/*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.rooms.index') }}">
                    <i class="fas fa-hotel"></i>
                    <span>{{ __('Otaq') }}</span>
                </a>
            </li>

            <li class="nav-item {{ request()->is('admin/find_rooms') || request()->is('admin/find_rooms/*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.find_rooms.index') }}">
                    <i class="fa fa-search mr-2"></i>
                    <span>{{ __('Axtarış') }}</span>
                </a>
            </li>


            {{-- <div id="collapseBooking" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item {{ request()->is('admin/bookings') || request()->is('admin/bookings/*') ? 'active' : '' }}" href="{{ route('admin.bookings.index') }}"><i class="fa fa-briefcase mr-2"></i> {{ __('booking') }}</a>
                    <a class="collapse-item {{ request()->is('admin/find_rooms') || request()->is('admin/find_rooms/*') ? 'active' : '' }}" href="{{ route('admin.find_rooms.index') }}"> <i class="fa fa-user mr-2"></i> {{ __('find room') }}</a>
                </div>
            </div> --}}

            <!-- Nav Item  -->
            <li class="nav-item {{ request()->is('admin/system_calendars') || request()->is('admin/system_calendars') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.system_calendars.index') }}">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>{{ __('Kalendar') }}</span></a>
            </li>


        </ul>
