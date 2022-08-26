<aside class="main-sidebar {{ config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}" style="background: #666666;
    /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(#666666, #000033, #000099);
    /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(#666666, #000033, #000099);
    /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(#666666, #000033, #000099);
    /* For Firefox 3.6 to 15 */
    background: linear-gradient(#666666, #000033, #000099);
    /* Standard syntax */;">

    {{-- Sidebar brand logo --}}
    @if(config('adminlte.logo_img_xl'))
        @include('adminlte::partials.common.brand-logo-xl')
    @else
        @include('adminlte::partials.common.brand-logo-xs')
    @endif

    {{-- Sidebar menu --}}
    <div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column {{ config('adminlte.classes_sidebar_nav', '') }}"
                data-widget="treeview" role="menu"
                @if(config('adminlte.sidebar_nav_animation_speed') != 300)
                    data-animation-speed="{{ config('adminlte.sidebar_nav_animation_speed') }}"
                @endif
                @if(!config('adminlte.sidebar_nav_accordion'))
                    data-accordion="false"
                @endif>
                {{-- Configured sidebar links --}}
                @each('adminlte::partials.sidebar.menu-item', $adminlte->menu('sidebar'), 'item')
            </ul>
        </nav>
    </div>

</aside>
