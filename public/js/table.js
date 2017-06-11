var user;
$.getJSON("http://localhost:3000/api/user_data", function(data) {
  // Make sure the data contains the username as expected before using it
  if (data.hasOwnProperty('username')) {
    user = data.username.username;
  }
});

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

  $('#adv-filter-button').on('click', function() {
    $('#adv-filter-form').empty();
    var headers = $("table tr:eq(0) td");
    var inputs = [];

    for (var ndx = 0; ndx < headers.length; ndx++) {
      // console.log(headers[ndx]);
      var header = headers[ndx];
      var rows = document.createElement("div");
      var col1 = document.createElement("div");
      var col2 = document.createElement("div");
      var rowLabel = document.createElement("label");
      var divInputGroup = document.createElement("div");
      var input = document.createElement("input");
      var secondInput = document.createElement("input");
      var divButton = document.createElement("div");
      var submit = document.createElement("input");
      var selectLabel = document.createElement("label");
      var select = document.createElement("select");
      const rowName = header.innerHTML;
      var inputObject = {};

      rows.className = "row";
      rows.appendChild(col1);
      rows.appendChild(col2);
      inputObject["rowName"] = rowName;

      col1.className = "medium-6 columns";
      col1.appendChild(rowLabel);
      col1.appendChild(divInputGroup);

      rowLabel.innerHTML = rowName;

      divInputGroup.className = "input-group";

      input.className = "input-group-field"
      input.id = rowName + "-input-value";
      input.type = "text";
      inputObject["input"] = input.id;
      secondInput.className = "input-group-field"
      secondInput.id = rowName + "-second-input-value";
      secondInput.type = "text";
      secondInput.style.display = "none";
      inputObject["input2"] = secondInput.id;
      divButton.className = "input-group-button";

      submit.className = "button";
      submit.id = rowName + "-fitler";
      submit.type = "submit";
      submit.value = "Filter";

      divInputGroup.appendChild(input);
      divInputGroup.appendChild(divButton);
      divInputGroup.appendChild(secondInput);
      divButton.appendChild(submit);

      col2.className = "medium-6 columns";
      col2.appendChild(selectLabel);
      col2.appendChild(select);

      selectLabel.innerHTML = "Filter Options";
      select.id = rowName + "-select";
      inputObject["select"] = select.id;

      var options = ["Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty",
        "Doesn't contain", "Doesn't equal", "Doesn't start with", "Is not more than", "Is not between", "Is not empty"];

      options.forEach(function(option) {
        var element = document.createElement("option");
        element.value = option;
        element.innerHTML = option;
        select.appendChild(element);
      });

      (function(select, secondInput) {
        select.onchange = function() {
          const selectedValue = $('#'+select.id).val();
          // show second input box if needed multiple inputs
          if (selectedValue == "Between" || selectedValue == "Is not between") {
            secondInput.style.display = "block";
          }
          else {
            secondInput.value = "";
            secondInput.style.display = "none";
          }
        }})(select, secondInput);

      $("#adv-filter-form").append(rows);
      inputs.push(inputObject);
    }

    $('#adv-filter-form').on({
      'valid invalid submit': function(g) {
        g.stopPropagation();
        g.preventDefault();

        if (g.type === "submit") {
          var request = {};
          var rowInputs = [];
          var tableName = $('#table-name')[0].innerHTML;

          inputs.forEach(function(element) {
            var input = $('#'+element.input).val();
            var input2 = $('#'+element.input2).val();
            var select = $('#'+element.select).val();
            var rowInput = {};

            rowInput["rowName"] = element.rowName;
            rowInput["input"] = input;
            rowInput["input2"] = input2;
            rowInput["select"] = select;
            rowInputs.push(rowInput);
          });
          request["inputs"] = rowInputs;

          table.destroy();
          row = null;
          selectedRow = null;

          initializeTable("http://localhost:3000/api/tables/filtering/" + tableName, request);
        }
      }
    });

    $('input[name="input-name"]').on('valid', function() {
      // Handle the submission of the form
      console.log('input-name');
    });
  });
});

/**
 * Initialized listeners for table CRUD buttons.
 *
 */
function initButtons() {
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
      if(headers[idx].innerHTML !== "Owner") {
        var label = document.createElement("label");
        var input = document.createElement("input");
        // Populates orignal values into newly built form
        label.innerHTML = headers[idx].innerHTML;
        input.type = "text";
        input.placeholder = row[idx];
        label.appendChild(input);
        $("#edit-form").append(label);
      }
    }
  });

  $('#add-button').on('click', function() {
    // clears the edit-form from old values
    $('#add-form').empty();
    // Get table headers
    var headers = $("table tr:eq(0) td");
    // Generate form with all initial values
    for(var i = 0; i < headers.length; i++) {
      // console.log(headers[i])
      // Build form element
      if(headers[i].innerHTML !== "Owner") {
        var label = document.createElement("label");
        var input = document.createElement("input");
        // Populates orignal values into newly built form
        label.innerHTML = headers[i].innerHTML;
        input.type = "text";
        input.placeholder = "null";
        label.appendChild(input);
        $("#add-form").append(label);
      }
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
        selectedRow.remove().draw(false);
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
    var additions_array = [];

    headers.each(function() {
      header_array.push(this.innerHTML);
    });
    // Create array that contains changes
    $('#edit-form :input').each(function(index){
      var change = $(this).val();
      if(change.length) {
        if(!isNaN(change)) {
          var newValue = +$(this).val()
          changes[header_array[index]] = newValue;
          additions_array.push(newValue);
        } else {
          var newValue = $(this).val()
          changes[header_array[index]] = newValue;
          additions_array.push(newValue);
        }
      } else {
        additions_array.push(null);
      }
    });

    additions_array.push(header_array[header_array.length - 1]);

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
          table.row.add(additions_array).draw(false);
        }
      });
    }
  });

  $('#submit-add').on('click', function() {
    var headers = $("table tr:eq(0) td");
    var header_array = [];
    var addition = {};
    var original = {};
    var additions_array = [];

    headers.each(function() {
      header_array.push(this.innerHTML);
    });
    // Create array that contains changes
    $('#add-form :input').each(function(index){
      var input = $(this).val();

      if(input.length) {
        if(!isNaN(input)) {
          var newValue = +$(this).val()
          addition[header_array[index]] = newValue;
          additions_array.push(newValue);
        } else {
          var newValue = $(this).val()
          addition[header_array[index]] = newValue;
          additions_array.push(newValue);
        }
      } else {
        addition[header_array[index]] = null;
        additions_array.push(null);
      }
    });

    addition.Owner = user;
    additions_array.push(user);
    console.log(addition);
    console.log(additions_array);

    var tableName = $('#table-name')[0].innerHTML;
    $.ajax({
      "url": "http://localhost:3000/api/tables/crud/add/" + tableName,
      "type": "POST",
      "data": addition,
      success: function(result) {
        table.row.add(additions_array).draw(false);
      }
    });
  });
}

/**
 * Initializes and show a new DataTable
 * @param  {string} url API endpoint of data
 * @param  {array} data Array of additional data for API endpoint
 */
function initializeTable(url, data) {
  // Initializes DataTable
  table = $('#data-table').DataTable({
    "scrollX": true,
    "dom": 'frtip',
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
      table.search(this.value).draw();
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
