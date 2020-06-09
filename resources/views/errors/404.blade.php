@extends('layouts.auth')

@section('content')
<div class="not-found-wrap text-center">
    <h1 class="text-60">404</h1>
    <p class="text-36 subheading mb-3">{{ __('Error!') }}</p>
    <p class="mb-5 text-muted text-18">{{ __('Sorry! The page you were looking for doesn&apos;t exist.') }}</p><a class="btn btn-lg btn-primary btn-rounded" href="{{ route('welcome') }}">{{ __('Go back to home') }}</a>
</div>
@endsection
