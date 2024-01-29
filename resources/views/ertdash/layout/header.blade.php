@yield('main')

<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>Document</title> --}}
    <style>

        #adu{ 
            margin-top: -80px;
            margin-left: 50px;
            font-style: initial;
        }
        .fa{
            margin-left: 10px;
            margin-top: 7px;
        }
        /* .sticky {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 100;
        } */

        #myHeader{
            background-color:rgba(128, 0, 107, 1);
            color: white;
            text-align: center;
            padding: 20px;
        }

        /* .sticky+.content {
            padding-top: 102px;
        } */
    </style>
</head>

<body>
    <div class="header" id="myHeader">
        <span id="adu">
            <i class="float-end" style="font-size:20px;">Admin
                <i class="fa fa-user float-end" style="font-size:20px;"></i>
            </i>    
        </span> 
    </div>
    

<script>
    window.onscroll = function() {
        myFunction()
    };

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>


</body>

</html>
