<div id="create-task-modal">
  <form>
    <div class="form-inputs">

      <select name="task_project_id" id="task-project-id" class="form-select">
        <option value="0">Select Project</option>
        @foreach ($projects as $project)
          <option value="{{ $project->id }}">{{ $project->title }}</option>
        @endforeach
      </select>

      <input type="text" id="title" name="title" class="form-control" placeholder="Title">

      <textarea id="description" name="description" class="form-control" rows="3" placeholder="Description"></textarea>

    </div><!-- /.form-inputs -->

    <div class="modal-actions">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      <button wire:click="createTask" type="button" class="btn btn-primary">Save</button>
    </div><!-- /.modal-actions -->
  </form>
</div><!-- /#create-task-modal -->