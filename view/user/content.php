
<body class="">

  <!-- Product Hot -->
  <div class="mx-auto max-w-screen-xl">
    <div class="flex justify-around items-center mb-7">
      <h2
        class="text-xl tracking-widest text-gray-900 pb-2 underline underline-offset-8 decoration-2 decoration-primary grow">
        SẢN PHẨM BÁN CHẠY
      </h2>
      <div class="space-x-3">
        <button class="bg-primary text-white p-2 px-3 rounded-3xl">ĐỒNG HỒ ĐEO TAY</button>
        <button class="bg-primary text-white p-2 px-3 rounded-3xl">ĐỒNG HỒ ĐEO TAY</button>
        <button class="bg-primary text-white p-2 px-3 rounded-3xl">ĐỒNG HỒ ĐEO TAY</button>
        <button class="bg-primary text-white p-2 px-3 rounded-3xl">ĐỒNG HỒ ĐEO TAY</button>
      </div>
    </div>
    <div class="grid mx-auto text-center grid-cols-4 gap-4 ">
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
    </div>
  </div>
  <!-- Product Hot End -->
  <!-- See more -->
  <a href="" class="flex relative mx-auto w-[358px] container text-center my-4">
    <span class="border rounded-3xl px-6 py-2">XEM THÊM SẢN PHẨM ĐỒNG HỒ ĐEO TAY
    </span>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
      class="w-6 h-6 absolute right-0 text-primary top-2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
    </svg>
  </a>
  <!-- See more  end-->

  <!-- Why choose us -->
  <div class="bg-gray-100">
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
  </div>
  <!-- Why choose us  end-->
</body>


