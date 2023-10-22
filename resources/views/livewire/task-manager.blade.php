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
            <x-task-actions />
          </div><!-- /.task-header -->

          <div class="task-content">
            {{ $task->description }}
          </div><!-- /.task-content -->

        </div><!-- /.task -->
      @endforeach
    </div><!-- /#task-list -->
    
  @endisset



</div><!-- /#task-mananager -->
