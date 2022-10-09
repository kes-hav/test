<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akatsuki-Verse</title>
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="./sharingan.png">
</head>

<body>
    <div class="grid h-screen place-items-center">
        <div class="bg-gray-100 rounded-2xl  max-w-3xl items-center top-10">

            <!-- form -->
            <div class="md:w-full px-8 md:px-16">
                <div class=" flex justify-between">
                    <div>

                        <h2 class="font-bold text-2xl text-[#002D74] items-center">VERIFY OTP</h2>
                    </div>

                </div>

                <form action="#" class="flex flex-col gap-4" method="post" target="_self" id="login">
                    <input autofocus class="p-2 mt-8 rounded-xl border" type="number" name="otp" placeholder="Enter OTP"
                        required>
                    <div class="text-xs flex justify-between items-center text-[#002D74]">
                        <p>OTP sent to your mobile number.</p>
                    </div>
                    <button class="bg-[#002D74] rounded-xl text-white py-2 hover:scale-105 duration-300">
                        Verify</button>
                </form>


            </div>


        </div>
    </div>
</body>

</html>