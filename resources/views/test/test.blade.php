@extends('test.layouts')

@section('title', 'test')

@section('nav')
  <header-nav></header-nav>
@endsection

@section('main')
  <h1 v-cloak>{{$text}}</h1>
  <example message="{{$text}}"></example>
@endsection


