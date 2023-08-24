@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Админка</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Админка</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $data['postsCount'] }}</h3>

                                <p>Статьи</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-clipboard"></i>
                            </div>
                            <a href="{{route('post.index')}}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                        <div class="small-box bg-light">
                            <div class="inner">
                                <h3>{{ $data['usersCount'] }}</h3>

                                <p>Пользователи</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <a href="{{ route('user.index') }}" class="small-box-footer">Подробнее <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
