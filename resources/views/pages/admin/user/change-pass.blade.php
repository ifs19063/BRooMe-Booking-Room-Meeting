@extends('layouts.main')

@section('title')
  Change Password User - BRooMe
@endsection 

@section('header-title')
  Change Password User
@endsection 
    
@section('breadcrumbs')
  <div class="breadcrumb-item"><a href="#">User</a></div>
  <div class="breadcrumb-item"><a href="{{ route('user.index') }}">User Data</a></div>
  <div class="breadcrumb-item">
    <a href="#">Change Password User</a>
  </div>
  <div class="breadcrumb-item active">{{ $item->name }}</div>
@endsection

@section('section-title')
  Change Password User
@endsection 
    
@section('section-lead')
Please fill out the form below to change {{ $item->name }} 's password.
@endsection

@section('content')

  @component('components.form')

    @slot('row_class', 'justify-content-center')
    @slot('col_class', 'col-12 col-md-6')

    @slot('form_method', 'POST')
    @slot('method', 'PUT')
    @slot('form_action', 'user.update-pass')
    @slot('update_id', $item->id)

    @slot('input_form')

      @component('components.input-field')
          @slot('input_label', 'New Password')
          @slot('input_type', 'password')
          @slot('input_name', 'password')
          @slot('form_group_class', 'required')
          @slot('other_attributes', 'required')
      @endcomponent

      @component('components.input-field')
          @slot('input_label', 'Confirm New Password')
          @slot('input_type', 'password')
          @slot('input_name', 'confirm_password')
          @slot('form_group_class', 'required')
          @slot('other_attributes', 'required')
      @endcomponent

    @endslot

    @slot('card_footer', 'true')
    @slot('card_footer_class', 'text-right')
    @slot('card_footer_content')
      @include('includes.save-cancel-btn')
    @endslot 

  @endcomponent

@endsection