$(function () {
  console.log('task.js loaded!');

  // Livewire.on('selectProject', () => {
  //   var project_id = $('#select-project').val();
  //   $('#task-project-id').val(project_id);
  //   swap_tasks();
  // });

  window.addEventListener('selectProject', event => {
    console.log('dispatch selectProject!');
    var project_id = $('#select-project').val();
    $('#task-project-id').val(project_id);
    swap_tasks();
  })

  // Livewire.on('taskCreated', data => {
  //   //$('#create-task-form')[0].reset();
  //   $('#create-task-form').find('input, textarea').val('');
  //   $('#create-task-modal').css('display', 'none');
  //   console.log('task created!');
  //   console.log(data);
  //   swap_tasks();
  // });

  window.addEventListener('taskCreated', event => {
    console.log('dispatch taskCreated');
    $('#create-task-form').find('input, textarea').val('');
    $('#create-task-modal').css('display', 'none');
    console.log('task created!');
    console.log(event.detail.data);
    swap_tasks();
  })

  $('#create-task-modal-btn').on('click', function () {
    $('#create-task-modal').css('display', 'flex');
  });

  $('#create-task-cancel').on('click', function () {
    $('#create-task-modal').css('display', 'none');
  });

  $('#create-task-form').on('submit', function (e) {
    e.preventDefault();
    $('#create-task-btn').prop('disabled', true);
    var project_id = $('#task-project-id').val();
    var title = $('#title').val();
    var description = $('#description').val();

    var data = {
      project_id,
      title,
      description
    }

    if (project_id === '0' || title.trim() === '') {
      console.log('Validation error');
      $(this).find('.validation-error').html('Please select a project and provide a title.')
      $('#create-task-btn').prop('disabled', false);
    } else {
      console.log('Valid form data');
      Livewire.emit('createTask', data);
    }

    //Livewire.emit('createTask', data);

  }); // end of $('#create-task-form').on('submit', function (e)

}); // end of initialize jquery