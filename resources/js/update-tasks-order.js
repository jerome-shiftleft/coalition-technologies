const update_tasks_order = () => {
  console.log('updating tasks order...');
  $('#task-list >.task').each(function() {
    var title = $(this).find('.task-title').text();
    console.log(title);
  });
}

export { update_tasks_order };