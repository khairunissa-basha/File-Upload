<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Upload file</title>
</head>
<body>
    <label for="file">Choose File</label>
    <input type="file" name="ufile" id="fileBtn">
    <!--<div style="width:12rem;height:12rem;background-color:aqua;"  id="msg"></div>-->
    <div id="image">
        
    </div>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(e){
            $("#fileBtn").change(function(){
                var file  =  $("#fileBtn").prop("files")[0];
                var form = new FormData();
                form.append("ufile",file);

                $.ajax({
                    url:"file_upload.php",
                    type:"post",
                    data:form,
                    contentType:false, //The contentType: false tells the server that the upcoming data is not a string.
                    processData:false, //The processData argument tells the browser not to convert the object data into url-encoded string.
                   success:function(result){
                       
                        $("#image").html(result);
                        
                    } 
                });
                console.log("click");
            });
            
                });
    </script>
</body>
</html>