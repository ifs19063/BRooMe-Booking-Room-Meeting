@extends('layouts.main')

@section('title')
Add User Data - BRooMe
@endsection 

@section('header-title')
Add User Data
@endsection 
    
@section('breadcrumbs')
  <div class="breadcrumb-item"><a href="#">User</a></div>
  <div class="breadcrumb-item"><a href="{{ route('user.index') }}">User Data</a></div>
  <div class="breadcrumb-item active">
    Add User Data
  </div>
@endsection

@section('section-title')
Add User Data
@endsection 
    
@section('section-lead')
  Please fill in the form below to add user data.
@endsection

@section('content')

  @component('components.form')

    @slot('row_class', 'justify-content-center')
    @slot('col_class', 'col-12 col-md-6')

      @slot('form_method', 'POST')
      @slot('form_action', 'user.store')

    @slot('input_form')

    @component('components.input-field')
          @slot('input_label', 'Email')
          @slot('input_type', 'text')
          @slot('input_name', 'email')
          @slot('form_group_class', 'required')
          @slot('other_attributes', 'required autofocus')
      @endcomponent

      @component('components.input-field')
          @slot('input_label', 'Username')
          @slot('input_type', 'text')
          @slot('input_name', 'username')
          @slot('form_group_class', 'required')
          @slot('other_attributes', 'required')
      @endcomponent

      @component('components.input-field')
          @slot('input_label', 'Password')
          @slot('input_type', 'password')
          @slot('input_name', 'password')
          @slot('form_group_class', 'required')
          @slot('other_attributes', 'required')
      @endcomponent

      @component('components.input-field')
          @slot('input_label', 'Confirm Password')
          @slot('input_type', 'password')
          @slot('input_name', 'confirm_password')
          @slot('form_group_class', 'required')
          @slot('other_attributes', 'required')
      @endcomponent

      <hr>

      @component('components.input-field')
          @slot('input_label', 'Name')
          @slot('input_type', 'text')
          @slot('input_name', 'name')
          @slot('form_group_class', 'required')
          @slot('other_attributes', 'required')
      @endcomponent

      @component('components.input-field')
          @slot('input_label', 'Position')
          @slot('input_type', 'text')
          @slot('input_name', 'description')
      @endcomponent

    @endslot

    @slot('card_footer', 'true')
    @slot('card_footer_class', 'text-right')
    @slot('card_footer_content')
      @include('includes.save-cancel-btn')
    @endslot 

  @endcomponent

@endsection