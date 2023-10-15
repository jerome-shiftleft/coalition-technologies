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

      <select name="select_project" id="select-project"
      class="form-select form-select-sm search-select">
        <option value="project-1">Project 1</option>
        <option value="project-2">Project 2</option>
        <option value="project-3">Project 3</option>
        <option value="project-4">Project 4</option>
        <option value="project-5">Project 5</option>
      </select>

      <div id="task-list">

      </div><!-- /#task-list -->

    </div><!-- /.content -->

  </div><!--/#main-->
@endsection

@push('scripts')
  <script>
    $(function() {
      $('#select-project').select2({
        theme: 'bootstrap-5',
        placeholder: 'Select Project',
        allowClear: true
      });
    }); // end of initialize jquery
  </script>
@endpush
