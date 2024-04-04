@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление Категории</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
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
                        <form action="{{route('category.store')}}" method="POST" class="">
                            @csrf
                            <div class="card-body col-5">
                                <div class="form-group">
                                    <label class="col-12">Название категории</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Введите название категории" value="{{old('title')}}">
                                    @error('title')
                                    <div class="text-danger text-nowrap">{{$message}}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary col-5" value="Добавить">Добавить</button>
                                <a href="{{route('category.index')}} "><button type="button" class="btn btn-primary"   style="margin-left: 5rem;">Назад</button></a>
                        </form>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
