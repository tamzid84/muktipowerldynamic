@extends('layouts.app')

@section('title', 'Mukti Power Pvt Ltd')

@section('content')

@include('sections.hero')
@include('sections.about')
@include('sections.solutions')
@include('sections.products')
@include('sections.whyus')
@include('sections.vision')
@include('sections.contact')

@endsection

@push('scripts')
    @include('sections.product-scripts')
@endpush