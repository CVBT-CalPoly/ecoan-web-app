$(document).ready( function () {
   $('#data-table').DataTable({
      "scrollX": true,
      "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 1, 'asc' ]]
   });
   $('#data-table-container').fadeIn("fast");
} );
