<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Roboto', sans-serif;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function chooseFile(fileInput) {
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image').attr('src', e.target.result);
                }
                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    </script>
</head>

<body class="lg:px-[100px] ">

    <div class="container mx-auto">
        <header class="w-full flex flex-col">
            <div class="flex py-[60px] w-full items-center justify-between">
                <div class="flex space-x-20">
                    <div class="flex justify-center space-x-5 items-center">
                        <img src="../../image/hethong.png" alt="">
                        <p>HÊ THỐNG CỬA HÀNG</p>
                    </div>
                    <div class="flex justify-center space-x-5 items-center">
                        <img src="../../image/hotling.png" alt="">
                        <p>1800 6785</p>
                    </div>
                </div>
                <div class="">
                    <img class="h-[60px] w-auto" src="../../image/logo.svg" alt="">
                </div>
                <div class="flex space-x-20">
                    <div class="flex items-center border border-purple-900 p-2 rounded-full">
                        <input type="text" name="search" class="outline-0 px-[10px]" placeholder="Tìm cc gì v?">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-black font-bold ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </div>
                    <div class="flex space-x-10 items-center">
                        <img src="../../image/user.svg" alt="">
                        <img src="../../image/wishlist.svg" alt="">
                        <button id="btnCart">
                            <img src="../../image/minicart.svg" alt="">
                        </button>
                    </div>
                </div>
            </div>

            <hr class="border-b-2 border-purple-900">
            <div class="flex justify-center">
                <div class="w-full py-[10px] flex justify-between items-center">
                    <div class="flex justify-center items-center relative w-full">
                        <ul class="flex justify-center space-x-[52px] items-center">
                            <li class="text-sm p-5 inline-block group">
                                <a href="index.php?act=home">
                                    <div class="flex justify-center items-center space-x-3">
                                        <img src="../../image/menu1.png" alt="">
                                        <p class="text-black font-bold">THƯƠNG HIỆU</p>
                                    </div>
                                </a>
                                <div class="grid grid-cols-4 w-full p-5 absolute top-full left-0 bg-white shadow-2xl mt-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:mt-0 transition-all duration-500 z--10">
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">THƯƠNG HIỆU BÁN CHẠY</li>
                                        <hr>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">ORIENT</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">PREDERIQUE CONSTANT</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">CERTINA</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">PARKER</li>
                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">ĐỒNG HỒ CAO CẤP</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">PREDERIQUE CONSTANT</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">ORIENT</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">PARKER</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">CERTINA</li>
                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                    </ul>

                                </div>
                            </li>
                            <li class="text-sm p-5 inline-block group">
                                <a href="index.php?act=home">
                                    <div class="flex justify-center items-center space-x-3">
                                        <img src="../../image/menu2.png" alt="">
                                        <p class="text-black font-bold">Đồng hồ</p>
                                    </div>
                                </a>


                                <div class="grid grid-cols-4 w-full p-5 absolute top-full left-0 bg-gray-200 mt-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:mt-0 transition-all duration-500 ">
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                    </ul>

                                </div>
                            </li>
                            <li class="text-sm p-5 inline-block group">
                                <a href="index.php?act=home">
                                    <div class="flex justify-center items-center space-x-3">
                                        <img src="../../image/menu3.png" alt="">
                                        <p class="text-black font-bold">Smartwatch</p>
                                    </div>
                                </a>


                                <div class="grid grid-cols-4 w-full p-5 absolute top-full left-0 bg-gray-200 mt-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:mt-0 transition-all duration-500 ">
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                    </ul>

                                </div>
                            </li>
                            <li class="text-sm p-5 inline-block group">
                                <a href="index.php?act=home">
                                    <div class="flex justify-center items-center space-x-3">
                                        <img src="../../image/menu4.png" alt="">
                                        <p class="text-black font-bold">Phụ kiện</p>
                                    </div>
                                </a>


                                <div class="grid grid-cols-4 w-full p-5 absolute top-full left-0 bg-gray-200 mt-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:mt-0 transition-all duration-500 ">
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                    </ul>

                                </div>
                            </li>
                            <li class="text-sm p-5 inline-block group">
                                <a href="index.php?act=home">
                                    <div class="flex justify-center items-center space-x-3">
                                        <img class="w-[18px] h-auto" src="../../image/menu5.png" alt="">
                                        <p class="text-black font-bold">Bút</p>
                                    </div>
                                </a>


                                <div class="grid grid-cols-4 w-full p-5 absolute top-full left-0 bg-gray-200 mt-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:mt-0 transition-all duration-500 ">
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                    </ul>

                                </div>
                            </li>
                            <li class="text-sm p-5 inline-block group">
                                <a href="index.php?act=home">
                                    <div class="flex justify-center items-center space-x-3">
                                        <img src="../../image/menu6.png" alt="">
                                        <p class="text-black font-bold">Tin tức</p>
                                    </div>
                                </a>


                                <div class="grid grid-cols-4 w-full p-5 absolute top-full left-0 bg-gray-200 mt-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:mt-0 transition-all duration-500 ">
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="border-b-1 border-gray-300">

            <div id="bodylast" class="min-h-[100vh] absolute inset-y-0">
            </div>
            <!-- Cart -->
            <div id="shoppingcart" class="fixed top-0 r-0 w-[500px] min-h-[100vh] absolute inset-y-0 right-[100%] bg-white">
                <div class="w-[500px] justify-items-end">
                    <div class="w-[500px] mx-auto h-10 border-b-2 flex">
                        <div class="mx-auto w-[90px] text-center border-b-4 border-[#662d91] text-xl font-semibold">Giỏ hàng</div>
                        <button id="closeCart">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                    </div>
                    <div class="w-[500px] mx-auto grid place-items-end">
                        <div class="min-h-[695px]">
                            <a href="#">
                                <div class="grid grid-cols-4 justify-items-end gap-3 border-b-2 p-1 m-2">
                                    <div class="col-span-1">
                                        <img src="https://galle.vn/media/catalog/product/cache/4eb977b9e79759bad481a70e526f1a23/r/e/re-av0006y-01_1546484306.png" alt="">
                                    </div>
                                    <div class="col-span-2">
                                        <h1 class="font-semibold">ĐỒNG HỒ NAM ORIENT STAR RE-AV0006Y00B</h1>
                                        <div class="my-5 flex">
                                            Số lượng:
                                            <div class="grid grid-cols-3 rounded-full border w-1/2 flex justify-items-center mx-5">
                                                <button>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                                                    </svg>
                                                </button>
                                                1
                                                <button>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="">20.638.000 ₫</div>
                                    </div>
                                    <div class="">
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="bg-gray-100 w-full">
                            <div class="flex justify-between px-10 py-5">
                                <div class="font-semibold">Tổng tiền hàng</div>
                                <div class="font-semibold">61.914.000 ₫</div>
                            </div>
                            <div class="px-10 py-5">
                                <button class="bg-[#662d91] hover:bg-[#662d99] text-white font-semibold w-full rounded-full py-2 my-1">Mua ngay</button>
                                <button class=" text-[#662d91] border border-[#662d91] font-semibold w-full rounded-full py-2">Tiếp tục mua sắm</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cart -->
        </header>
        <script>
            const btnCart = document.querySelector("#btnCart")
            const btnClose = document.querySelector("#closeCart")
            const shoppingCart = document.querySelector("#shoppingcart")
            console.log(shoppingCart.className);
            btnCart.addEventListener('click', function() {
                console.log("hehe");
                const openCart = shoppingCart.classList
                openCart.remove("right-[100%]")
                openCart.add("right-36")
                openCart.add("transition")
                document.querySelector("#bodylast").classList.add("bg-gray-600")
                document.querySelector("#bodylast").classList.add("w-[1400px]")
                document.querySelector("#bodylast").classList.add("opacity-25")
                document.querySelector("body").classList.add("overflow-hidden")
            })
            btnClose.addEventListener('click', function() {
                const closeCart = shoppingCart.classList
                closeCart.add("right-[100%]")
                closeCart.remove("right-36")
                document.querySelector("#bodylast").classList.remove("bg-gray-600")
                document.querySelector("#bodylast").classList.remove("w-[1400px]")
                document.querySelector("body").classList.remove("overflow-hidden")
            })
            document.querySelector("#bodylast").addEventListener('click', function() {
                console.log("hahahah");
                const closeCart = shoppingCart.classList
                closeCart.add("right-[100%]")
                closeCart.remove("right-36")
                document.querySelector("#bodylast").classList.remove("bg-gray-600")
                document.querySelector("#bodylast").classList.remove("w-[1400px]")
                document.querySelector("body").classList.remove("overflow-hidden")

            })
        </script>