<?php include_once('./template/header.php'); ?>

<main id="lipodat_company">
  <div class="good_detail d-flex">
    <div class="w-50 good_detail_photo">
      <img src="./image/good_detail.png" alt="">
    </div>
    <div class="w-50">
      <div class="good_detail_info d-flex column">
        <div class="name d-flex j-c-s-b">
          <div>Сет Пекин</div>
          <div>690 ₽</div>
        </div>
        <div class="weight">
          <div class="mt-10px">1300гр</div>
        </div>
        <div class="consist mt-50px">
          <span>Состав:</span>
          <div class="mt-10px">Филадельфия лайт, Ролл Немо, Хот с окунем, Чикен хот, Запеченные маки с окунем, Запеченные маки с крабом</div>
        </div>
        <div class="kbju d-flex j-c-s-b mt-50px">
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
      <div class="quantity mt-50px">
        <span>В корзину</span>
        <button class="minus" id="minus">-</button>
        <div id="quantity">1</div>
        <button class="plus" id="plus">+</button>
      </div>
    </div>
  </div>
</main>

<?php include_once('./template/footer.php'); ?>