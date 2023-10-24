$(function () {
  console.log('task.js loaded!');

  $(document).on('click', '.expand-task', function () {
    console.log('toggling description');
  });

  $(document).on('click', '#create-task-modal-btn', function () {
    $('#create-task-modal').css('display', 'flex');
  });

  $(document).on('click', '#create-task-cancel-btn', function () {
    $('#create-task-form').find('input, textarea').val('');
    $('#create-task-modal').css('display', 'none');
  });

  $(document).on('submit', '#create-task-form', function (e) {
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

    if (project_id === '0' || project_id.trim() === '' || title.trim() === '') {
      console.log('Validation error');
      $(this).find('.validation-error').html('Please select a project and provide a title.')
      $('#create-task-btn').prop('disabled', false);
    } else {
      console.log('Valid form data');
      Livewire.emit('createTask', data);
    }

    //Livewire.emit('createTask', data);

  }); // end of $('#create-task-form').on('submit', function (e)

  $(document).on('click', '.update-task-modal-btn', function () {
    console.log('show update modal');
    $('#update-task-modal').css('display', 'flex');

    var task = $(this).closest('.task');
    var project_id = $('#select-project').val();
    var id = parseInt(task.data('id'));
    var title = task.find('.task-title').text();
    var description = task.find('.task-content').text();

    //console.log(`tid: ${id} - pid: ${project_id} - ${title} - ${description}`);

  }); // end of $('.update-task-modal-btn').on('click', function () {

  $(document).on('click', '#update-task-cancel-btn', function () {
    $('#update-task-modal').css('display', 'none');
  });

  window.addEventListener('selectProject', event => {
    console.log('dispatch selectProject!');
    var project_id = $('#select-project').val();
    $('#task-project-id').val(project_id);
    swap_tasks();
  }) // end of window.addEventListener('selectProject', event => {  

  window.addEventListener('taskCreated', event => {
    console.log('dispatch taskCreated');
    $('#create-task-form').find('input, textarea').val('');
    $('#create-task-modal').css('display', 'none');
    console.log('task created!');
    console.log(event.detail.data);
    swap_tasks();
  })

}); // end of initialize jquery