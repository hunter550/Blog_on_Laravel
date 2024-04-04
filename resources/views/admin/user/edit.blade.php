@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Редактирование Пользователя</li>
                        </ol>
                    </div>
                    <div class="col-sm-8">
                        <h2 class="m-0">Редактирование Пользователя</h2>
                    </div><!-- /.col -->
                    <!-- /.col -->
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
                        <form action="{{route('user.update', $user->id)}}" method="POST" class="">
                            @csrf
                            @method('PATCH')
                            <div class="card-body col-5">
                                <div class="form-group">
                                    <label class="col-12">Имя пользователя: </label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Введите имя пользователя" value="{{$user->name}}">
                                    @error('name')
                                    <div class="text-danger text-nowrap">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="col-12">Введите email</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Введите email" value="{{$user->email}}">
                                    @error('email')
                                    <div class="text-danger text-nowrap">{{$message}}</div>
                                    @enderror
                                </div>
                               {{-- <div class="form-group">
                                    <label class="col-12">Пароль пользователя</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Введите пароль" value="">
                                    @error('password')
                                    <div class="text-danger text-nowrap">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="col-12">Повторите пароль</label>
                                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Повторите пароль" value="">
                                    @error('password_confirmation')
                                    <div class="text-danger text-nowrap">{{$message}}</div>
                                    @enderror
                                </div>--}}
                                <div class="form-group">
                                    <lable for="status"><b>Выберите Статус: </b></lable>
                                    <select class="form-control col-8" name="status">
                                        <option value="default">Статус не выбран</option>
                                        @foreach($statuses as $id => $status)
                                            <option value="{{$id}}"

                                                    @if($user->status == $id) selected
                                            @else "default"
                                            @endif>{{$status}}</option>
                                        @endforeach
                                    </select>

                                    @error('status')
                                    <div class="text-danger text-nowrap">{{$message}}</div>
                                    @enderror</div>
                                <div class="form-group">
                                    <input type="hidden" name="user_id" value="{{$user->id}}">
                                </div>
                                <button type="submit" class="btn btn-primary col-6" style="margin-top: 12px;" value="Изменить" >Изменить</button>
                                <a href="{{route('user.index')}} "><button type="button" class="btn btn-primary"   style="margin-left: 40rem; margin-top: -36px; margin-bottom: 100px;">Назад</button></a>
                                {{--<div class="col-4">
                                    <a href="{{route('user.index')}}" class="btn btn-block btn-primary ">Назад</a>
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
