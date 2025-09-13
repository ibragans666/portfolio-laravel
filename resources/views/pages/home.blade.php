@extends('layouts.app')

@section('title', 'Home')

@section('content')
  @include('sections.hero')
  @include('sections.about')
  @include('sections.projects')
  @include('sections.contact')
@endsection
