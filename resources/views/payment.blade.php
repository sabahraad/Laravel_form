<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
                        <form class="row g-3" action= "/raad" method="post">
                            @csrf
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">amount</label>
                            <input type="amount" name="amount" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">currency</label>
                            <input type="password" name="currency"  class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">desc</label>
                            <input type="text" name="desc" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">cus_name</label>
                            <input type="text" name="cus_name"  class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">cus_email</label>
                            <input type="text" name="cus_email" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" name="currency" class="form-label">cus_add1</label>
                            <input type="text" name="cus_add1" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">cus_add2</label>
                            <input type="text" name="cus_add2" class="form-control" id="inputZip">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" name="currency" class="form-label">cus_city</label>
                            <input type="text" name="cus_city" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" name="currency" class="form-label">cus_state</label>
                            <input type="text" name="cus_state" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" name="currency" class="form-label">cus_country</label>
                            <input type="text" name="cus_country" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" name="currency" class="form-label">cus_phone</label>
                            <input type="text" name="cus_phone" class="form-control" id="inputCity">
                        </div>
                        <input type="hidden" name="status" id="statusId" value=0 >
                        <div class="col-12">
                            <button type="submit" onclick="change()" class="btn btn-primary">PAY</button>
                            
                            <script>
                                function change() {
                                    document.getElementById("statusId").value = 1;
                                }
                                
                            </script>
                        </div>
                        </form>
</body>
</html>