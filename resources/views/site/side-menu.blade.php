<div class="p-4 mb-3 bg-body-tertiary rounded sidebar-menu">
    <ul class="nav nav-pills flex-column mb-auto">
        @foreach($menus as $menu)
        <li class="nav-item">
            <a href="{{url($menu->slug)}}" class="nav-link fw-bolder text-secondary">
            {!!$menu->icon_svg!!}
            {{$menu->title}}
            </a>
        </li>
        @endforeach
    </ul>
</div>