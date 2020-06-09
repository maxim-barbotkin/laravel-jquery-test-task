@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-6 offset-3">
            <h3>{{ isset($event) ? __('Update') : __('Create') }} {{ __('Event') }}</h3>
            <div class="card mb-5">
                <div class="card-body">
                    <form method="POST" action="{{ isset($event) ? route('events.update', $event) : route('events.store') }}" enctype="multipart/form-data">
                        @csrf
                        @isset($event)
                            @method('PUT')
                        @endisset
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="title">{{ __('Title') }}</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="title" type="text" placeholder="Title" name="title" required value="{{ old('title', isset($event) ? $event->title : null) }}">
                                @error('title')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="date">{{ __('Date') }}</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="date" type="text" placeholder="yyyy-mm-dd" name="date" required value="{{ old('date', isset($event) ? $event->date : null) }}">
                                @error('date')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="location">{{ __('Location') }}</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="location" type="text" placeholder="Location" name="location" required value="{{ old('location', isset($event) ? $event->location : null) }}">
                                @error('location')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="image">{{ __('Image') }}</label>
                            <div class="col-sm-10">
                                <input id="image" type="file" placeholder="Image" name="image">
                                @error('image')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button class="btn btn-{{ isset($event) ? 'warning' : 'primary' }}" type="submit">{{ isset($event) ? __('Update') : __('Create') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
