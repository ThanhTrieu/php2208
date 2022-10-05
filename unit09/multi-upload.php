<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file</title>
</head>
<body>
    <form method="post" action="server/handle-multi-upload.php" enctype="multipart/form-data"> 
        <label for="upload">Chon file</label>
        <input multiple type="file" name="upload[]" id="upload"/>
        <br/>
        <button type="submit" name="btnUpload">Upload File</button>
    </form>
</body>
</html>