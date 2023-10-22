<div id="task-manager">

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
        <livewire:tasks-list :task="$task" :wire:key="$task->id">
      @endforeach
    </div><!-- /#task-list -->

    <script>
      $(function() {
        swap_tasks();
      }); // end of initialize jquery
    </script>

  @endisset

</div><!-- /#task-mananager -->