import { update_tasks_order } from "./update-tasks-order";

const swap_tasks = () => {
  //console.log('swapping tasks');

  var tasks = $(".task");

  // Set up draggable and droppable behavior for each panel
  tasks.each(function (index) {
    var task = $(this);

    // Make the panel draggable
    task.draggable({
      revert: "invalid", // Snap back to original position if not dropped on a droppable
      helper: "clone", // Show a ghost image while dragging
      cursor: "move", // Change cursor to move while dragging
      handle: ".task-header",
      cancel: ".expand-task, .delete-task",
      start: function (event, ui) {
        // Set the helper element's width to match the original panel's width
        ui.helper.width(task.width());
      }
    });

    // Make the panel droppable
    task.droppable({
      drop: function (event, ui) {
        var draggable = ui.draggable; // Get the dragged panel
        var droppable = $(this); // Get the droppable panel

        // Swap the panels using before() and after()
        var temp = $('<div>').hide(); // Create a temporary element to hold the droppable
        droppable.before(temp); // Insert the temporary element before the droppable
        draggable.before(droppable).insertAfter(temp); // Swap the panels
        temp.remove(); // Remove the temporary element
        
        update_tasks_order();
      }
    });
  });
} // end of swap_tasks()

export {swap_tasks};