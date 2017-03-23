$(document).ready( function () {
   $('#data-table').DataTable({
      "scrollX": true,
      "processing": true,
      "serverSide": true,
      "ajax": {
        "url": "http://localhost:3000/api/tables/processing",
        "type": "POST"
      },
   });
   $('#data-table-container').fadeIn("fast");
} );
