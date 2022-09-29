<?php include_once('./template/header.php'); ?>

<main id="lipodat_company">
  <div class="container">
    <div class="shop-cart d-flex column gap-30px">
      <div class="shop-cart-item">
        <div class="product d-flex a-i-c gap-15px">
          <div class="photo">
            <img src="./image/shop.png" alt="">
          </div>
          <div class="name">Сет Пекин</div>
        </div>
        <div class="quantity_shopCart d-flex">
          <button class="minus" id="minus" onclick="quantityMinus()">-</button>
          <input type="hidden" value="1" name="quantity" id="quantity_input">
          <div id="quantity">1</div>
          <button class="plus" id="plus" onclick="quantityPlus()">+</button>
        </div>
        <div class="price">1450₽</div>
        <div class="delete">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.3869 23.1841H5.79563C4.87337 23.1841 3.98888 22.8177 3.33675 22.1656C2.68462 21.5134 2.31825 20.6289 2.31825 19.7067V6.95631H1.15913C0.851706 6.95631 0.556878 6.83419 0.3395 6.61681C0.122122 6.39944 0 6.10461 0 5.79719C0 5.48977 0.122122 5.19494 0.3395 4.97756C0.556878 4.76019 0.851706 4.63806 1.15913 4.63806H6.95475V2.70001C6.98284 1.95847 7.3035 1.25825 7.84657 0.752542C8.38964 0.246835 9.11091 -0.0231839 9.85256 0.00156256H13.3299C14.0715 -0.0228761 14.7926 0.247247 15.3356 0.75289C15.8786 1.25853 16.1994 1.95857 16.2278 2.70001V4.63806H22.0234C22.3308 4.63806 22.6256 4.76019 22.843 4.97756C23.0604 5.19494 23.1825 5.48977 23.1825 5.79719C23.1825 6.10461 23.0604 6.39944 22.843 6.61681C22.6256 6.83419 22.3308 6.95631 22.0234 6.95631H20.8643V19.7067C20.8643 20.6289 20.4979 21.5134 19.8458 22.1656C19.1936 22.8177 18.3091 23.1841 17.3869 23.1841ZM4.6365 6.95631V19.7067C4.6365 20.0141 4.75862 20.3089 4.976 20.5263C5.19338 20.7437 5.48821 20.8658 5.79563 20.8658H17.3869C17.6943 20.8658 17.9891 20.7437 18.2065 20.5263C18.4239 20.3089 18.546 20.0141 18.546 19.7067V6.95631H4.6365ZM9.85256 2.31981C9.52105 2.31981 9.273 2.52034 9.273 2.70001V4.63806H13.9095V2.70001C13.9095 2.52034 13.6614 2.31981 13.3299 2.31981H9.85256ZM15.0686 17.3884C14.7612 17.3884 14.4664 17.2663 14.249 17.0489C14.0316 16.8316 13.9095 16.5367 13.9095 16.2293V11.5928C13.9095 11.2854 14.0316 10.9906 14.249 10.7732C14.4664 10.5558 14.7612 10.4337 15.0686 10.4337C15.376 10.4337 15.6709 10.5558 15.8883 10.7732C16.1056 10.9906 16.2278 11.2854 16.2278 11.5928V16.2293C16.2278 16.5367 16.1056 16.8316 15.8883 17.0489C15.6709 17.2663 15.376 17.3884 15.0686 17.3884ZM8.11388 17.3884C7.80646 17.3884 7.51163 17.2663 7.29425 17.0489C7.07687 16.8316 6.95475 16.5367 6.95475 16.2293V11.5928C6.95475 11.2854 7.07687 10.9906 7.29425 10.7732C7.51163 10.5558 7.80646 10.4337 8.11388 10.4337C8.4213 10.4337 8.71612 10.5558 8.9335 10.7732C9.15088 10.9906 9.273 11.2854 9.273 11.5928V16.2293C9.273 16.5367 9.15088 16.8316 8.9335 17.0489C8.71612 17.2663 8.4213 17.3884 8.11388 17.3884Z" fill="#0A0A0A"/>
          </svg>
        </div>
      </div>
    </div>
    <div class="chekout">
        <a href="">Оформить заказ</a>
      </div>
  </div>
</main>

<?php include_once('./template/footer.php'); ?>