@extends('admin.layouts.app')

@section('title', 'Edit post')
@section('heading', 'Edit post')

@section('content')
  @include('admin.blog._form')
@endsection

@section('scripts')
  @include('admin.blog._editor-scripts')
@endsection
