<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Upload file to folder file_upload</p>
    <form action="topic1_upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="fileupload"> <br><br>       
        <input type="submit" name="submit" value="Upload file">          
    </form>
    <?php
 
    if(isset($_POST['submit'])&&($_POST['submit'])){    
        if(move_uploaded_file($_FILES['fileupload']['tmp_name'],'./file_upload/'.date('d_m_Y_H_i_s').$_FILES['fileupload']['name']))
        {
            echo "upload file Successfully";
        }else{
            echo "Fail to upload";
        }
        
    }
    
    
    
    
    
    ?>
    
</body>
</html>