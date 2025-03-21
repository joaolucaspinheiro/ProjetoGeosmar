@extends('layout')
@section('title', 'Home')
@section('conteudo')
    <div class="row container" style="margin-top: 50px;">
        @foreach ($videos as $video)
            <div class="col s12 m3" style="margin-top: 30px;">
                <div class="card" style="height: 350px;"> <!-- Altura fixa para todos os cards -->
                    <div class="card-image" style="height: 180px; overflow: hidden;">
                        <img src="images/sample-1.jpg" style="width: 100%; height: 100%; object-fit: cover;">
                        <span class="card-title" style="color: black">{{ $video->title }}</span>
                    </div>
                    <div class="card-content" style="height: 100px; overflow: hidden;">
                        <p style="font-size: 14px;">{{ $video->description }}</p>
                    </div>
                    <div class="card-action" style="height: 40px;">
                        <a href="{{route('video.details', $video->slug)}}">Acesse o vídeo</a>
                    </div>
                </div>  
            </div>
        @endforeach
    </div>
    <div class="row center" style = "#80cbc4 teal lighten-3">
        {{ $videos->links('custom.pagination') }}
    </div>
@endsection
