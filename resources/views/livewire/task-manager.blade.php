<div id="task-manager">

  <div id="select-project-wrap">

    <select wire:model="project_id" name="select_project" id="select-project" class="form-select search-select">
      <option value="">Select Project</option>
      @foreach ($projects as $project)
        <option value="{{ $project->id }}">{{ $project->title }}</option>
      @endforeach
    </select>

    <a href="#" id="create-task-btn" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#create-task-modal">
      <i class="fa-solid fa-plus"></i>
    </a><!-- /#create-task-btn -->

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

  <!-- Create Task Modal -->
  <div class="modal fade" id="create-task-modal" tabindex="-1" aria-labelledby="create-task-modal-label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="create-task-modal-label">Create Task</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div><!--/create-task-modal-->

</div><!-- /#task-mananager -->
