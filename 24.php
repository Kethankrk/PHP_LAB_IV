<html>
    <body>
        <form method="POST" enctype="multipart/form-data">
            Select a file to upload: <br><br>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload File" name="submit">
        </form><br><br>
        <br><br>
        <?php
        $target_dir = "./";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.";
        }
        else {
            echo "No file selected .";
        }
        ?>
    </body>
</html>