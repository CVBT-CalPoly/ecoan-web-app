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
      $('#edit-button').removeAttr('data-open');
    } else {
      row = table.row(this).data();
      $('#edit-button').attr('data-open', 'edit-modal');
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
      var label = document.createElement("label");
      var input = document.createElement("input");

      label.innerHTML = headers[idx].innerHTML;
      input.type = "text";
      input.placeholder = row[idx];
      label.appendChild(input);

      $("#edit-form").append(label);
    }
  });
  // https://stackoverflow.com/questions/8158244/how-to-update-a-record-using-sequelize-for-node
  //
  $('#submit-edits').on('click', function() {
    var headers = $("table tr:eq(0) td");
    var header_array = [];
    var changes = {};

    headers.each(function() {
      header_array.push(this.innerHTML);
    });

    $('#edit-form :input').each(function(index){
      var change = $(this).val();
      if(change.length) {
        if(!isNaN(change)) {
          changes[header_array[index]] = +$(this).val();
        } else {
          changes[header_array[index]] = $(this).val();
        }
      }
    });

    var original = {};

    for(var i=0; i<header_array.length;i++) {
      original[header_array[i]] = row[i];
    }

    console.log(original);
    var updateArray = {"orignal": JSON.stringify(original), "changes": JSON.stringify(changes)};

    $.ajax({
      "url": "http://localhost:3000/api/tables/crud/edit/prodhistory",
      "type": "POST",
      "data": updateArray
      // success: function(result) {
      //   // console.log(changes);
      // }
    });

  });

  $('#data-table-container').fadeIn("fast");
} );
