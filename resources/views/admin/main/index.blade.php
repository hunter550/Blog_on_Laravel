@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Админка</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Админка</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{$arr['usersCount']}}</h3>

                                <p>Пользователи</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-users"></i>
{{--                                <i class="ion ion-bag"></i>--}}
                            </div>
                            <a href="{{route('user.index')}}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{$arr['categoriesCount']}}</h3>

                                <p>Категории</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-th-list"></i>
{{--                                <i class="ion ion-stats-bars"></i>--}}
                            </div>
                            <a href="{{route('category.index')}}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{$arr['postsCount']}}</h3>

                                <p>Посты</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon far fa-address-card"></i>
{{--                                <i class="ion ion-person-add"></i>--}}
                            </div>
                            <a href="{{route('post.index')}}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{$arr['tagsCount']}}</h3>

                                <p>Теги</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-tags"></i>
{{--                                <i class="ion ion-pie-graph"></i>--}}
                            </div>
                            <a href="{{route('tag.index')}}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
