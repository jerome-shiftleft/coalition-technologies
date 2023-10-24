const expand_task = () => {
  $(document).on('click', '.expand-task', function () {
    console.log('toggling description');
    $(this).closest('.task').find('.task-content').toggle();
  });
}

export { expand_task };