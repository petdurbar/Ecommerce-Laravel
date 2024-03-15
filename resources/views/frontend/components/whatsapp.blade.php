{{-- @extends('frontend.layouts.app')
@section('main')
    <a href="https://wa.me/9843084954" target="_blank">
        <div>
            <img src="{{ asset('logos/whatsapplogo.svg') }}" alt="whatsapp" />
        </div>
    </a>
@endsection --}}

@php
    $social = getOtherSetting();

@endphp

<div class="h-16 w-16 cursor-pointer" title="Click to chat on WhatsApp">
    <a href="https://wa.me/{{ $social->whatsapp }}" target="_blank">
        <div>
            <img src="{{ asset('logos/whatsapplogo.png') }}" alt="whatsapp" />
        </div>
    </a>
</div>
