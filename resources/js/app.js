require('./bootstrap');

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

require('livewire-sortable');

require('select2');
require('daterangepicker');

import 'jquery-ui/ui/widgets/sortable.js';
import 'jquery-ui/ui/widgets/draggable.js';
import 'jquery-ui/ui/widgets/droppable.js';
require('@rwap/jquery-ui-touch-punch');

//import { swap_tasks } from './swap-tasks';
//window.swap_tasks = swap_tasks;

import { update_tasks_priority } from './update-tasks-priority';
window.update_tasks_priority = update_tasks_priority;

require('./footer-scripts');
require('./tasks');
require('./custom');
