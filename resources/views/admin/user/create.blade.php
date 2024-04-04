@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление пользователя</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Добавление пользователя</li>
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
                        <form action="{{route('user.store')}}" method="POST" class="">
                            @csrf
                            <div class="card-body col-5">
                                <div class="form-group">
                                    <label class="col-12">Имя пользователя</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Введите имя пользователя" value="{{old('name')}}">
                                    @error('name')
                                    <div class="text-danger text-nowrap">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="col-12">Введите email</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Введите email" value="{{old('email')}}">
                                    @error('email')
                                    <div class="text-danger text-nowrap">{{$message}}</div>
                                    @enderror
                                </div>
                               {{-- <div class="form-group">
                                    <label class="col-12">Пароль пользователя</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Введите пароль" value="{{old('password')}}">
                                    @error('password')
                                    <div class="text-danger text-nowrap">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="col-12">Повторите пароль </label>
                                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Повторите пароль" value="">
                                    @error('password_confirmation')
                                    <div class="text-danger text-nowrap">{{$message}}</div>
                                    @enderror
                                </div>--}}
                                <div class="form-group">
                                    <lable for="status"><b>Выберите Статус: </b></lable>
                                    <select class="form-control col-4" name="status">
                                        @foreach($statuses as $id => $status)
                                            <option value="{{$id}}"

                                                    @if(old('id') == $id) selected
                                            @else "default"
                                            @endif>{{$status}}</option>
                                        @endforeach
                                    </select>

                                    @error('status')
                                    <div class="text-danger text-nowrap">{{$message}}</div>
                                    @enderror</div>
                                <button type="submit" class="btn btn-primary col-5" value="Добавить">Добавить</button>
                                <a href="{{route('user.index')}} "><button type="button" class="btn btn-primary"   style="margin-left: 5rem;">Назад</button></a>
                        </form>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
