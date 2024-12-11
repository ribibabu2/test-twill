@extends('twill::layouts.form')

@section('contentFields')
    <div class="form-group">
        <label for="name">Location Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $item->name ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control">{{ old('description', $item->description ?? '') }}</textarea>
    </div>
@endsection


<!-- @extends('twill::layouts.form')

@section('content')
    <div class="container">
        <h1>Create Location</h1>

        @form($form)
    </div>
@endsection -->

