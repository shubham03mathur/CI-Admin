<script>
var columns = [     
              {"db": "project", "dt": 0, "field": "project"},
              {"db": "first_name", "dt":1, "field": "first_name"},
              {"db": "last_name", "dt": 2, "field": "last_name"},
              {"db": "type", "dt": 3, "field": "type"},
              {"db": "status", "dt": 4, "field": "status"},
              {"db": "progress", "dt": 5, "field": "progress"},
              {"db": "remarks", "dt": 6, "field": "remarks"},
              {"db": "file", "dt": 7, "field": "file"},
              {"db": "started_at", "dt": 8, "field": "started_at"},    
              ];

$(document).ready(function() {
    var tableElement = $('#datatable-main');
    var exampleTable = tableElement.DataTable( {
        "processing": true,
        "ajax": {
            "type": "POST",
            "url": "dataTable.php",
            "data": {"table": "client_info", "primary_key": "id", "columns": columns}
        }
    });
});
</script>








