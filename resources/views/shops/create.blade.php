@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Submit your shop</h2>

    <form action="{{ route('shops.store') }}" method="post">
        @csrf

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                    <label for="input-name">Shop Name</label>
                    <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" placeholder="">
                    @if ($errors->has('name'))
                        <small id="name-error" class="error text-danger" for="input-name"><b>{{ $errors->first('name') }}</b></small>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                    <label for="input-description">Description</label>
                    <textarea name="description" id="input-description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}">{{ old('description') }}</textarea>
                    @if ($errors->has('description'))
                        <small id="description-error" class="error text-danger" for="input-description"><b>{{ $errors->first('description') }}</b></small>
                    @endif
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-primary" value="Submit">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection