@extends('admin.layouts.layout')

@section('content')
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
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('user.index')}}">Пользователи</a>
                            </li>
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
                        <form action="{{route('user.store')}}" method="POST" class="w-25"
                              enctype="multipart/form-data">
                            @csrf
                            @error('name')
                            <div class="text-danger pb-1">{{$message}}</div>
                            @enderror
                            <div class="form-group">
                                <label for="name">Имя пользователя</label>
                                <input type="text" name="name" class="form-control" id="name"
                                       placeholder="Введите имя пользователя">
                            </div>
                            @error('email')
                            <div class="text-danger pb-1">{{$message}}</div>
                            @enderror
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email"
                                       placeholder="Введите email">
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Пароль</label>
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Подтверждение
                                    пароля</label>
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="form-group">
                                @error('role')
                                <div class="text-danger mt-1">{{$message}}</div>
                                @enderror
                                <label>Выберите роль
                                    <select name="role" class="form-control">
                                        <option disabled selected value> --Выберите--</option>
                                        @foreach($roles as $id => $role)
                                            <option value="{{$id}}"
                                                {{$id == old('role') ? ' selected': ''}}
                                            >{{$role}}</option>
                                        @endforeach
                                    </select>
                                </label>
                            </div>

                            <input type="submit" class="btn btn-primary" value="Добавить">
                        </form>
                    </div>
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
