@extends('layouts.dashboard', [
    'body_id' => 'dashboard-index',
    'body_class' => 'dashboard',
])

@section('meta-dynamic')
  <title>Task Manager</title>
  <meta name="description" content="Task Manager">
@endsection

@push('page-head-scripts')
@endpush

@section('main')
  <div id="main">

    <div class="content">

      <livewire:task-manager>

    </div><!-- /.content -->

  </div><!--/#main-->
@endsection

@push('scripts')
  <script>
    $(function() {

      swap_tasks();
      
      $('#select-project').select2({
        theme: 'bootstrap-5',
        placeholder: 'Select Project',        
        allowClear: true
      });      

      $('.expand-task').on('click', function() {
        $(this).closest('.task-header').next('.task-content').toggle();
      });

    }); // end of initialize jquery
  </script>
@endpush
