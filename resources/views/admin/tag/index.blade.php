@extends('admin.layouts.main')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Теги</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">

                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Теги</li>
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
                    <div class="col-12">
                        <div class="col-2 mb-3">
                            <a href="{{route('tag.create')}}" class="btn btn-block btn-primary">Добавить</a>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Название тегов</th>
                                        <th>Просмотреть</th>
                                        <th>Редактировать</th>
                                        <th>Удалить</th>
                                   </tr>
                                    </thead>

                                    @foreach($tags as $tag)
                                    <tbody>
                                    <tr>
                                        <td>{{$tag->id}}</td>
                                        <td>{{$tag->title}}</td>
                                        <td><a href="{{route('tag.show', $tag->id)}}" class="text-success"><i class="nav-icon fas fa-eye ml-5"></i></a>
                                        </td>
                                      {{--  @php
                                            dd('строка 57');
                                        @endphp--}}
                                        <td><a href="{{route('tag.edit', $tag->id)}}"><i class="nav-icon fas fa-edit ml-5"></i></a>
                                        </td>
                                        <td>
                                            <form action="{{route('tag.delete', $tag->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-danger border-0 bg-transparent">
                                                <i class="nav-icon fas fa-trash ml-4 text-danger"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                        </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
