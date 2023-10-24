const update_tasks_order = () => {
  console.log('updating tasks order...');

  var tasks = []

  console.log('tasks order: ');
  $('#task-list > .task').each(function (index) {
    var id = $(this).data('id');
    var order = $(this).data('order');
    var title = $(this).find('.task-title').text();
    console.log(`index[${index}] id:${id} order:${order} title:${title}`);
    tasks.push({ id, title });
  });

  Livewire.emitTo('task-manager', 'reorderTasks', tasks);
}

export { update_tasks_order };