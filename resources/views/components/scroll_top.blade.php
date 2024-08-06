<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: red;
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #b30000;
        }

        .scroll-top {
            position: fixed;
            bottom: 15px;
            right: 10px;
            opacity: 1;
            transition: all .5s ease-in-out;
            z-index: 99;
        }

        .btn-scroll-top {
            opacity: 0;
            background-color: #f00;
            color: #f8e3e3;
            border-radius: 50%;
            border: none;
            outline: none;
            width: 50px;
            height: 50px;
            cursor: pointer;
            transition: all .3s linear;
        }

        .btn-scroll-top:hover {
            background-color: #d80404;
        }

        .btn-scroll-top:hover i {
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="scroll-top" onclick="topFunction()">
        <button id="myBtn" class="btn-scroll-top">
            <i class="fa-solid fa-arrow-up"></i>
        </button>
    </div>
    <script>
        let mybutton = document.getElementById("myBtn");
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 20) {
                mybutton.style.opacity = "1";
            } else {
                mybutton.style.opacity = "0";
            }
        }

        function topFunction() {
            window.scroll({
                top: 0,
                left: 0,
                behavior: 'smooth'
            });
        }
    </script>
</body>

</html>
