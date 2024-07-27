@extends('client.index')

@section('content')
    @include('client.page.homepage.components.hero')
    @include('client.page.homepage.components.about')
    @include('client.page.homepage.components.tutorial')
    @include('client.page.homepage.components.tes')
    @include('client.partials.scroll')
    @include('client.partials.footer')

@endsection