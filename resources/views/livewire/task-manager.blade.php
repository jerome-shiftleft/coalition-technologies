<div id="task-manager" x-data>

  <div id="select-project-wrap">

    <select wire:model="project_id" name="select_project" id="select-project"
      class="form-select search-select">
      <option value="">Select Project</option>
      @foreach ($projects as $project)
        <option value="{{ $project->id }}">{{ $project->title }}</option>
      @endforeach
    </select>

    <div wire:loading class="task-preloader">
      <div class="spinner-border spinner-border-sm" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>

  </div><!-- /#select-project-wrap -->  

  @isset($tasks)

    <div id="task-list">
      @foreach ($tasks as $task)
        <div class="task" x-data="{ isTaskExpanded: false }">

          <div class="task-header">

            <h3 class="task-title">{{ $task->title }}</h3>

            <div class="task-header-actions">

              <a href="#" x-on:click="isTaskExpanded = !isTaskExpanded" data-bs-toggle="tooltip"
                data-bs-title="Show/Hide Task Description">
                <i class="expand-task fa-solid fa-angle-down"></i>
              </a>

              <a href="#" data-bs-toggle="tooltip" data-bs-title="Delete Task">
                <i class="delete-task fa-solid fa-xmark"></i>
              </a>

            </div><!-- /.task-header-actions -->

          </div><!-- /.task-header -->

          <div class="task-content" x-show="isTaskExpanded" x-transition>
            {{ $task->description }}
          </div><!-- /.task-content -->

        </div><!-- /.task -->
      @endforeach
    </div><!-- /#task-list -->

    <script>
      $(function() {
        swap_tasks();
      }); // end of initialize jquery
    </script>

  @endisset

</div><!-- /#task-mananager -->
