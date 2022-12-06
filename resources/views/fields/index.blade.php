@extends('layouts.app')

@section('content')
<h1>Exercise {{ $exercise->title }}</h1>
<ul>
    @foreach ($fields as $field)
    <li>
        {{ $field->question }}
        <br>
        {{ $field->value_kind->name }}
        <form action="{{ route('exercises.fields.destroy', compact('exercise', 'field')) }}" method="POST">
            @method('DELETE')
            @csrf
            <button>Suprrimer</button>
        </form>
    </li>
    @endforeach
</ul>
<a href="{{ route('exercises.fields.create', $exercise) }}">Add new field</a>
@endsection