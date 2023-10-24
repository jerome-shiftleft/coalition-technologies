const update_tasks_priority = () => {
  console.log('updating tasks priority...');

  var tasks = []

  console.log('tasks priority: ');
  $('#task-list > .task').each(function (index) {
    var id = $(this).data('id');
    var priority = $(this).data('priority');
    var title = $(this).find('.task-title').text();
    //console.log(`index[${index}] id:${id} priority:${priority} title:${title}`);
    tasks.push({ id, title });
  });

  Livewire.emitTo('task-manager', 'reorderTasks', tasks);
}

export { update_tasks_priority };