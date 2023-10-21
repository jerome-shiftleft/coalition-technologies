<div id="task-manager">

  <div id="select-project-wrap">

    <select data-pharaonic="select2" data-component-id="{{ $this->id }}" wire:model="project_id" name="select_project" id="select-project" class="form-select search-select">
      <option></option>
      @foreach ($projects as $project)
        <option value="{{ $project->id }}">{{ $project->title }}</option>
      @endforeach
    </select>

  </div><!-- /#select-project-wrap -->

  <div>Project ID: {{ $project_id }}</div>

  <div id="task-list">

    <div class="task">

      <div class="task-header">
        <h3 class="task-title">Task 1</h3>
        <x-task-actions />
      </div><!-- /.task-header -->

      <div class="task-content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor provident sed expedita unde, atque,
          perferendis excepturi sequi asperiores eveniet earum autem sint debitis deserunt iusto quos distinctio
          deleniti cum sit.</p>
      </div><!-- /.task-content -->

    </div><!-- /.task -->

    <div class="task">

      <div class="task-header">
        <h3 class="task-title">Task 2</h3>
        <x-task-actions />
      </div><!-- /.task-header -->

      <div class="task-content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor provident sed expedita unde, atque,
          perferendis excepturi sequi asperiores eveniet earum autem sint debitis deserunt iusto quos distinctio
          deleniti cum sit.</p>
      </div><!-- /.task-content -->

    </div><!-- /.task -->

    <div class="task">

      <div class="task-header">
        <h3 class="task-title">Task 3</h3>
        <x-task-actions />
      </div><!-- /.task-header -->

      <div class="task-content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor provident sed expedita unde, atque,
          perferendis excepturi sequi asperiores eveniet earum autem sint debitis deserunt iusto quos distinctio
          deleniti cum sit.</p>
      </div><!-- /.task-content -->

    </div><!-- /.task -->

  </div><!-- /#task-list -->

</div><!-- /#task-mananager -->
