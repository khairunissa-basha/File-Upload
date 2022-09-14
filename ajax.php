<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">

        <div id="demo">
            <h3>Let Change this text by AJAX</h3>
        </div>
        <div id="demo1"></div>
        <div id="demo2"></div>
        <div id="demo3"></div>






        <!--<button class="btn btn-primary" onclick="load()">Change Content</button>-->
        <button class="btn btn-primary" id="change">Change Content</button>
        <button class="btn btn-primary" id="text">Get Text File Content</button>
        <button class="btn btn-primary" id="load">Load Text File Content</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        /*function load() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("demo").innerHTML = this.responseText;
            }
            xhttp.open("GET","text.php");
            xhttp.send();
        }*/
        $(document).on('click', "#change", function(e) {
            e.preventDefault();

            $.ajax({
                url: "data.php",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $("#data").html('');
                    $("#data1").html('');
                    $("#demo").html(data.car1);
                    $("#demo1").html(data.car2);
                    $("#demo2").html(data.car3);
                    $("#demo3").html(data.car4);

                    console.log(data);
                }

            });

            console.log("click");
        });
        
        
        $(document).ready(function() {
            $("#text").click(function() {
                $.ajax({
                    url: "text.txt",
                    async: false,
                    success: function(result) {
                        $("#demo").html(result);
                        $("#demo1").html('');
                        $("#demo2").html('');
                        $("#demo3").html('');
                    }
                });


            });
        });
        $(document).ready(function() {
            $("#load").click(function() {
                $("#demo").load('text.txt');
                $("#demo1").html('');
                $("#demo2").html('');
                $("#demo3").html('');
            });
        });
    </script>
</body>

</html>