const update_tasks_priority = () => {
  console.log('updating tasks priority...');

  var tasks = []

  console.log('tasks priority: ');
  $('#task-list > .task').each(function (index) {
    var data_id = $(this).data('id');
    var new_priority = index;
    var title = $(this).find('.task-title').text();
    console.log(`index[${index}] id:${data_id} priority:${new_priority} title:${title}`);
    tasks.push({ data_id, new_priority });
  });

  Livewire.emitTo('task-manager', 'reorderTasks', tasks);
}

export { update_tasks_priority };