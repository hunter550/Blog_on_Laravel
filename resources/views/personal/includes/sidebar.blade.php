@section('sidebar')

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Sidebar -->
        <div class="sidebar">
            <ul class="nav nav-pills nav-sidebar flex-column pt-3" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('personal.main.index')}}" class="nav-link">
                        {{--                        <i class="nav-icon far fa-image"></i>--}}
                        <i class="nav-icon fas fa-home"></i>

                        <p>
                            Главная
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('liked.index')}}" class="nav-link">
                        {{--                        <i class="nav-icon far fa-image"></i>--}}
                        <i class="nav-icon fas fa-heart"></i>
                        <p>
                            Понравившиеся посты
                        </p>
                    </a>
                </li>
                <li class="nav-item">

                    <a href="{{route('comment.index')}}" class="nav-link">
                        {{--                        <i class="nav-icon far fa-image"></i>--}}
                        <i class="nav-icon fas fa-comments"></i>

                        <p>
                            Комментарии
                        </p>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
@show
