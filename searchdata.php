<?php include"./include/_header.php"; ?>
<script>
    $(document).ready(function(){
        $("#search-btn").click(function(){
            var date1= $("#date1").val();
            var date2= $("#date2").val();
            $.ajax({
                url: "get-search-data.php",
                type: "POST",
                data:{dt1:date1, dt2:date2},
                success: function(data){
                    $("#table-data").html(data);
                }
            });
        });
    });
</script>
<div class="container">
    <h4 class="text-center p-2">Sales Reports</h4>
        <hr>
        <p><a href="index.php">home</a></p>
        <div class="row">
            <div class="col s12 m12 l6">
                <form class="form-inline" id="form-data">
                    <div class="form-group">
                    <input type="date" class="form-control mb-2 mr-sm-2" id="date1">
                    </div>
                    <div class="form-group">
                    <input type="date" class="form-control mb-2 mr-sm-2" id="date2">
                    </div>
                    <button type="button" class="btn btn-primary mb-2" id="search-btn">Search</button>
                </form>
                <div id="table-data">
                </div>
            </div>
        </div>
</div>