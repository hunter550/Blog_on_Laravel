@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-5">{{$user->name}}</h1>
                        <a href="{{route('user.edit', $user->id)}}" ><i class="nav-icon fas fa-edit ml-5"></i></a>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{route('user.index')}}">Пользователи</a></li>
                            <li class="breadcrumb-item active">{{$user->name}}</li>
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
                        <div class="col-6">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">

                                    <thead class="mx-auto">
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">Имя пользователя</th>
                                    </tr>
                                    </thead>
                                    <tbody class="ms-1">
                                    <tr >
{{--                                        <th>ID</th>--}}
                                        <td class="text-center">{{$user->id}}</td>
{{--                                        <th ml-5>Название категории</th>--}}
                                        <td class="text-center">{{$user->name}}</td>

                                   </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->

                        </div>
                    </div>
                        </div>
                <div class="col-3">
                <a href="{{route('user.index')}}" class="btn btn-block btn-primary ">Назад</a>
                </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
