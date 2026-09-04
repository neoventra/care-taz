@extends('admin.layouts.app')

@section('title', 'New post')
@section('heading', 'New post')

@section('content')
  @include('admin.blog._form')
@endsection

@section('scripts')
  @include('admin.blog._editor-scripts')
@endsection
