@extends('layouts.app')

@section('content')

        @include('blocks.header')
        @include('blocks.main')
        @include('blocks.tabs')
        @include('blocks.advantages')
        @include('blocks.prices')
        @include('blocks.contact_us')
        @include('blocks.footer')


@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/buttons.css')}}"/>
@endpush
@push('scripts')

@endpush
