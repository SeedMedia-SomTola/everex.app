<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modal</title>
    <link href="auto.css" rel="stylesheet">
    <script defer src="app.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *,
        *::after,
        *::before {
            box-sizing: border-box;
        }

        .btn-message {
            position: fixed;
            bottom: 14px;
            right: 20px;
            width: 50px;
            height: 50px;
            color: #fff;
            background: red;
            border-radius: 50%
        }

        .modal {
            position: fixed;
            top: 70%;
            left: 80%;
            transform: translate(-50%, -50%) scale(0);
            transition: 200ms ease-in-out;
            border: 1px solid black;
            border-radius: 10px;
            z-index: 10;
            background-color: white;
            width: 370px;
            max-width: 80%;
        }

        .modal.active {
            transform: translate(-50%, -50%) scale(1);
        }

        .modal-header {
            padding: 10px 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid black;
        }

        .modal-header .title {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .modal-header .close-button {
            cursor: pointer;
            border: none;
            outline: none;
            background: none;
            font-size: 2.25rem;
            font-weight: bold;
        }

        .modal-body {
            padding: 10px 15px;
        }

        .modal-body img{
            padding: 12px 5px;
            border: 1px solid red;
            border-radius: 50%
        }
        .modal-body p{
            margin-top: -10px;
        }
        /* .modal-body .text-run::after{
            content: '';
            position: absolute;
            left: 0;
            height: 100%;
            height: 10px;
            width: 100%;
            border-left: 2px solid red;
            animation: typing 1.5s steps(10) infinite;
        }

        @keyframes typing{
            100% {
                left: 100%;
                margin: 0 -35px 0 35px;
            }
        } */

        #overlay {
            position: fixed;
            opacity: 0;
            transition: 200ms ease-in-out;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, .5);
            pointer-events: none;
        }

        #overlay.active {
            opacity: 1;
            pointer-events: all;
        }

        .btn {
            padding: 10px 15px;
        }

        .btn button {
            margin-top: 30px;
            padding: 10px 5px;
            width: 48%;
        }

        .text-message{
            margin-left: 40px;
        }

        @media screen and (max-width: 767px) {
            .modal {
                top: 60%;
                left: 50%;
            }
        }

        @media screen and (min-width: 768px) and (max-width: 1023px){
            .modal {
                top: 60%;
                left: 75%;
            }
        }
        @media screen and (min-width: 1024px){
            .modal {
                top: 60%;
                left: 80%;
            }
        }
    </style>
</head>

<body>
    <button class="btn-message" data-modal-target="#modal"><i class="fa-solid fa-message"></i></button>
    <div class="modal" id="modal">
        <div class="modal-header">
            <div class="title"> <img src="{{ asset('assets/images/logo/Logo_white.png') }}" alt="" width="130" class=""></div>
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body relative">
            <img src="{{ asset('assets/images/logo/Logo_white.png') }}" alt="" width="40" class="">
            <p class="bg-gray-300 rounded-xl p-3 text-message"><span class="text-run">Hi there👋</span> <br>
                How can I help you?</p>
        </div>

        <div class="btn">
            <button class="bg-blue-500 rounded-md"><i class="fa-brands fa-telegram me-3"></i>Telegram</button>
            <button class="bg-red-500 rounded-md"><i class="fa-solid fa-phone me-3"></i>Call</button>
        </div>
    </div>
    <div id="overlay"></div>

    <script>
        const openModalButtons = document.querySelectorAll('[data-modal-target]')
        const closeModalButtons = document.querySelectorAll('[data-close-button]')
        const overlay = document.getElementById('overlay')

        openModalButtons.forEach(button => {
            button.addEventListener('click', () => {
                const modal = document.querySelector(button.dataset.modalTarget)
                openModal(modal)
            })
        })

        overlay.addEventListener('click', () => {
            const modals = document.querySelectorAll('.modal.active')
            modals.forEach(modal => {
                closeModal(modal)
            })
        })

        closeModalButtons.forEach(button => {
            button.addEventListener('click', () => {
                const modal = button.closest('.modal')
                closeModal(modal)
            })
        })

        function openModal(modal) {
            if (modal == null) return
            modal.classList.add('active')
            overlay.classList.add('active')
        }

        function closeModal(modal) {
            if (modal == null) return
            modal.classList.remove('active')
            overlay.classList.remove('active')
        }
    </script>
</body>

</html>
