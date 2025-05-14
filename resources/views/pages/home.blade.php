@extends('layouts.app')

@section('content')
    @include('components.jumbotron')
    @include('components.search')
    @include('components.category')
    @include('components.about')
    @include('components.listkos')
    @include('components.contact')
    @include('components.testimonial')
@endsection

