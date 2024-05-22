<div class="header">
    <div class="header-left">
        <div class="menu-icon bi bi-list"></div>
        <div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>

    </div>
    <div class="header-right">
        <div class="dashboard-setting user-notification">
            <div class="dropdown">
                <a class="dropdown-toggle no-arrow" href="{{ route('admin.officeSetting.index') }}"
                    data-toggle="right-sidebar">
                    <i class="dw dw-settings2"></i>
                </a>
            </div>
        </div>
        <div class="user-notification">
            <div class="dropdown">
                <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="false" aria-expanded="false" id="noti-tour">
                    <i @class([
                        'ring-bell' => count($user->unreadNotifications ?? []) > 0,
                        'dw dw-notification',
                        'noti-icon',
                    ])></i>
                    <span
                        class="badge {{ count($user->unreadNotifications ?? []) > 0 ? 'bg-danger d-block' : 'd-none' }} rounded-circle noti-icon-badge"
                        style="height: 15px; width: 15px; padding:1px;">
                        {{ count($user->unreadNotifications ?? []) }}
                    </span>
                </a>


                <div class="dropdown-menu dropdown-menu-right">
                    <div class="notification-list mx-h-200 customscroll">
                        <a href="{{route('admin.contact.readAllNotification')}}" class="text-dark">
                            <small>सबै खाली गर्नुहोस्</small>
                          </a> </span>नोटिफिकेसन</h5>
                        <ul>
                            @forelse ($user->unreadNotifications ?? [] as $notification)
                                <div class="alert alert-dismissible fade show" role="alert"
                                    data-notification-id="{{ $notification->id }}">
                                    <strong>{{ $notification->data['name'] }}</strong> sent you a message.

                                    <form action="{{ route('admin.contact.deleteNotification',$notification) }}" method="post"
                                        style="display: inline">
                                        @csrf
                                        @method('put')
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                    </form>

                                </div>
                            @empty
                                <li>
                                    <p>
                                        No records
                                    </p>
                                </li>
                            @endforelse


                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        <img src="{{ asset('assets/backend/vendors/images/photo1.jpg') }}" alt="" />
                    </span>
                    <span class="user-name">Admin</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="{{ route('logout') }}"><i class="dw dw-logout"></i> Log Out</a>
                </div>
            </div>
        </div>

    </div>
</div>

