<?php include_once('./template/header.php'); ?>

<main id="lipodat_company">
  <div class="container">
    <div class="good_detail d-flex m-column">
      <div class="w-50 w-100-m good_detail_photo">
        <img src="./image/good_detail.png" alt="">
      </div>
      <div class="w-50 w-100-m">
        <div class="good_detail_info d-flex column">
          <div class="name d-flex j-c-s-b">
            <div>Сет Пекин</div>
            <div>690 ₽</div>
          </div>
          <div class="weight">
            <div class="mt-10px">1300гр</div>
          </div>
          <div class="consist mt-30px">
            <span>Состав:</span>
            <div class="mt-10px">Филадельфия лайт, Ролл Немо, Хот с окунем, Чикен хот, Запеченные маки с окунем, Запеченные маки с крабом</div>
          </div>
          <div class="kbju d-flex j-c-s-b mt-30px">
            <div class="kbju_item">
              <span>ккал</span>
              <div>1200</div>
            </div>
            <div class="kbju_item">
              <span>белки</span>
              <div>1200</div>
            </div>
            <div class="kbju_item">
              <span>жиры</span>
              <div>1200</div>
            </div>
            <div class="kbju_item">
              <span>углеводы</span>
              <div>1200</div>
            </div>
          </div>
        </div>
        <div class="d-flex j-c-c-m">
        <div class="quantity mt-50px mt-30px-m">
          <span>В корзину</span>
          <button class="minus" id="minus" onclick="quantityMinus()">-</button>
          <input type="hidden" value="1" name="quantity" id="quantity_input">
          <div id="quantity">1</div>
          <button class="plus" id="plus" onclick="quantityPlus()">+</button>
        </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include_once('./template/footer.php'); ?>