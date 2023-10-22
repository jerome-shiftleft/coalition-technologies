<div id="task-manager">

  <div id="select-project-wrap">

    <select wire:model="project_id" name="select_project" id="select-project" class="form-select search-select">
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
        <div class="task" x-data="{ descExpanded: false }">

          <div class="task-header">

            <h3 class="task-title">{{ $task->title }}</h3>

            <div class="task-header-actions">

              <a href="#" x-on:click="descExpanded = !descExpanded" data-bs-toggle="tooltip"
                data-bs-title="Show/Hide Task Description">
                <i class="expand-task fa-solid fa-angle-down"></i>
              </a>

              <a href="#" wire:click="deleteTask({{ $task->id }})">
                <i class="delete-task fa-solid fa-xmark"></i>
              </a>

            </div><!-- /.task-header-actions -->

          </div><!-- /.task-header -->          

          <div class="task-content" x-show="descExpanded" x-transition>
            {{ $task->description }}
          </div><!-- /.task-content -->

        </div><!-- /.task -->
      @endforeach
    </div><!-- /#task-list -->

  @endisset

</div><!-- /#task-mananager -->
