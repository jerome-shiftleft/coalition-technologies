<div id="task-manager">

  <div id="select-project-wrap">

    <select wire:model="project_id" name="select_project" id="select-project"
      class="form-select form-select-sm search-select">
      <option value="">Select Project</option>
      @foreach ($projects as $project)
        <option value="{{ $project->id }}">{{ $project->title }}</option>
      @endforeach
    </select>

  </div><!-- /#select-project-wrap -->

  <div>Project ID: {{ $project_id }}</div>
  <div>{{ $select_message }}</div>

  @isset($tasks)

    <div id="task-list">
      @foreach ($tasks as $task)
        <div class="task">

          <div class="task-header">
            
            <h3 class="task-title">{{ $task->title }}</h3>

            <div class="task-header-actions">
              <a href="#" data-bs-toggle="tooltip" data-bs-title="Show/Hide Task Description"><i class="expand-task fa-solid fa-angle-down"></i></a>
              {{-- <a href="#" data-bs-toggle="tooltip" data-bs-title="Reorder Task"><i class="reorder-task fa-solid fa-up-down"></i></a> --}}
              <a href="#" data-bs-toggle="tooltip" data-bs-title="Delete Task"><i class="delete-task fa-solid fa-xmark"></i></a>
            </div><!-- /.task-header-actions -->

          </div><!-- /.task-header -->

          <div class="task-content">
            {{ $task->description }}
          </div><!-- /.task-content -->

        </div><!-- /.task -->
      @endforeach
    </div><!-- /#task-list -->

    <script>
      $(function() {
  
        swap_tasks();      
  
        $('.expand-task').on('click', function() {
          console.log('toggle task desc');
          $(this).closest('.task-header').next('.task-content').toggle();
        });
  
      }); // end of initialize jquery
    </script>

  @endisset

</div><!-- /#task-mananager -->