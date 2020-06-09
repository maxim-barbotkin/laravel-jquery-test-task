@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            @if(session()->has('message'))
                <div class="mt-5 alert alert-card alert-{{ session()->get('class') }}" role="alert">
                    {{ session()->get('message') }}
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
            @endif

            <h1 class="title mt-5">{{ __('Events') }}</h1>

            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($events as $event)
                        <div class="swiper-slide">
                            <div class="event_block">
                                <div class="event_image" style="background-image: url({{ ($event->image) ? asset('events/'.$event->image) : asset('events/no_image.jpg') }})"></div>
                                <div class="event_title">{{ $event->title }}</div>
                                <div class="event_location">{{ $event->location }}</div>
                                <div class="event_bottom">
                                    <div class="event_date">{{ $event->date }}</div>
                                    <button class="event_attend" data-id="{{ $event->id }}">{{ __('Attend') }}</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>

    <div class="attend_modal">
        <div class="modal_overlay"></div>
        <div class="modal_block">
            <div class="modal_title"></div>
            <form method="POST" action="{{ route('create-request') }}">
                @csrf
                <div class="modal_input_block">
                    <input type="text" value="" name="name" id="modal_name" required>
                    <label for="modal_name">Your name</label>
                </div>
                <div class="modal_input_block">
                    <input type="email" value="" name="email" id="modal_email" required>
                    <label for="modal_email">Email</label>
                </div>

                <input type="hidden" name="event_id" class="modal_event" value="">

                <div class="modal_button_block">
                    <button type="submit" class="modal_submit">Attend</button>
                </div>
            </form>
        </div>
    </div>
@endsection
