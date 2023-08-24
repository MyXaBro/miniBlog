@extends('layouts.app')

@section('content')
    @if(isset($posts) && count($posts) > 0)
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        @foreach($posts as $post)
                            <div class="col-md-4 mb-4">
                                <a href="{{ route('show', $post->id) }}" target="_blank">
                                    <div class="preview-thumbnail">
                                        <div class="aspect-ratio">
                                            <img src="{{ asset('storage/' . $post->preview_image) }}"
                                                 alt="Preview Image"
                                                 class="img-fluid">
                                        </div>
                                        <div class="preview-overlay">
                                            <h4 class="preview-title">{{ $post->title }}</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

