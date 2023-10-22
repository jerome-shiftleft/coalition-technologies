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

    Livewire.on('deleteTask', task_id => {      
      $('#delete-modal').modal('show');
      Livewire.emitTo('task-manager','deleteTaskHandler', task_id);
    })
  </script>
@endpush
