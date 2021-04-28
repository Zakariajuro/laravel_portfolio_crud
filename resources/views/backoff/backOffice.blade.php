@extends('layouts.index')

@section('content')
    <h1 class="text-center my-5">BACKOFFICE</h1>
    <a class="text-center btn btn-danger" href={{route('form')}}>ajouter des images</a>

    <div class="container">
        <div class=" row my-5">
            @foreach ($images as $image)
                @if (Str::after($image->src, '.') === 'jpg' || Str::after($image->src, '.') === 'png' )
                    <div class="col-5">
                        <img class="mw-100" width="40%" src={{asset('/storage/img/' . $image->src)}} alt="">
                        <h4>nom de l'image :</h4>
                        <p>{{$image->src}}</p>
                        <form method="POST" action="{{route('form.destroy', $image->id)}}">
                            @csrf
                            @method('DELETE')
                            <a class="btn btn-danger" type="submit">Delete</a>
                        </form>
                        <hr>
                    </div>
                @else
                   <div class="col-5">
                        <p>CECI N'EST PAS UNE IMAGE :</p>
                        <p>nom complet de l'image : {{$image->img}}</p>
                   </div>
                @endif
                
            @endforeach
        </div>
    </div>
@endsection