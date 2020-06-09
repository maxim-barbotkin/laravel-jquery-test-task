<div class="main-header">
    <a class="logo" href="{{ route('home') }}">
        <img src="{{ asset('dist-assets/images/logo.png') }}" alt="{{ config('app.name', 'DBA') }}">
    </a>
    <div class="menu-toggle">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div style="margin: auto"></div>
    <div class="header-part-right">
        <div class="dropdown">
            <div class="user col align-self-end">
                <img src="{{ asset('dist-assets/images/face.jpg') }}" id="userDropdown" alt="" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false">
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <div class="dropdown-header">
                        <i class="i-Lock-User mr-1"></i> {{ auth()->user()->name }}
                    </div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
