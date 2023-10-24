const swap_tasks = () => {
  //console.log('swapping tasks');
  $('#task-list').sortable({
    handle: '.task-header',
    cancel: '.task-action',
    items: '.task',
    revert: 150,
    update: function() {
      console.log('sorting...');
      update_tasks_priority();
    }
  });
} // end of swap_tasks()

export {swap_tasks};