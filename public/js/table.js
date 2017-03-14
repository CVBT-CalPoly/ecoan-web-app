$(document).ready( function () {
   $('#data-table').DataTable({
      "scrollX": true,
      "dom": 'Bfrtip',
      "buttons": [
            'print'
      ],
      "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 1, 'asc' ]]
   });
   $('#data-table-container').fadeIn("fast");
} );

$(document).on("click", "#delete-button", function(e) {
  var data = $(this).attr('row-num');
  var row = $(this).closest('tr');
  alert ("delete pressed: " + data);
  // console.log(tr);
  // alert ("delete pressed: " + tr);
  var fillData = {};
  row.find('td').each(function(){
    var id = ($(this).attr('id'));
    if(id !== undefined) {
      fillData[id] = $(this).text();
    }
  });
  // console.log(fillData);
  $.ajax({
    type: "POST",
    data :JSON.stringify(fillData),
    url: "http://localhost:3000/api/tables/crud/delete/prodhist",
    contentType: "application/json",
    success: function(d){
      console.log(d);
    }
  });
});
