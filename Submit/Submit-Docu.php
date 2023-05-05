<!DOCTYPE html>
<html>

<head>
    <title>Upload File</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<style>
body {
    justify-content: center;
    min-height: 40px;
    background: #fff;
    margin-top: 50px;
    margin-left: 35%;
    margin-right: 50%;
}

h1 {
    margin-bottom: 50px;
    font-weight: bolder;
}

.container {
    height: 250px;
    width: 500px;
    background-color: #2694af;
}
</style>

<body>
    <h1>Upload Files</h1>

    <div class="container">

        </br>
        </br>

        <form action="upload.php" method="POST" enctype="multipart/form-data">

            <input type="file" name="file">
            <button type="submit" name="submit">UPLOAD</button>


        </form>

        </br>

        <form action="process.php" method="POST" enctype="multipart/form-data">

            <input type="file" name="file">
            <button type="submit" name="submit">UPLOAD</button>


        </form>

        </br>

        <form action="process.php" method="POST" enctype="multipart/form-data">

            <input type="file" name="file">
            <button type="submit" name="submit">UPLOAD</button>


        </form>

    </div>

</body>




</html>