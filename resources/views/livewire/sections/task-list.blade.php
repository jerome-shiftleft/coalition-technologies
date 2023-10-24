@isset($tasks)
  <div id="task-list">
    @foreach ($tasks as $task)
      <div class="task" data-id="{{ $task->id }}" data-order="{{ $task->order }}">

        <div class="task-header">

          <h3 class="task-title">{{ $task->title }}</h3>

          <div class="task-header-actions">

            <a href="#" class="task-action expand-task">
              <i class="fa-solid fa-angle-down"></i>
            </a>

            <a href="#" class="task-action update-task-modal-btn">
              <i class="fa-solid fa-pen"></i>
            </a> <!-- /.edit-task-btn -->

            <a href="#" wire:click="deleteTask({{ $task->id }})">
              <i class="task-action delete-task fa-solid fa-xmark"></i>
            </a>

          </div><!-- /.task-header-actions -->

        </div><!-- /.task-header -->

        <div class="task-content" >
          {{ $task->description }}
        </div><!-- /.task-content -->

      </div><!-- /.task -->
    @endforeach
  </div><!-- /#task-list -->
@endisset
