<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thong bao sinh nhat</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <h2 class="text-center my-3">Thong bao sinh nhat</h2>
                <form class="p-3 border" action="server/handle-birthday.php" method="post">
                    <div class="mb-3">
                        <label for="birthday">Nhap ngay thang nam sinh</label>
                        <input type="date" class="form-control" id="birthday" name="birthday"/>
                    </div>
                    <button class="btn btn-primary" type="submit" name="btnSubmit"> Kiem tra</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>