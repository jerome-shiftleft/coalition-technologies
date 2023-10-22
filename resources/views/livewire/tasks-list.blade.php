<div class="task" x-data="{ descExpanded: false }">

    <div class="task-header">

      <h3 class="task-title">{{ $task->title }}</h3>

      <div class="task-header-actions">

        <a href="#" x-on:click="descExpanded = !descExpanded" data-bs-toggle="tooltip"
          data-bs-title="Show/Hide Task Description">
          <i class="expand-task fa-solid fa-angle-down"></i>
        </a>

        <a href="#" data-bs-toggle="tooltip" data-bs-title="Delete Task">
          <i class="delete-task fa-solid fa-xmark"></i>
        </a>

      </div><!-- /.task-header-actions -->

    </div><!-- /.task-header -->

    <div class="task-content" x-show="descExpanded" x-transition>
      {{ $task->description }}
    </div><!-- /.task-content -->

  </div><!-- /.task -->
