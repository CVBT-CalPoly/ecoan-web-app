$(document).ready( function () {
    var row = {};
    var selectedRow;
    // mutiple select: https://datatables.net/extensions/select/examples/api/get.html
    var table = $('#data-table').DataTable({
      "scrollX": true,
      "dom": 'Bfrtip',
      "buttons": [
        'print'
      ],
      "columnDefs": [ {
        "searchable": false,
      }],
      "order": [[ 0, 'asc' ]],
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

  $('#data-table tbody').on('click', 'tr', function () {
    if($(this).hasClass('selected')) {
      $(this).removeClass('selected');
      $('#edit-button').attr('disabled', 'disabled');
      $('#delete-button').attr('disabled', 'disabled');
      $('#edit-button').removeAttr('data-open');
    } else {
      row = table.row(this).data();
      selectedRow = table.row(this);
      $('#edit-button').attr('data-open', 'edit-modal');
      $('#edit-button').removeAttr('disabled');
      $('#delete-button').removeAttr('disabled');
      $('tr.selected').removeClass('selected');
      $(this).addClass('selected');
    }
  });

  $('#delete-button').on('click', function() {
    var tableName = $('#table-name')[0].innerHTML;
    var headers = $("table tr:eq(0) td");
    var header_array = [];

    headers.each(function() {
      header_array.push(this.innerHTML);
    });

    var newTable = {};
    console.log(row);
    for(var idx in row) {
      var element = row[idx];
      if(element === null) {
        continue;
      }
      else if(!isNaN(element)) {
        newTable[header_array[idx]] = +element;
      } else {
        newTable[header_array[idx]] = element;
      }
    }

    console.log(newTable);

    $.ajax({
      "url": "http://localhost:3000/api/tables/crud/delete/" + tableName,
      "type": "POST",
      "data": JSON.stringify(newTable),
      success: function(result) {
        selectedRow.remove().draw();
        row = {};
      }
    });

    $('#edit-button').attr('disabled', 'disabled');
    $('#delete-button').attr('disabled', 'disabled');
    $('#edit-button').removeAttr('data-open');
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

    if(Object.keys(changes).length !== 0) {
      var original = {};

      for(var i=0; i<header_array.length;i++) {
        original[header_array[i]] = row[i];
      }

      console.log(original);
      var updateArray = {"orignal": JSON.stringify(original), "changes": JSON.stringify(changes)};
      var tableName = $('#table-name')[0].innerHTML;
      $.ajax({
        "url": "http://localhost:3000/api/tables/crud/edit/" + tableName,
        "type": "POST",
        "data": updateArray,
        success: function(result) {
          selectedRow.draw();
        }
      });
    }
  });

  $('#data-table-container').fadeIn("fast");
} );
