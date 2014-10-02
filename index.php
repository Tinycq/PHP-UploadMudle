<!DOCTYPE html>
<html lang="zh-hans">

<head>
    <meta charset="UTF-8">
    <title>Upload</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="upload_box">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="file" />
            <span><a>点击选择文件(可以将文件拖到这个方框中上传)</a></span>
            <input type="submit" name="submit" value="上传" />
        </form>
    </div>
</body>

</html>