<div id="task-manager">
  @include('livewire.sections.select-project')
  <x-validation-error :message="$create_validation_error" />
  @include('livewire.sections.task-list')
  @include('livewire.sections.create-task-modal')
</div><!-- /#task-mananager -->
