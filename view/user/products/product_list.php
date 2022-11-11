
<body class="border border-red-600">
<hr class="mt-[-70px] border border-b-[1px] ">
<!-- Product Hot -->
<section class="content flex justify-between mt-[60px]">
    <aside class="filter w-[250px] ">
        <p class="w-full flex items-center">
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
            <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z"/>
        </svg>     -->
        <img src="../../../../../Du_an_1/asm_da1/image/funnel.svg" alt="">
        <span class="ml-4 mt-1">BỘ LỌC TÌM KIẾM</span>
        </p>
        <div class="list_filter">
            <ul class="">
                <li class="items-center border-y-[1px] border-slate-400 mt-2">
                    <a href="" class="flex justify-between items-center py-4">
                        THƯƠNG HIỆU 
                        <img src="../../../../../Du_an_1/asm_da1/image/down.svg" alt="">
                    </a>
                </li>
                <li class="items-center border-b-[1px] border-slate-400 mt-2">
                    <a href="" class="flex justify-between items-center py-4">
                        MỨC CHIẾT KHẤU
                        <img src="../../../../../Du_an_1/asm_da1/image/down.svg" alt="">
                    </a>
                </li>
                <li class="items-center border-b-[1px] border-slate-400 mt-2">
                    <a href="" class="flex justify-between items-center py-4">
                        MỨC GIÁ
                        <img src="../../../../../Du_an_1/asm_da1/image/down.svg" alt="">
                    </a>
                </li>
                <li class="items-center border-b-[1px] border-slate-400 mt-2">
                    <a href="" class="flex justify-between items-center py-4">
                        GIỚI TÍNH
                        <img src="../../../../../Du_an_1/asm_da1/image/down.svg" alt="">
                    </a>
                </li>
                <li class="items-center border-b-[1px] border-slate-400 mt-2">
                    <a href="" class="flex justify-between items-center py-4">
                    LOẠI DÂY
                        <img src="../../../../../Du_an_1/asm_da1/image/down.svg" alt="">
                    </a>
                </li>
                
                
                
                
            </ul>
        </div> <!--End .list_filter-->
    </aside> <!-- End .filter -->
    <div class="max-w-[800px] ">
        <div class="dong_ho_chinh_hang w-full bg-slate-200 h-[120px] text-center rounded-[25px]">
            <i class=" font-semibold leading-[120px]">
                Đồnh hồ nam chính hãng - Cao cấp - Giá cực tốt
            </i>
        </div> <!-- End .dong_ho_chinh_hang-->
        <div class="nav my-7 flex justify-between items-center">
            <ul class="flex space-x-4">
                <li><a class="hover:underline" href="">Trang Chủ</a> | </li>
                <li><a class="hover:underline" href="">Đồng hồ</a> | </li>
                <li><a class="hover:underline" href="">Giới tính đồng hồ</a> | </li>
                <li><a class="text-purple-900 underline" href="">Đồng hồ nam</a></li>
            </ul>
            <button class="flex justify-between items-center border border-purple-900 px-4 py-2 rounded-[20px]">
                Sản phẩm ưu tiên
                <img src="../../../../../Du_an_1/asm_da1/image/down.svg" alt="">
            </button>
        </div> <!-- End .nav-->
        <hr class="border border-b-[1px] border-slate-200">
    <div class="flex justify-around items-center mb-7">
        <!-- <h2
        class="text-xl tracking-widest text-gray-900 pb-2 underline underline-offset-8 decoration-2 decoration-primary grow">
        SẢN PHẨM BÁN CHẠY
        </h2> -->
        <div class="space-x-3">
        <button class="bg-primary text-white p-2 px-3 rounded-3xl">ĐỒNG HỒ ĐEO TAY</button>
        <button class="bg-primary text-white p-2 px-3 rounded-3xl">ĐỒNG HỒ ĐEO TAY</button>
        <button class="bg-primary text-white p-2 px-3 rounded-3xl">ĐỒNG HỒ ĐEO TAY</button>
        <button class="bg-primary text-white p-2 px-3 rounded-3xl">ĐỒNG HỒ ĐEO TAY</button>
        </div>
    </div>
    <div class="list_product grid mx-auto text-center grid-cols-3 gap-8 ">
        <?php foreach ($products as $key => $item): ?>

        <div class="group">
        <a href="./index.php?act=product_info&id=<?php echo $item["productId"]?>">
        <img src="../../image/<?php echo $item["productImage"] ?>" class="mb-10 group-hover:scale-105 duration-500" alt="">
        <div class="overflow-hidden relative flex flex-col justify-between">
            <div>
            <p class="font-semibold mb-1"><?php echo $item['productName']?></p>
            </div>
            <div>
            <p class="font-thin text-sm line-through my-1 text-black">Giá: <?php echo $item['productPrice']?> <u>đ</u></p>
            <p class="text-[19px] font-[500] text-primary mb-10 text-purple-900"><span class="text-sm">Giá KM:</span> <?php echo $item['productPrice']?> <u>đ</u></p>
            <a href=""
                class="bg-purple-900 ml-[-20px] text-white mt-2 p-2 px-3 w-52 left-12 rounded-3xl transform group-hover:bottom-0 group-hover:left-12 duration-300 absolute -bottom-16">THÊM
                VÀO GIỎ HÀNG</a>
            </div>
        </div>
        </a>
        </div>
        <?php endforeach ?>
    </div> <!--End .list_product-->
    </div>
</section> <!--End .content -->

<!-- Product Hot End -->

<a href="" class="see_more flex relative mx-auto w-[358px] container text-center my-4">
  <span class="border rounded-3xl px-6 py-2">XEM THÊM SẢN PHẨM ĐỒNG HỒ ĐEO TAY
  </span>
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
    class="w-6 h-6 absolute right-0 text-primary top-2">
    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
  </svg>
</a>
<!-- End .see_more-->

<!-- <div class="bg-gray-100">
  <div class="text-center">
    <h2  class="text-xl tracking-widest text-gray-900 pt-6 underline underline-offset-8 decoration-2 decoration-primary grow my-8">VÌ SAO CHỌN CHÚNG TÔI</h2>
  </div>
  <div class="grid grid-cols-4 container gap-6 mx-auto pb-6 font-bold text-xl tracking-wide">
    <div class="flex items-center justify-evenly">
      <img src="../../image/icon1.png" alt="">
      <span>100% SẢN PHẨM <br> CHÍNH HÃNG</span>
    </div>
    <div class="flex items-center">
      <img src="../../image/icon2.png" alt="">
      <span>MIỄN PHÍ <br>VẬN CHUYỂN</span>
    </div>
    <div class="flex items-center">
      <img src="../../image/icon3.png" alt="">
      <span>THAY PIN MIỄN PHÍ<br>TRỌN ĐỜI</span>
    </div>
    <div class="flex items-center">
      <img src="../../image/icon4.png" alt="">
      <span>HỖ TRỢ TRẢ GÓP<br> TRẢ GÓP 0%</span>
    </div>
  </div>
</div> -->
<!-- Why choose us  end-->
</body>


