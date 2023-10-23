<!-- Create Task Modal -->
<div class="modal fade" id="create-task-modal" tabindex="-1" aria-labelledby="create-task-modal-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="create-task-modal-label">Create Task</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form wire:submit.prevent="submit">

          <div class="form-inputs">

            <input type="text" id="title" name="title" class="form-control" placeholder="Title">

            <textarea id="description" name="description" class="form-control" rows="3" placeholder="Description"></textarea>

          </div><!-- /.form-inputs -->

          <div class="modal-actions">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Save</button>
          </div><!-- /.modal-actions -->

        </form>

      </div><!--/.modal-body-->
    </div>
  </div>
</div><!--/create-task-modal-->
