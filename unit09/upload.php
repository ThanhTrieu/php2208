<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file</title>
</head>
<body>
    <?php
        $state = $_GET['state'] ?? null;
        $image = $_GET['img'] ?? null;
        define('PATH_IMAGE', 'uploads/');
    ?>
    
    <?php if($state === 'error_type'): ?>
        <p style="color:red"> Vui long nhap file la anh : png, jpeg, jpg</p>
    <?php endif; ?>

    <?php if($state === 'error'): ?>
        <p style="color:red"> Co loi xay ra, vui long thu lai sau</p>
    <?php endif; ?>

    <?php if($state === 'ok' && $image !== null): ?>
        <img src="<?= PATH_IMAGE . $image ?>" />
    <?php endif; ?>


    <form method="post" action="server/handle-upload.php" enctype="multipart/form-data"> 
        <label for="upload">Chon file</label>
        <input type="file" name="upload" id="upload"/>
        <br/>
        <button type="submit" name="btnUpload">Upload File</button>
    </form>
</body>
</html>