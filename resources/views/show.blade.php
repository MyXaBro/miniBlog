@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">{{ $post->title }}</h2>
                        <img src="{{ asset('storage/' . $post->preview_image) }}" alt="Превью" class="img-fluid mx-auto d-block">
                        <div class="content mt-2">
                            {!! htmlspecialchars_decode($post->content) !!}
                        </div>
                        <div class="mt-4">
                            <h4>Комментарии</h4>
                            @foreach ($comments as $comment)
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-2">
                                                <span class="badge text-primary">{{ $comment->user->name }}</span>
                                            </div>
                                            <div>
                                                <p class="card-text">{{ $comment->content }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <form method="post" action="{{ route('comments.store', ['post' => $post->id]) }}" class="mt-4">
                                @csrf
                                <div class="form-group">
                                    <label for="content">Оставьте свой комментарий:</label>
                                    <div class="input-group">
                                        <textarea class="form-control" id="content" name="content" rows="1" required></textarea>
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary">Отправить</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

