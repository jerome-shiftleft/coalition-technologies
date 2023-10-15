require('./bootstrap');

import Chart from 'chart.js/auto';
window.Chart = Chart;

require('select2');
window.moment = require('moment');
require('daterangepicker');

import 'jquery-ui/ui/widgets/sortable.js';
import 'jquery-ui/ui/widgets/draggable.js';
import 'jquery-ui/ui/widgets/droppable.js';

require('@rwap/jquery-ui-touch-punch');

window.Datatable = require ('datatables.net-dt');
import swal from 'sweetalert2';
window.Swal = swal;

require('./charts');
require('./footer-scripts');
require('./custom');
