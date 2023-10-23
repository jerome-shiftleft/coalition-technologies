$(function () {
  console.log('task.js loaded!');
  
  Livewire.on('selectProject', () => {
    var project_id = $('#select-project').val();
    $('#task-project-id').val(project_id);
    swap_tasks();
  });

  Livewire.on('taskCreated', data => {
    $('#create-task-form')[0].reset();
    console.log('task created!');
    console.log('title: ', data.title);
    console.log(data);    
  });

  $('#create-task-modal-btn').on('click', function () {
    $('#create-task-modal').css('display', 'flex');
  });

  $('#create-task-cancel').on('click', function () {
    $('#create-task-modal').css('display', 'none');
  });

  $('#create-task-form').on('submit', function (e) {
    e.preventDefault();

    var project_id = $('#task-project-id').val();
    var title = $('#title').val();
    var description = $('#description').val();

    var data = ['project_id', 'title', 'description'];

    var data = {
      project_id,
      title,
      description
    }

    if (project_id === '0' || title.trim() === '') {
      console.log('Validation error');
      $(this).find('.validation-error').html('Please select a project and provide a title.')
    } else {
      console.log('Valid form data');
      Livewire.emit('createTask', data);
    } // end of if (project_id === '0' || title.trim() === '')

  });

}); // end of initialize jquery