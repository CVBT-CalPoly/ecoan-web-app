$(document).ready( function () {
  var row = {};

  var table = $('#data-table').DataTable({
    "scrollX": true,
    "dom": 'lfrtBip',
    "buttons": [
      'print'
    ],
    // "columnDefs": [ {
    //   "searchable": false,
    //   "orderable": false,
    //   "targets": 0
    // }],
    // "order": [[ 0, 'asc' ]],
    "processing": true,
    "serverSide": true,
    "ajax": {
      "url": "http://localhost:3000/api/tables/processing",
      "type": "POST",
      "dataType": 'json',
      "data": {
        "table": $('#table-name')[0].innerHTML
      }
    }
   });

  $('#data-table tbody').on( 'click', 'tr', function () {
    if($(this).hasClass('selected')) {
      $(this).removeClass('selected');
      $('#edit-button').attr('disabled', 'disabled');
      $('#delete-button').attr('disabled', 'disabled');
    } else {
      row = table.row(this).data();

      $('#edit-button').removeAttr('disabled');
      $('#delete-button').removeAttr('disabled');
      $('tr.selected').removeClass('selected');
      $(this).addClass('selected');
    }
  });

  $('#edit-button').on('click', function() {
    $('#edit-form').empty();
    var headers = $("table tr:eq(0) td");

    for(var idx in row) {
      var field = document.createElement("div");
      field.class = "medium-6 columns";

      var label = document.createElement("label");
      label.innerHTML = headers[idx].innerHTML;

      var input = document.createElement("input");
      input.type = "text";
      input.placeholder = row[idx];

      label.appendChild(input);
      field.appendChild(label);

      $("#edit-form").append(field);
    }

  });

  $('#data-table-container').fadeIn("fast");
} );
