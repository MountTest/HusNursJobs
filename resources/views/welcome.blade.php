@extends('layouts.app')

@section('content')
    <div class="preloader">
        <div class="blocks">
            <div class="block"></div>
            <div class="block"></div>
            <div class="block"></div>
        </div>
        <p class="preload-text">...Loading</p>
    </div>
    <section class="bg-first ">
    @include('blocks.header.header')
    @include('blocks.main.main_first_block')
    </section>
    @include('blocks.tabs.main_tabs')
    @include('blocks.advantages.advatages')
    @include('blocks.prices.prices')
    @include('blocks.contact_us.contact_us')
    @include('blocks.footer.footer')

@endsection

@push('styles')

@endpush
@push('scripts')
    <script src="{{ asset('js/main.js') }}"></script>
@endpush
