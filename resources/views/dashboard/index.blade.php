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

      <div id="task-manager">

        <select name="select_project" id="select-project" class="form-select search-select">
          <option></option>
          <option value="project-1">Project 1</option>
          <option value="project-2">Project 2</option>
          <option value="project-3">Project 3</option>
        </select>

        <div id="task-list">

          <div class="task">

            <div class="task-header">
              <h3 class="task-title">Task 1</h3>
              <div class="task-header-actions">
                <a href="#"><i class="fa-solid fa-angle-down"></i></a>
                <a href="#"><i class="fa-solid fa-up-down"></i></a>
                <a href="#"><i class="fa-solid fa-xmark"></i></a>
              </div><!-- /.task-header-actions -->
            </div><!-- /.task-header -->

            <div class="task-content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor provident sed expedita unde, atque, perferendis excepturi sequi asperiores eveniet earum autem sint debitis deserunt iusto quos distinctio deleniti cum sit.</p>
            </div><!-- /.task-content -->

          </div><!-- /.task -->

          <div class="task">

            <div class="task-header">
              <h3 class="task-title">Task 2</h3>
              <div class="task-header-actions">
                <a href="#"><i class="fa-solid fa-angle-down"></i></a>
                <a href="#"><i class="fa-solid fa-up-down"></i></a>
                <a href="#"><i class="fa-solid fa-xmark"></i></a>
              </div><!-- /.task-header-actions -->
            </div><!-- /.task-header -->

            <div class="task-content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor provident sed expedita unde, atque, perferendis excepturi sequi asperiores eveniet earum autem sint debitis deserunt iusto quos distinctio deleniti cum sit.</p>
            </div><!-- /.task-content -->

          </div><!-- /.task -->

          <div class="task">

            <div class="task-header">
              <h3 class="task-title">Task 3</h3>
              <div class="task-header-actions">
                <a href="#"><i class="fa-solid fa-angle-down"></i></a>
                <a href="#"><i class="fa-solid fa-up-down"></i></a>
                <a href="#"><i class="fa-solid fa-xmark"></i></a>
              </div><!-- /.task-header-actions -->
            </div><!-- /.task-header -->

            <div class="task-content">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor provident sed expedita unde, atque, perferendis excepturi sequi asperiores eveniet earum autem sint debitis deserunt iusto quos distinctio deleniti cum sit.</p>
            </div><!-- /.task-content -->

          </div><!-- /.task -->

        </div><!-- /#task-list -->

      </div><!-- /#task-mananager -->

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
