<!-- Footer Start -->
<div class="flex-grow-1"></div>
<div class="app-footer">
    <div class="footer-bottom d-flex flex-column flex-sm-row align-items-center">
        <span class="flex-grow-1"></span>
        <div class="d-flex align-items-center">
            <img class="logo" src="{{ asset('dist-assets/images/logo.png') }}" alt="">
            <div>
                <p class="m-0">&copy; {{ date('Y') }} {{ config('app.name', 'DBA') }}</p>
                <p class="m-0">{{ __('All rights reserved') }}</p>
            </div>
        </div>
    </div>
</div>
<!-- Footer end -->
