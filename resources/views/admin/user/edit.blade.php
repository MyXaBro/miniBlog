@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование пользователя</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('user.index')}}">Пользователи</a>
                            </li>
                            <li class="breadcrumb-item active">Редактирование пользователя</li>
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
                        <form action="{{route('user.update', $user->id)}}" method="POST" class="w-25"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            @error('name')
                            <div class="text-danger pb-1">{{$message}}</div>
                            @enderror
                            <div class="form-group">
                                <label for="name">Имя пользователя</label>
                                <input type="text" name="name" class="form-control" id="name"
                                       placeholder="Введите имя пользователя" value="{{$user->name}}">
                            </div>
                            @error('email')
                            <div class="text-danger pb-1">{{$message}}</div>
                            @enderror
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email"
                                       placeholder="Введите email" value="{{$user->email}}">
                            </div>

                                <div class="form-group w-50">
                                    @error('role')
                                    <div class="text-danger mt-1">{{$message}}</div>
                                    @enderror
                                    <label>Выберите роль
                                        <select name="role" class="form-control">
                                            <option disabled selected value> --Выберите--</option>
                                            @foreach($roles as $id => $role)
                                                <option value="{{$id}}"
                                                    {{$id == $user->role ? ' selected': ''}}
                                                >{{$role}}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                </div>
                                <div class="mb-2">
                                    <input type="submit" class="btn btn-primary" value="Обновить">
                                </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
