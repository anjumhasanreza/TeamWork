@extends('frontend.ws.layouts.app')

@section('content')

<!-- start hero section -->

@include('frontend.ws.pages.home')

<!-- end client section -->





<!-- start services -->

@include('frontend.ws.pages.services')

<!-- end services -->





<!-- start features -->

@include('frontend.ws.pages.features')

<!-- end features -->





<!-- start plan -->

@include('frontend.ws.pages.plans')

<!-- end faqs -->




<!-- start review -->

@include('frontend.ws.pages.reviews')

<!-- end Work Process -->




<!-- start team -->

@include('frontend.ws.pages.team')

<!-- end team -->




<!-- start contact -->

@include('frontend.ws.pages.contact')

<!-- end cta -->

@endsection