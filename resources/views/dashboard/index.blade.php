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

      <livewire:task-manager />

    </div><!-- /.content -->

  </div><!--/#main-->
@endsection

@push('scripts')
  <script>
    Livewire.on('selectProject', () => {
      swap_tasks();
    });

    $(function() { // initialize jquery
      $('#select-project').select2({
        theme: 'bootstrap-5',
        placeholder: 'Select Project',
        allowClear: true
      });

      $('#select-project').on('change', function(e) {
        console.log('select change!');        
        var select_project_value = parseInt(e.target.value);
        console.log('select value: ', select_project_value);

        Livewire.emit('update_project_id_handler', select_project_value);

      });
    }); // end of initialize jquery
  </script>
@endpush
