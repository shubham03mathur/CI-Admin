<script>
var columns = [     
              {"db": "project", "dt": 0, "field": "project"},
              {"db": "type", "dt": 1, "field": "type"},
              {"db": "status", "dt": 2, "field": "status"},
              {"db": "progress", "dt": 3, "field": "progress"},
              {"db": "remarks", "dt": 4, "field": "remarks"},
              {"db": "started_at", "dt": 5, "field": "started_at"},     
              ];

$(document).ready(function() {
    var tableElement = $('#datatable-main');
    var exampleTable = tableElement.DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "type": "POST",
            "url": "dataTable.php",
            "data": {"table": "client_info", "primary_key": "id", "columns": columns}
        }
    });
});
</script>