@if(config('xdlayout.self.xdlayout') == 'blank')
    <div class="d-flex flex-column flex-root">
        @yield('content')
    </div>
@else

    @include('xdlayout.base._header-mobile')

    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">

            @if(config('xdlayout.aside.self.display'))
                @include('xdlayout.base._aside')
            @endif

            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

                @include('xdlayout.base._header')

                <div class="content {{ Metronic::printClasses('content', false) }} d-flex flex-column flex-column-fluid" id="kt_content">

                    @if(config('xdlayout.subheader.display'))
                        @if(array_key_exists(config('xdlayout.subheader.xdlayout'), config('xdlayout.subheader.layouts')))
                            @include('xdlayout.partials.subheader._'.config('xdlayout.subheader.xdlayout'))
                        @else
                            @include('xdlayout.partials.subheader._'.array_key_first(config('xdlayout.subheader.layouts')))
                        @endif
                    @endif

                    @include('xdlayout.base._content')
                </div>

                @include('xdlayout.base._footer')
            </div>
        </div>
    </div>

@endif

@if (config('xdlayout.self.xdlayout') != 'blank')

    @if (config('xdlayout.extras.search.xdlayout') == 'offcanvas')
        @include('xdlayout.partials.extras.offcanvas._quick-search')
    @endif

    @if (config('xdlayout.extras.notifications.xdlayout') == 'offcanvas')
        @include('xdlayout.partials.extras.offcanvas._quick-notifications')
    @endif

    @if (config('xdlayout.extras.quick-actions.xdlayout') == 'offcanvas')
        @include('xdlayout.partials.extras.offcanvas._quick-actions')
    @endif

    @if (config('xdlayout.extras.user.xdlayout') == 'offcanvas')
        @include('xdlayout.partials.extras.offcanvas._quick-user')
    @endif

    @if (config('xdlayout.extras.quick-panel.display'))
        @include('xdlayout.partials.extras.offcanvas._quick-panel')
    @endif

    @if (config('xdlayout.extras.toolbar.display'))
        @include('xdlayout.partials.extras._toolbar')
    @endif

    @if (config('xdlayout.extras.chat.display'))
        @include('xdlayout.partials.extras._chat')
    @endif

    @include('xdlayout.partials.extras._scrolltop')

@endif
