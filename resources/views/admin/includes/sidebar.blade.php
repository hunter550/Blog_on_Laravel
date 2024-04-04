@section('sidebar')
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Sidebar -->
        <div class="sidebar">
            <ul class="nav nav-pills nav-sidebar flex-column pt-3" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('admin.main.index')}}" class="nav-link">
                        {{--                        <i class="nav-icon far fa-image"></i>--}}
                        <i class="nav-icon fas fa-home"></i>

                        <p>
                            Главная
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('user.index')}}" class="nav-link">
                        {{--                        <i class="nav-icon far fa-image"></i>--}}
                        <i class="nav-icon fas fa-users"></i>

                        <p>
                            Пользователи
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('category.index')}}" class="nav-link">
{{--                        <i class="nav-icon far fa-image"></i>--}}
                        <i class="nav-icon fas fa-th-list"></i>

                        <p>
                            Категории
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('post.index')}}" class="nav-link">
                        <i class="nav-icon far fa-address-card"></i>

                        <p>
                            Посты
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('tag.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>

                        <p>
                            Теги
                        </p>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
@show
