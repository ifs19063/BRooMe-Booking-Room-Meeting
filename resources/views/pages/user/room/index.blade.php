@extends('layouts.main')

@section('title', 'Room List - BRooMe')

@section('header-title', 'Room List')
    
@section('breadcrumbs')
  <div class="breadcrumb-item"><a href="#">Room</a></div>
  <div class="breadcrumb-item active">Room Data</div>
@endsection

@section('section-title', 'Room List')
    
@section('section-lead')
  The following is a list of the entire room.
@endsection

@section('content')

  @component('components.datatables')
    
    @slot('table_id', 'room-table')

    @slot('table_header')
      <tr>
        <th>#</th>
        <th>Picture</th>
        <th>Name</th>
        <th>Description</th>
        <th>Capacity</th>
      </tr>
    @endslot
      
  @endcomponent

@endsection

@push('after-script')

  <script>
  $(document).ready(function() {
    $('#room-table').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{{ route('room-list.json') }}',
      order: [2, 'asc'],
      columns: [
      {
        name: 'DT_RowIndex',
        data: 'DT_RowIndex',
        orderable: false, 
        searchable: false
      },
      {
        name: 'photo',
        data: 'photo',
        orderable: false, 
        searchable: false,
        render: function ( data, type, row ) {
          if(data != null) {
            return `<div class="gallery gallery-fw">`
              + `<a href="{{ asset('storage/${data}') }}" data-toggle="lightbox">`
                + `<img src="{{ asset('storage/${data}') }}" class="img-fluid" style="min-width: 80px; height: auto;">`
              + `</a>`
            + '</div>';
          } else {
            return '-'
          }
        }
      },
      {
        name: 'name',
        data: 'name',
      },
      {
        name: 'description',
        data: 'description',
      },
      {
        name: 'capacity',
        data: 'capacity',
      },
    ],
    });

    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
  });

</script>

@include('includes.lightbox')

@endpush