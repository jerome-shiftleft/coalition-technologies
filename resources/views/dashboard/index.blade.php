@extends('layouts.dashboard', [
    'body_id' => 'dashboard-index',
    'body_class' => 'dashboard'    
])

@section('meta-dynamic')
  <title>Dashboard</title>
  <meta name="description" content="Dashboard">
@endsection

@push('page-head-scripts')
  
@endpush

@section('main')
  <div id="main">    

    <div class="content">         

      <x-lorem-ipsum />

    </div><!-- /.content -->

  </div><!--/#main-->
@endsection

@push('scripts')
  
@endpush
