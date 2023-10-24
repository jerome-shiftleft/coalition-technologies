<div id="update-task-modal" class="task-modal">
  <form id="update-task-form">

    <h2 class="modal-title">Update Task</h2>

    <div class="validation-error">

    </div><!-- /#validation-error -->

    <div class="form-inputs">

      <select name="task_project_id" id="task-project-id" class="form-select" required>
        <option value="0">Select Project</option>
        @foreach ($projects as $project)
          <option value="{{ $project->id }}">{{ $project->title }}</option>
        @endforeach
      </select>

      <input type="text" id="title" name="title" class="form-control" placeholder="Title" required>

      <textarea id="description" name="description" class="form-control" rows="3" placeholder="Description"></textarea>

    </div><!-- /.form-inputs -->

    <div class="modal-actions">
      <button type="button" id="update-task-cancel-btn" class="btn btn-secondary">Cancel</button>
      <button id="update-task-btn" type="submit" class="btn btn-primary">Save</button>
    </div><!-- /.modal-actions -->

  </form>
</div><!-- /#update-task-modal -->
