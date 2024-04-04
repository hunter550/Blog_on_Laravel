@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление Постов</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Добавление Постов</li>
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
                        <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                                <div class="form-group">
                                    <label class="col-8">Название поста</label>
                                    <input type="text" class="form-control col-4 @error('title') is-invalid @enderror" name="title" placeholder="Введите название поста" value="{{old('title')}}">
                                    @error('title')
                                    <div class="text-danger text-nowrap">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group @error('content') is-invalid @enderror">
                                    <textarea id="summernote" name="content" cols="60" rows="5">{{old('content')}}</textarea>
                                    @error('content')
                                    <div class="text-danger text-nowrap">{{$message}}</div>
                                    @enderror
                                </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Выберите картинку для превью</label>
                                <div class="input-group col-8">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('preview_image') is-invalid @enderror" name="preview_image">
                                        <label class="custom-file-label">Выберите картинку для превью</label>
                                    </div>
{{--                                    <div class="input-group-append">--}}
{{--                                        <span class="input-group-text">Загрузка</span>--}}
{{--                                    </div>--}}
                                </div>
                                @error('preview_image')
                                <div class="text-danger text-nowrap">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Добавить главное изображение</label>
                                <div class="input-group col-8">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('main_image') is-invalid @enderror" name="main_image">

                                        <label class="custom-file-label">Выберите изображение</label>
                                    </div>
{{--                                    <div class="input-group-append">--}}
{{--                                        <span class="input-group-text">Загрузка</span>--}}
{{--                                    </div>--}}
                                </div>
                                @error('main_image')
                                <div class="text-danger text-nowrap">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <lable for="category_id"><b>Выберите категорию: </b></lable>
                                <select class="form-control col-4" name="category_id">
                                    <option value="default">Категория не выбрана</option>
                                @foreach($categories as $category)
                                        <option value="{{$category->id}}"

                                        @if(old('category_id') == $category->id) selected
                                        @else "default"
                                        @endif>{{$category->title}}</option>
                                    @endforeach
                                </select>

                                @error('category_id')
                                <div class="text-danger text-nowrap">{{$message}}</div>
                                @enderror</div>
                            <div class="form-group col-4">
                                <label>Теги</label>
                                <select name="tag_ids[]" class="select2" multiple="multiple" data-placeholder="Выберите теги" style="width: 100%;">
                                    @foreach($tags as $tag)
                                    <option @if (is_array(old('tag_ids')) and in_array($tag->id, old('tag_ids')))
                                        selected
                                            @endif
                                            value="{{$tag->id}}">{{$tag->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                    <button type="submit" class="btn btn-primary col-2" value="Добавить">Добавить</button>
                                    <a href="{{route('post.index')}} "><button type="button" class="btn btn-primary"   style="margin-left: 16rem;">Назад</button></a>
                                </div>

                        </form>

                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
