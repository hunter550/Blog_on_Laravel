@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование Тегов</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('tag.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">{{$tag->title}}</li>
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
                        <form action="{{route('tag.update', $tag->id)}}" method="POST" class="">
                            @csrf
                            @method('PATCH')
                            <div class="card-body col-5">
                                <div class="form-group">
                                    <label class="col-12">Название категории</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Введите название тега" value="{{$tag->title}}">
                                    @error('title')
                                    <div class="text-danger text-nowrap">{{$message}}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary col-5" value="Добавить" >Изменить</button>
                                <a href="{{route('tag.index')}} "><button type="button" class="btn btn-primary"   style="margin-left: 5rem;">Назад</button></a>
                                {{--<div class="col-4">
                                    <a href="{{route('tag.index')}}" class="btn btn-block btn-primary ">Назад</a>
                                </div>--}}
                        </form>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
