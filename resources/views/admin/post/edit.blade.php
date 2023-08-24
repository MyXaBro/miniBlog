@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование статьи</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Личный кабинет</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('post.index')}}">Статьи</a></li>
                            <li class="breadcrumb-item active">Редактирование статьи</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('post.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group w-25">
                                <label for="title">Название</label>
                                @error('title')
                                <div class="text-danger mt-1">{{$message}}</div>
                                @enderror
                                <input type="text" name="title" class="form-control" id="title"
                                       placeholder="Введите название списка" value="{{ $post->title }}">
                            </div>
                            <div class="form-group">
                                <label for="summernote">Творите</label>
                                @error('content')
                                <div class="text-danger mt-1">{{$message}}</div>
                                @enderror
                                <textarea id="summernote" name="content">{{ $post->content }}</textarea>
                            </div>
                            <div class="form-group w-50">
                                <label for="exampleInputFile">Добавить превью</label>
                                <div class="w-25 mb-3">
                                    <img src="{{ asset('storage/' . $post->preview_image) }}" alt="preview_image" class="w-50">
                                </div>
                                @error('preview_image')
                                <div class="text-danger mt-1">{{$message}}</div>
                                @enderror
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="preview_image">
                                        <label class="custom-file-label">Выбрать фото</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузить</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Обновить">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
