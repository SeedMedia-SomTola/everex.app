<style>
    @keyframes fadeInUpRight {
        0% {
            transform: translate(100%, 100%);
            opacity: 0;
        }

        100% {
            transform: translate(0, 0);
            opacity: 1;
        }
    }

    @keyframes fadeOutUpRight {
        0% {
            transform: translate(0, 0);
            opacity: 1;
        }

        100% {
            transform: translate(100%, 100%);
            opacity: 0;
        }
    }

    .fade-in-up-right {
        animation: fadeInUpRight 0.5s ease-out;
    }

    .fade-out-up-right {
        animation: fadeOutUpRight 0.5s ease-in;
    }

    @media screen and (max-width: 360px) {
        #popup {
            right: 0;
        }
    }

    .logo_img img{
        padding: 12px 5px;
        border: 1px solid #f03a40;
        border-radius: 50%
    }

    #btn_toggle{
        background: #f03a40;
        width: 50px;
        height: 50px;
        position: fixed;
        bottom: 16px;
        right: 20px;
    }

</style>
<!-- Message -->
<div id="popup"
    class="fixed bottom-24 right-5 bg-[#ec1b23]/60 backdrop-blur-[60px] bg-opacity-100 border shadow-lg p-6 mx-auto max-w-[330px] sm:max-w-sm w-full hidden z-50 rounded-2xl">
    <div class="border-b">
        <div class="flex justify-between items-center mb-4 pb-2">
            <h2 class="text-[15px] md:text-xl font-semibold tracking-wider text-[#edbeb7]">
                <img src="{{ url('assets/images/logo/Logo_white.png') }}" alt="" class="w-20">
            </h2>
            <button id="closePopup" class="text-gray-600 hover:text-gray-900 focus:outline-none">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="#ffffff">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
    <div id="time" class="text-md text-center font-semibold text-white py-2"></div>
    <div class="flex logo_img">
        <img src="{{ url('assets/images/logo/Logo_white.png') }}" alt="logo" class="" width="40">
        <div id="loadingDots" class="flex space-x-2 justify-center items-center bg-white bg-opacity-0 ms-3 mt-3">
            <div class="h-2 w-2 bg-[#f03a40] rounded-full animate-bounce [animation-delay:-0.3s]"></div>
            <div class="h-2 w-2 bg-[#f03a40] rounded-full animate-bounce [animation-delay:-0.15s]"></div>
            <div class="h-2 w-2 bg-[#f03a40] rounded-full animate-bounce"></div>
        </div>
    </div>
    <div id="resultMessage" class="ml-9 px-5 py-3 -mt-2 rounded-2xl text-[12px] md:text-[14px] text-[#ffffff] tracking-wider">
        <p id="resultMessageOne" class="result-message"></p>
        <p id="resultMessageTwo" class="result-message"></p>
    </div>

    <div class="flex justify-be mt-7">
        <button type="button"
            class="w-full text-[14px] md:text-[16px] tracking-wider focus:outline-none text-white bg-[#f03a40] hover:tracking-widest transition-all duration-500 focus:ring-4 focus:ring-red-300 font-medium rounded-2xl py-2.5 me-2 mb-2"><i
                class="fa-brands fa-telegram me-2"></i>Telegram</button>
        <button type="button"
            class="w-full text-[14px] md:text-[16px] tracking-wider focus:outline-none text-white bg-[#6e3999] hover:tracking-widest transition-all duration-500 focus:ring-4 focus:ring-red-300 font-medium rounded-2xl py-2.5 me-2 mb-2"><i
                class="fa-solid fa-phone me-2"></i>Call</button>
    </div>
</div>

<!-- Button -->
<button id="btn_toggle" type="button"
    class="px-4 py-3 rounded-full z-50 text-white shadow-lg hover:bg-[#f03a40] focus:outline-none">
    <i class="fa-regular fa-message"></i>
</button>

<script>
    // pop up
    const popup = document.getElementById('popup');
    const toggleButton = document.getElementById('btn_toggle');
    const closeButton = document.getElementById('closePopup');

    toggleButton.addEventListener('click', function() {
        if (popup.classList.contains('hidden')) {
            popup.classList.remove('hidden');
            popup.classList.add('fade-in-up-right');
            popup.classList.remove('fade-out-up-right');
        } else {
            popup.classList.add('fade-out-up-right');
            setTimeout(() => popup.classList.add('hidden'), 500);
        }
    });

    closeButton.addEventListener('click', function() {
        popup.classList.add('fade-out-up-right');
        setTimeout(() => popup.classList.add('hidden'), 500);
    });


    // dot animated
    document.getElementById('btn_toggle').addEventListener('click', function() {
        const loadingDots = document.getElementById('loadingDots');
        const resultMessageOne = document.getElementById('resultMessageOne');
        const resultMessageTwo = document.getElementById('resultMessageTwo');

        loadingDots.style.display = 'flex';
        resultMessageOne.textContent = '';
        resultMessageTwo.textContent = '';
        resultMessage.style.background = '';


        setTimeout(function() {
            loadingDots.style.display = 'none';
            resultMessage.classList.add('border-2');
            resultMessageOne.textContent = 'Hi there👋.';
            resultMessageTwo.textContent = 'How can I help you?';
        }, 2000);
    });

    // time
    function formatTime(date) {
        let hours = date.getHours();
        let minutes = date.getMinutes();
        let ampm = hours >= 12 ? 'PM' : 'AM';

        hours = hours % 12;
        hours = hours ? hours : 12;
        minutes = minutes < 10 ? '0' + minutes : minutes;

        return `${hours}:${minutes} ${ampm}`;
    }
    const now = new Date();
    const formattedTime = formatTime(now);
    document.getElementById('time').innerText = formattedTime;
</script>
