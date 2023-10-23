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
    document.addEventListener("DOMContentLoaded", () => {
      Livewire.on('selectProject', () => {
        var project_id = $('#select-project').val();
        $('#task-project-id').val(project_id);
        swap_tasks();
      });

      Livewire.on('taskCreated', () => {
        $('#create-task-modal').modal('hide');
      })
    });
  </script>
@endpush
