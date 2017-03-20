$(document).ready( function () {
   $('#data-table').DataTable({
      "scrollX": true,
      "processing": true,
      "serverSide": true,
      "ajax": {
        "url": "processing",
        "type": "POST"
      },
      "deferLoading": 1393
   });
   $('#data-table-container').fadeIn("fast");
} );
