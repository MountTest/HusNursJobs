@extends('layouts.app')

@section('content')

    @include('blocks.header.header')
    @include('blocks.main.main_first_block')
    @include('blocks.tabs.main_tabs')
    @include('blocks.advantages.advatages')
    @include('blocks.prices.prices')
    @include('blocks.contact_us.contact_us')
    @include('blocks.footer.footer')

@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/buttons.css')}}"/>
@endpush
@push('scripts')

@endpush
