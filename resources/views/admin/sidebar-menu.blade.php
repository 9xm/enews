@if(auth()->user()->role == 'admin')
<ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
        <a href="{{route('admin.dashboard')}}" class="nav-link" aria-current="page">
        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#svg-home"></use></svg>
        Dashboard
        </a>
    </li>
    <li>
        <a href="{{route('admin.posts.index')}}" class="nav-link link-body-emphasis">
        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
        Posts
        </a>
    </li>
    <li>
        <a href="{{route('admin.categories.index')}}" class="nav-link link-body-emphasis">
        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
        Categories
        </a>
    </li>
    <li>
        <a href="{{route('admin.users.index')}}" class="nav-link link-body-emphasis">
        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
        Users
        </a>
    </li>
</ul>
@endif
@if(auth()->user()->role == 'editor')
<ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
        <a href="{{route('admin.dashboard')}}" class="nav-link" aria-current="page">
        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#svg-home"></use></svg>
        Dashboard
        </a>
    </li>
    <li>
        <a href="{{route('admin.posts.index')}}" class="nav-link link-body-emphasis">
        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
        Posts
        </a>
    </li>
</ul>
@endif
@if(auth()->user()->role == 'subscriber')
<ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
        <a href="{{route('admin.dashboard')}}" class="nav-link" aria-current="page">
        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#svg-home"></use></svg>
        Dashboard
        </a>
    </li>
</ul>
@endif