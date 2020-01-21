// Call the dataTables jQuery plugin
$(document).ready(function() {
  $.fn.dataTable.moment( 'YYYY-MM-DD' );
  
  $('#dataTable').DataTable( {
    "order": [0, 'desc']
  });
});
