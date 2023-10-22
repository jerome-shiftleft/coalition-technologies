require('./bootstrap');

import Alpine from 'alpinejs'; 
window.Alpine = Alpine; 
Alpine.start();

require('select2');
require('daterangepicker');

import 'jquery-ui/ui/widgets/sortable.js';
import 'jquery-ui/ui/widgets/draggable.js';
import 'jquery-ui/ui/widgets/droppable.js';
require('@rwap/jquery-ui-touch-punch');

import { swap_tasks } from './swap-tasks';
window.swap_tasks = swap_tasks;

require('./footer-scripts');
require('./custom');
