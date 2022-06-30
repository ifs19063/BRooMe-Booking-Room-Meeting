@extends('layouts.main')

@section('title')
    Edit User Data - BRooMe
@endsection 

@section('header-title')
  Edit User Data
@endsection 
    
@section('breadcrumbs')
  <div class="breadcrumb-item"><a href="#">User</a></div>
  <div class="breadcrumb-item"><a href="{{ route('user.index') }}">User Data</a></div>
  <div class="breadcrumb-item">
    <a href="#">Edit User Data</a>
  </div>
  <div class="breadcrumb-item active">{{ $item->name }}</div>
@endsection

@section('section-title')
  Edit User Data
@endsection 
    
@section('section-lead')
Please fill in the form below to edit {{ $item->name }}'s data.
@endsection

@section('content')

  @component('components.form')

    @slot('row_class', 'justify-content-center')
    @slot('col_class', 'col-12 col-md-6')

    @slot('form_method', 'POST')
    @slot('method_put', 'PUT')
    @slot('form_action', 'user.update')
    @slot('update_id', $item->id)

    @slot('input_form')

      @component('components.input-field')
          @slot('input_label', 'Name')
          @slot('input_type', 'text')
          @slot('input_name', 'name')
          @slot('input_value', $item->name)
          @slot('form_group_class', 'required')
          @slot('other_attributes', 'required autofocus')
      @endcomponent

      @component('components.input-field')
          @slot('input_label', 'Position')
          @slot('input_type', 'text')
          @slot('input_name', 'description')
          @slot('input_value', $item->description)
      @endcomponent

    @endslot

    @slot('card_footer', 'true')
    @slot('card_footer_class', 'text-right')
    @slot('card_footer_content')
      @include('includes.save-cancel-btn')
    @endslot 

  @endcomponent

@endsection