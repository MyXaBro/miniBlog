
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widjet="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('index') }}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p class="ml-1">
                        Главная
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('post.index') }}" class="nav-link">
                    <i class="nav-icon fa-solid fa-clipboard"></i>
                    <p class="ml-1">
                        Статьи
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p class="ml-1">
                        Пользователи
                    </p>
                </a>
            </li>
        </ul>
    </div>
</aside>
