<div id="task-manager">
  @include('livewire.sections.select-project')
  {{-- <div>
    @isset($create_message)
      Task Created: {{ $create_message }}
    @endisset
  </div> --}}
  @include('livewire.sections.task-list')
  @include('livewire.sections.create-task-modal')  
</div><!-- /#task-mananager -->
