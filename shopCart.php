<?php include_once('./template/header.php'); ?>

<main id="lipodat_company">
  <div class="container">
    <div class="shop-cart d-flex column gap-30px">
      <div class="shop-cart-item">
        <div class="name">Сет Пекин 690₽</div>
        <div class="quantity d-flex">
          <button class="minus" id="minus" onclick="quantityMinus()">-</button>
          <input type="hidden" value="1" name="quantity" id="quantity_input">
          <div id="quantity">1</div>
          <button class="plus" id="plus" onclick="quantityPlus()">+</button>
        </div>
        <div class="photo"><img src="./image/good_detail.png" alt=""></div>
      </div>
    </div>
    <div class="chekout">
        <a href="">Оформить заказ</a>
      </div>
  </div>
</main>

<?php include_once('./template/footer.php'); ?>