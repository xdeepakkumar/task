<?php include"./include/_header.php"; ?>
  <div class="container">
    <h4 class="text-center p-3">Weekly Expence & Income Calculator</h4><hr>
    <p><a href="searchdata.php">search report</a></p>
    <div class="row">
        <div class="col s12 m8 l6">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date</th>
                    <th scope="col">Income</th>
                    <th scope="col">Expence</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- getting input -->
                    <form id="form-data">
                        <tr>
                            <div class="form-group">
                                <th scope="row">1</th>
                                <td>
                                    <input type="date" class="form-control mb-2 mr-sm-2" id="date" name="date1">
                                </td>
                                <td>
                                    <input type="number" class="form-control mb-2 mr-sm-2 input" id="income1" name="income1">
                                </td>
                                <td>
                                    <input type="number" class="form-control mb-2 mr-sm-2 input" id="expence1" name="expence1">
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <th scope="row">2</th>
                                <td>
                                    <input type="date" class="form-control mb-2 mr-sm-2 input" id="date2" name="date2">
                                </td>
                                <td>
                                    <input type="number" class="form-control mb-2 mr-sm-2 input" id="income2" name="income2">
                                </td>
                                <td>
                                    <input type="number" class="form-control mb-2 mr-sm-2 input" id="expence2" name="expence2">
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <th scope="row">3</th>
                                <td>
                                    <input type="date" class="form-control mb-2 mr-sm-2 input" id="date3" name="date3">
                                </td>
                                <td>
                                    <input type="number" class="form-control mb-2 mr-sm-2 input amt" id="income3" name="income3">
                                </td>
                                <td>
                                    <input type="number" class="form-control mb-2 mr-sm-2 input" id="expence3" name="expence3">
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <th scope="row">4</th>
                                <td>
                                    <input type="date" class="form-control mb-2 mr-sm-2 input" id="date4" name="date4">
                                </td>
                                <td>
                                    <input type="number" class="form-control mb-2 mr-sm-2  inputamt" id="income4" name="income4">
                                </td>
                                <td>
                                    <input type="number" class="form-control mb-2 mr-sm-2 input" id="expence4" name="expence4">
                                </td>
                            </div>
                        </tr>
                            <div class="form-group">
                            <tr>
                            <th scope="row">5</th>
                            <td>
                                <input type="date" class="form-control mb-2 mr-sm-2" id="date5" name="date5">
                            </td>
                            <td>
                                <input type="number" class="form-control mb-2 mr-sm-2 amt input" id="income5" name="income5">
                            </td>
                            <td>
                                <input type="number" class="form-control mb-2 mr-sm-2 input" id="expence5" name="expence5">
                            </td>
                            </tr>
                            </div>
                        <tr>
                        <div class="form-group">
                            <th scope="row">6</th>
                            <td>
                                <input type="date" class="form-control mb-2 mr-sm-2" id="date6" name="date6">
                            </td>
                            <td>
                                <input type="number" class="form-control mb-2 mr-sm-2 input" id="income6" name="income6">
                            </td>
                            <td>
                                <input type="number" class="form-control mb-2 mr-sm-2 input" id="expence6" name="expence6">
                            </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                            <th scope="row">7</th>
                            <td>
                                <input type="date" class="form-control mb-2 mr-sm-2 input" id="date7" name="date7">
                            </td>
                            <td>
                                <input type="number" class="form-control mb-2 mr-sm-2 input amt" id="income7" name="income7">
                            </td>
                            <td>
                                <input type="number" class="form-control mb-2 mr-sm-2 input" id="expence7" name="expence7">
                            </td>
                            </div>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align:right">Balance Amouunt</td>
                            <td colspan="2" style="font-weight:bold; text-align:center" id="result"></td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <button type="button" class="btn btn-primary px-5" id="submit-data" name="submit" style="margin-left:45%">Submit</button>
                            </td>
                        </tr>
                    </form>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        //calculation of Amnt_balance
        $("body").keyup(function(){
            var i7 = parseInt($("#income7").val());
            var e7 = parseInt($("#expence7").val());
            var i6 = parseInt($("#income6").val());
            var e6 = parseInt($("#expence6").val());
            var i5 = parseInt($("#income5").val());
            var e5 = parseInt($("#expence5").val());
            var i4 = parseInt($("#income4").val());
            var e4 = parseInt($("#expence4").val());
            var i3 = parseInt($("#income3").val());
            var e3 = parseInt($("#expence3").val());
            var i2 = parseInt($("#income2").val());
            var e2 = parseInt($("#expence2").val());
            var i1 = parseInt($("#income1").val());
            var e1 = parseInt($("#expence1").val());
            var r1 = i1+i2+i3+i4+i5+i6+i7;
            var r2 = e1+e2+e3+e4+e5+e6+e7;
            var r = r1-r2;
            $("#result").html(r);
        });
        //submitting data
        $("#submit-data").click(function(){
            $.ajax({
                url: "get-data.php",
                method: "POST",
                data: $("#form-data").serialize(),
                success: function(data){
                    if(data > 0){
                        alert("Data Added Sucessfully..");
                    }else{
                        
                    }
                }
            });
        }); 
    });
</script>
<?php require_once "./include/_bottom.php"; ?>