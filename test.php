<!-- php -->
<?php
include 'config.php';


?>
<!-- html -->
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./style.css">
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Compressed CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/css/foundation.min.css">
    <!-- Compressed JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/vendor/jquery.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.1/dist/js/foundation.min.js">
    </script>
    <title>Akatsuki-Verse</title>
    <link rel="icon" href="./sharingan.png">

</head>

<body>

    <nav
        class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="" class="flex items-center">
                <img src="./sharingan.png" class="mr-3 h-6 sm:h-9" alt="">
                <span
                    class="self-center text-xl font-semibold whitespace-nowrap dark:text-red-400 ">Akatsuki-Verse</span>
            </a>


            <button id="nav" data-collapse-toggle="navbar-sticky" type="button"
                class=" flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden  items-center w-full md:flex md:w-auto md:order-1 z-0" id="navbar-sticky">

                <ul
                    class="flex flex-col p-4 mb-1 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-white bg-red-700 rounded md:bg-transparent md:text-red-700 md:p-0 dark:text-white"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>

                </ul>
                <div class="flex justify-center">
                    <button id="delete-btn" type="button"
                        class="flex ml-2 mr-4 justify-end text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                        data-open="modal1">Log in</button>
                    <button id="delete-btn" type="button"
                        class="flex ml-2 mr-4 justify-end text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                        data-open="modal2">Get started</button>


                </div>


            </div>

        </div>
        <script>
        const btn = document.querySelector("#nav");
        const menu = document.querySelector("#navbar-sticky");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
        </script>





    </nav>


    <!-- login form -->
    <div class="reveal bg-gray-100 rounded items-center justify-center" id="modal1" data-reveal>
        <!-- <section class="bg-gray-100 rounded-md flex items-center justify-center z-50 lg-shadow"> -->
        <!-- login container -->
        <div class="bg-gray-100 flex rounded-2xl  max-w-3xl items-center flex justify-center">

            <!-- form -->
            <div class="md:w-full px-8 md:px-16">
                <div class="flex justify-between">
                    <h2 class="font-bold text-2xl text-[#002D74] ">LOGIN</h2>

                    <!-- <button class="" id="close-modal">
                           <svg class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-300 rounded-full"  fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                       
                        
                        </button> -->
                </div>



                <form action="#" class="flex flex-col gap-4" method="post" target="_self">
                    <input autofocus class="p-2 mt-8 rounded-xl border" type="text" name="username"
                        placeholder="Username" required>
                    <div class="relative">
                        <input class="p-2 rounded-xl border w-full" type="password" name="password"
                            placeholder="Password" id="" required>

                    </div>
                    <button class="bg-[#002D74] rounded-xl text-white py-2 hover:scale-105 duration-300">Login</button>
                </form>

                <div class="mt-6 grid grid-cols-3 items-center text-gray-400">
                    <hr class="border-gray-400">
                    <p class="text-center text-sm">OR</p>
                    <hr class="border-gray-400">
                </div>

                <button
                    class="bg-white border py-2 w-full rounded-xl mt-5 flex justify-center items-center text-sm hover:scale-105 duration-300 text-[#002D74]">
                    <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="25px">
                        <path fill="#FFC107"
                            d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z" />
                        <path fill="#FF3D00"
                            d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z" />
                        <path fill="#4CAF50"
                            d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z" />
                        <path fill="#1976D2"
                            d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z" />
                    </svg>
                    Login with Google
                </button>
                <!-- f password -->
                <!-- <div class="mt-5 text-xs border-b border-[#002D74] py-4 text-[#002D74]">
                        <a href=" #">Forgot your password?</a>
                    </div> -->

                <div class="mt-3 text-xs flex justify-between items-center text-[#002D74]">
                    <p>Don't have an account?</p>
                    <button class="py-2 px-5 mx-2 bg-white border rounded-xl hover:scale-110 duration-300"
                        data-open="modal2">Register</button>
                </div>
            </div>


        </div>
        <!-- <script>
                    window.addEventListener('DOMContentLoaded', () => {
                        const overlay = document.querySelector('#overlay')
                        const delBtn = document.querySelector('#delete-btn')
                        const closeBtn = document.querySelector('#close-modal')

                        const toggleModal = () => {
                            overlay.classList.toggle('hidden')
                            overlay.classList.toggle('flex')
                        }

                        delBtn.addEventListener('click', toggleModal)

                        closeBtn.addEventListener('click', toggleModal)
                    })
                </script> -->
        </section>
        <!-- 
            <button class="button" data-open="modal2">
			Reveal second modal
			</button> -->
        <button class="close-button" data-close type="button" id="cbtn1">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <!-- Registration form -->
    <div class="reveal bg-gray-100 rounded items-center justify-center" id="modal2" data-reveal>
        <div class="bg-gray-100 flex rounded-2xl  max-w-3xl items-center flex justify-center">

            <!-- form -->
            <div class="md:w-full px-8 md:px-16">
                <div class="flex justify-between">
                    <h2 class="font-bold text-2xl text-[#002D74] ">REGISTER</h2>

                    <!-- <button class="" id="close-modal">
                           <svg class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-300 rounded-full"  fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                       
                        
                        </button> -->
                </div>


                <script>
                let btnClear = document.querySelector('#cbtn');
                let btnClear1 = document.querySelector('#cbtn1');
                let inputs = document.querySelectorAll('input');
                btnClear.addEventListener('click', () => {
                    inputs.forEach(input => input.value = '');
                });
                btnClear1.addEventListener('click', () => {
                    inputs.forEach(input => input.value = '');
                });
                </script>
                <form action="" class="flex flex-col gap-4 " method="post" target="_self">
                    <input class="p-2 mt-8 rounded-xl border" type="text" name="username" placeholder="Username"
                        required autofocus>
                    <div class="relative">
                        <input class="p-2 rounded-xl border w-full" type="password" name="password"
                            placeholder="Password" id="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                            required>
                    </div>
                    <div class="relative ">
                        <input class="p-2 rounded-xl border w-full " type="password" name="confirm_password"
                            placeholder="Confirm Password" id="confirm_password" required>


                    </div>
                    <script>
                    var password = document.getElementById("pass"),
                        confirm_password = document.getElementById("confirm_password");

                    function validatePassword() {
                        if (password.value != confirm_password.value) {
                            confirm_password.setCustomValidity("Password Don't Match");
                        } else {
                            confirm_password.setCustomValidity('');
                        }
                    }

                    password.onchange = validatePassword;
                    confirm_password.onkeyup = validatePassword;
                    </script>
                    <button
                        class=" bg-[#002D74] rounded-xl text-white py-2 hover:scale-105 duration-300 ">Register</button>
                </form>

                <div class="mt-6 grid grid-cols-3 items-center text-gray-400 ">
                    <hr class="border-gray-400 ">
                    <p class="text-center text-sm ">OR</p>
                    <hr class="border-gray-400 ">
                </div>


                <!-- f password -->
                <!-- <div class="mt-5 text-xs border-b border-[#002D74] py-4 text-[#002D74] ">
                        <a href=" # ">Forgot your password?</a>
                    </div> -->

                <div class="mt-3 text-xs flex justify-between items-center text-[#002D74] ">
                    <p>Already have an account?</p>
                    <button class="py-2 px-5 mx-2 bg-white border rounded-xl hover:scale-110 duration-300 "
                        data-open="modal1 ">Log in</button>
                </div>
            </div>


        </div>
        <button class="close-button " data-close type="button " id="cbtn ">
            <span aria-hidden="true ">×</span>
        </button>
    </div>

    <script>
    $(document).ready(function() {
        $(document).foundation();
    })
    </script>

    <!-- Hero Section -->

</body>

</html>