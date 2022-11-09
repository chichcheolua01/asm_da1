<?php
$id = $_GET['id'];
$one_item_query = "SELECT * FROM products WHERE productId = $id";
$item = getOne($one_item_query);
?>
<div class="p-10">
    <div class="flex space-x-10 items-center mb-10">
        <a href="./index.php"><h2 class="font-sans">Trang chủ </h2></a> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
        <h2 class=""><?php echo $item["productName"] ?></h2>
    </div>
    <div class="grid grid-cols-3">
        <div  class="flex flex-col items-center space-y-10">
            <div>
                <img src="../../image/<?php echo $item["productImage"] ?>" alt="">
            </div>
            <div class="flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <p><?php echo $item['productView'] ?> lượt xem </p>
            </div>
        </div>
        <div>
            <h3 class="font-bold text-2xl">
                <?php echo $item["productName"]?>
            </h3>
            <br>
            <hr class="border-b-1 border-gray-300">
        </div>
        

    </div>
</div>