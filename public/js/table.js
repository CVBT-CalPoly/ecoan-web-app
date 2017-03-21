$(document).ready( function () {
   $('#data-table').DataTable({
      "scrollX": true,
      "processing": true,
      "serverSide": true,
      "ajax": {
        "url": "processing",
        "type": "POST"
      },
   });
   $('#data-table-container').fadeIn("fast");
} );
