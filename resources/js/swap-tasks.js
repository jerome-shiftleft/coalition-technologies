const swap_tasks = () => {
  //console.log('swapping tasks');
  $('#task-list').sortable({
    handle: '.task-header',
    cancel: '.task-action',
    items: '.task',
    revert: 150,
    update: function() {
      console.log('sorting...');
      const debounce_tasks_priority = _.debounce(update_tasks_priority, 500);
      debounce_tasks_priority();
    }
  });
} // end of swap_tasks()

export {swap_tasks};