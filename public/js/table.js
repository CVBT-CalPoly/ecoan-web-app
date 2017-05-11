$(document).ready( function () {
    var row = {};
    var selectedRow;

    // Setup - add a text input to each footer cell
    $('#data-table tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    });

    var table = $('#data-table').DataTable({
      "scrollX": true,
      "dom": 'Bfrtip',
      "buttons": [
        'print'
      ],
      "oLanguage": {
        "sSearch": "Search All Columns"
      },
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

    // Apply the search for all columns
    $('#data-table_filter input').unbind();
    $('#data-table_filter input').bind('keyup', function(e) {
      if(e.keyCode == 13) { // only search upon enter keypress (code 13)
        table.search( this.value ).draw();
      }
    });

    // Apply the search for individual columns
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keydown', function (ev) {
            if (ev.keyCode == 13) { // only search upon enter keypress (code 13)
            that
                .search( this.value )
                .draw();
         }
        } );
    } );

  $('#data-table tbody').on( 'click', 'tr', function () {
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

    var newTable = {}
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

  $('#adv-filter-button').on('click', function() {
    $('#adv-filter-form').empty();

    var headers = $("table tr:eq(0) td");

    for (var ndx = 0; ndx < headers.length; ndx++) {
      console.log(headers[ndx]);
      var header = headers[ndx];
      var label = document.createElement("label");
      var div = document.createElement("div");
      var input = document.createElement("input");
      var select = document.createElement("select");
      var divButton = document.createElement("div");
      var submit = document.createElement("input");

      label.innerHTML = header.innerHTML;

      div.className = "input-group";

      input.className = "input-group-field"
      input.type = "text";

      var optionContains = document.createElement("option");
      var optionEquals = document.createElement("option");
      optionContains.value = "Contains";
      optionContains.innerHTML = optionContains.value;
      optionEquals.value = "Equals";
      optionEquals.innerHTML = optionEquals.value;
      select.className = "input-group-label";
      select.appendChild(optionContains);
      select.appendChild(optionEquals);

      divButton.className = "input-group-button";

      submit.className = "button";
      submit.type = "submit";
      submit.value = "Filter";

      div.appendChild(input);
      //div.appendChild(select);
      div.appendChild(divButton);
      divButton.appendChild(submit);

      $("#adv-filter-form").append(label);
      $("#adv-filter-form").append(div);
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
