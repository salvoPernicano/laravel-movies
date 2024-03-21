@extends('layouts.app')

@section('title', 'Movies Index')


@section('main')
<main>
    <h2>Lista Film</h2>
    <div>
        @foreach($movies as $element)
        <div class="card">
            <figure>
                <img src="{{$element['thumb']}}" alt="{{$element['thumb']}}">
            </figure>
                <h2>{{$element['title']}}</h2>
            <div>
                <p>Description: {{$element['description']}}</p>
                <h5>{{$element['release']}}</h5>
                <h5>{{$element['genre']}}</h5>
            </div>
            <div>
                <a href="{{ route('movies.edit', $element->id)}}">Edit</a>
                <form action="{{route('movies.destroy', $element->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
        <a class="button" role="button" href="{{route('movies.create')}}">Inserisci nuovo</a>
</main>
@endsection