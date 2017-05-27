$(document).ready( function () {
  // Setup - add a text input to each footer cell
  $('#data-table tfoot th').each( function () {
      var title = $(this).text();
      $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
  });

  // mutiple select: https://datatables.net/extensions/select/examples/api/get.html
  var table = initializeTable(
    "http://localhost:3000/api/tables/processing",
    {
      "table": $('#table-name')[0].innerHTML
    });

  $('#adv-filter-button').on('click', function() {
    $('#adv-filter-form').empty();
    var headers = $("table tr:eq(0) td");
    var inputs = [];

    for (var ndx = 0; ndx < headers.length; ndx++) {
      // console.log(headers[ndx]);
      var header = headers[ndx];
      var row = document.createElement("div");
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

      row.className = "row";
      row.appendChild(col1);
      row.appendChild(col2);
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

      $("#adv-filter-form").append(row);
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
          console.log(request);

          table.destroy();
          table = initializeTable("http://localhost:3000/api/tables/filtering/" + tableName, request);
        }
      }
    });

    $('input[name="input-name"]').on('valid', function() {
      // Handle the submission of the form
      console.log('input-name');
    });
  });
});

function initializeTable(url, data) {
  var row = {};
  var selectedRow;

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
      table.search( this.value ).draw();
    }
  });

  // Apply the search for individual columns
  table.columns().every( function () {
      var that = this;
      // console.log(this.value);
      $( 'input', this.footer() ).on( 'keydown', function (ev) {
          if (ev.keyCode == 13) { // only search upon enter keypress (code 13)
          that
              .search( this.value )
              .draw();
       }
      } );
  } );

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
  return table;
}
