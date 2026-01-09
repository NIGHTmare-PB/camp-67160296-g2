@extends('template.default')

@section('content')
    <h1>Pokedex Create</h1>
    <form action="{{ url('/pokedexs') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input class="form-control"type="text" name="name" id="name">
        <label for="type">Type</label>
        <input class="form-control"type="text" name="type" id="type">
        <label for="species">Species</label>
        <input class="form-control"type="text" name="species" id="species">
        <label for="height">Height</label>
        <input class="form-control"type="number" name="height" id="height">
        <label for="weight">Weight</label>
        <input class="form-control"type="number" name="weight" id="weight">
        <label for="hp">Hp</label>
        <input class="form-control"type="text" name="hp" id="hp">
        <label for="attack">Attack</label>
        <input class="form-control"type="text" name="attack" id="attack">
        <label for="defense">Defense</label>
        <input class="form-control"type="text" name="defense" id="defense">
        <label for="image_url">Image_url</label>
        <input class="form-control"type="text" name="image_url" id="image_url">
        <button class="btn btn-primary" type="submit">บันทึก</button>
    </form>
    @include('pokedexs.table')
@endsection

