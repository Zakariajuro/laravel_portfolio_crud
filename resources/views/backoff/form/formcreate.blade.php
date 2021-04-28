@extends('layouts.index')

@section('content')
    <h1 class="text-center my-5">BACKOFFICE | FORMUALIRE</h1>
    <form method="POST" action={{route('form.store')}} enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-3">
                <label for="img">image</label>
            </div>
            <div class="col-3">
                <input name="img" class="form-control-file" id="img" type="file">
            </div>
        </div>

        <hr>
        <h4 class="my-5">AJOUTER UNE IMAGE PAR LE LIEN :</h4>
        {{-- <div class="row">
            <div class="col-3">
                <label for="img">image</label>
            </div>
            <div class="col-3">
                <input name="img" id="img" type="text">
            </div>
        </div> --}}
        <button class="mt-4" type="submit">Envoyer</button>
    </form>
@endsection