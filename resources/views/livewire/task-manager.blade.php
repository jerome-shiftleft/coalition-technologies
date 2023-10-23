<div id="task-manager">
  @include('livewire.sections.select-project')
  
  @isset($create_validation_error)
    <div class="validation-error text-danger">{{ $create_validation_error }}</div>
  @endisset

  @include('livewire.sections.task-list')
  @include('livewire.sections.create-task-modal')  
</div><!-- /#task-mananager -->
