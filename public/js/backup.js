$(document).ready( function () {
  // Setup - add a text input to each footer cell
  $('#data-table tfoot th').each( function () {
      var title = $(this).text();
      $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
  });
  // Do not touch, or reuse variable names to reduce namespace pollution.
  var tables;
  var row = {};
  var selectedRow;

  initializeTable("http://localhost:3000/api/tables/processing",
  {
    "table": $('#table-name')[0].innerHTML
  });

  initButtons();
});

/**
 * Initialized listeners for table CRUD buttons.
 *
 */
function initButtons() {
  // Listens for clicks on the create backup button
  $('#create-backup-button').on('click', function() {
    // Request the backup API
    $.ajax({
      "url": "http://localhost:3000/api/tables/backup",
      "type": "POST",
      success: function(result) {
        table.ajax.reload();
      }
    });
  });

  // Listens for selection of individual table rows
  $('#data-table tbody').on('click', 'tr', function () {
    if($(this).hasClass('selected')) {
      // If specific row already selected, de-select and
      // disable edit/delete functionality
      $(this).removeClass('selected');
      $('#edit-button').attr('disabled', 'disabled');
      $('#delete-button').attr('disabled', 'disabled');
      $('#edit-button').removeAttr('data-open');
      row = null;
      selectedRow = null;
    } else {
      // else, check selection and allow edit/disable
      row = table.row(this).data();
      selectedRow = table.row(this);

      $('#edit-button').attr('data-open', 'edit-modal');
      $('#edit-button').removeAttr('disabled');
      $('#delete-button').removeAttr('disabled');
      $('tr.selected').removeClass('selected');
      $(this).addClass('selected'); // selected
    }
  });
  // Listens for clicks on table editing button.
  $('#edit-button').on('click', function() {
    // clears the edit-form from old values
    $('#edit-form').empty();
    // Get table headers
    var headers = $("table tr:eq(0) td");
    // Generate form with all initial values
    for(var idx in row) {
      // Build form element
      var label = document.createElement("label");
      var input = document.createElement("input");
      // Populates orignal values into newly built form
      label.innerHTML = headers[idx].innerHTML;
      input.type = "text";
      input.placeholder = row[idx];
      label.appendChild(input);
      $("#edit-form").append(label);
    }
  });
  // Listens for clicks on delete button.
  $('#delete-button').on('click', function() {
    var tableName = $('#table-name')[0].innerHTML;
    var headers = $("table tr:eq(0) td");
    var header_array = [];
    var newTable = {};

    headers.each(function() {
      header_array.push(this.innerHTML);
    });
    // Build data for removed row
    for(var idx in row) {
      var element = row[idx];
      if(element === null) {
        continue;
      } else if(!isNaN(element)) {
        newTable[header_array[idx]] = +element;
      } else {
        newTable[header_array[idx]] = element;
      }
    }
    // Request the delete API
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
  // Listens for edit submissions within editing modal
  $('#submit-edits').on('click', function() {
    var headers = $("table tr:eq(0) td");
    var header_array = [];
    var changes = {};
    var original = {};

    headers.each(function() {
      header_array.push(this.innerHTML);
    });
    // Create array that contains changes
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
    // If there are any changes, make edit request
    if(Object.keys(changes).length !== 0) {
      // Create array with old values, so sequelize knows the difference
      for(var i=0; i<header_array.length;i++) {
        original[header_array[i]] = row[i];
      }

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
}
/**
 * Initializes a DataTable
 * @param  {string} url API endpoint of data
 * @param  {array} data Array of additional data for API endpoint
 */
function initializeTable(url, data) {
  // Initializes DataTable
  table = $('#data-table').DataTable({
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
      "url": url,
      "type": "POST",
      "dataType": 'json',
      "data": data
    }
  });

  // Apply the search for all columns
  $('#data-table_filter input').unbind();
  $('#data-table_filter input').bind('keyup', function(e) {
    if(e.keyCode == 13) { // only search upon enter keypress (code 13)
      table.search(this.value ).draw();
    }
  });

  // Apply the search for individual columns
  table.columns().every( function () {
    var that = this;
    $('input', this.footer()).on('keydown', function (ev) {
      if (ev.keyCode == 13) { // only search upon enter keypress (code 13)
        that.search(this.value).draw();
      }
    });
  });
  
  $('#data-table-container').fadeIn("fast");
}
