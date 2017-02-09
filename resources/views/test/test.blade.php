@extends('test.layouts')

@section('title', 'test')

@section('nav')
  <t-header-nav></t-header-nav>
@endsection

@section('main')
  <h1 v-cloak>{{$text}}</h1>
  <example message="{{$text}}"></example>
@endsection


