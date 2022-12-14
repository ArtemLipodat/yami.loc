<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./scss/desktop.css">
  <link rel="stylesheet" href="./scss/mobile.css">
  <link rel="stylesheet" href="./scss/helper.css">
  <link rel="stylesheet" href="./scss/hover.css">
  <link rel="stylesheet" href="./scss/peppermint.required.css">
  <link rel="stylesheet" href="./scss/peppermint.suggested.css">
  <link rel="stylesheet" href="./scss/owl.carousel.min.css">
  <link rel="stylesheet" href="./scss/owl.theme.default.css">
  <link rel="stylesheet" href="../scss/iziModal.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="./js/iziModal.min.js"></script>
  <script src="./js/owl.carousel.min.js"></script>
  <script src="./js/peppermint.min.js"></script>
  <title>Yami18</title>
</head>
<body>
  <div class="container">
    <div id="drop" class="drop_menu">
        <div id="close" class="close">
          <svg width="63" height="55" viewBox="0 0 63 55" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="14.0002" y="41.3262" width="43" height="5" rx="2.5" transform="rotate(-43 14.0002 41.3262)" fill="#1C1C1C"/>
            <rect x="17.4099" y="12.001" width="43" height="5" rx="2.5" transform="rotate(43 17.4099 12.001)" fill="#1C1C1C"/>
            <rect x="0.5" y="0.5" width="62" height="54" rx="9.5" stroke="black"/>
          </svg>
        </div>
        <span>МЕНЮ</span>
        <ul class="mt-10px">
          <li><a href="">Главная страница</a></li>
          <li><a href="">Европейские роллы</a></li>
          <li><a href="">Горячие роллы</a></li>
          <li><a href="">Суши и гунканы</a></li>
          <li><a href="">Пицца</a></li>
          <li><a href="">Сеты</a></li>
          <li><a href="">Закуски</a></li>
          <li><a href="">Напитки</a></li>
          <li><a href="#delivery">Условия доставки</a></li>
          <li><a href="#seels">Акции</a></li>
          <li><a href="#advantages">Наши преимущества</a></li>
        </ul>
        <div class="mt-50px pb-50px volny">
          <img src="./image/volny.png" alt="">
        </div>
    </div>
    <header class="header">
      <div id="menu" class="header_munu">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="5" y="7" width="14" height="1.5" rx="0.75" fill="#0A0A0A"/>
          <rect x="5" y="11.5" width="14" height="1.5" rx="0.75" fill="#0A0A0A"/>
          <rect x="5" y="16" width="14" height="1.5" rx="0.75" fill="#0A0A0A"/>
          <rect x="0.5" y="0.5" width="23" height="23" rx="4.5" stroke="black"/>
        </svg>
      </div>
      <div class="header_logo">
        <a href="/"><img class="hvr-bob" src="./image/logo.svg" alt=""></a>
      </div>
      <div class="header_soc_icon">
        <div class="soc_vk">
          <a class="hvr-bob" href="https://vk.com/yamiyami_18" target="_blank">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3 6.64789C3 5.84278 3.48024 5.05179 4.04941 5.00941H6.65679C6.81686 5.00941 6.98419 5.6309 7.03755 5.82159C7.64229 8.15218 8.38933 9.5929 9.27866 11.2243C9.33202 11.3514 9.42095 11.415 9.50988 11.415C9.58103 11.415 9.65217 11.3726 9.70553 11.2667L9.75889 11.0336L9.77668 7.36825C9.77668 6.83857 9.56324 6.75382 9.06522 6.66908C8.86957 6.6267 8.74506 6.41483 8.74506 6.20296C8.74506 6.16058 8.74506 6.11821 8.76285 6.07583C9.01186 5.16479 9.77009 5.00941 10.8729 5.00941H11.8847C12.7029 5.00941 13.4585 5.10123 13.4585 6.35127V11.1608C13.5296 11.2243 13.6008 11.2667 13.6897 11.2667C13.832 11.2667 14.0099 11.1608 14.1522 10.8853C15.0771 9.33866 16.1265 7.49537 16.2688 6.52077C16.2688 6.47839 16.2866 6.4572 16.3043 6.41483C16.5 5.94871 16.8992 5.09417 17.1126 5.00942C17.1482 4.98823 17.3788 5.00942 17.4499 5.00942L20.1482 5.00942H20.253C20.5198 5.00942 20.7339 5.62227 20.8228 5.81296C20.9117 6.00364 20.9914 6.41562 21 6.66908V6.81739C20.7332 8.74542 18.8834 10.9065 18.1008 12.3049C17.9941 12.4744 17.9407 12.6227 17.9407 12.771C17.9407 12.8981 17.9941 13.0252 18.083 13.1523L20.6798 17.0508C20.8221 17.2838 20.8933 17.5593 20.8933 17.7923C20.8933 18.4915 20.3419 18.8941 19.8083 18.9576L19.5059 18.9788H16.8024C16.749 18.9788 16.7134 19 16.6601 19C16.3577 19 16.1087 18.8093 15.9308 18.5974C15.3617 17.7711 14.8103 16.9237 14.2589 16.0974C14.1522 15.9279 14.1166 15.9067 14.0099 15.8219C13.8854 16.4364 13.7787 17.072 13.6542 17.7076L13.6008 18.0678C13.5119 18.4491 13.2806 18.8517 12.8538 18.9576L12.6047 18.9788H10.8617C7.78458 18.9788 5.02767 13.7668 3.08893 7.26232C3.03557 7.09282 3 6.85976 3 6.64789ZM13.6897 12.1354C13.2273 12.1354 12.7115 11.8176 12.7115 11.2243V6.35127C12.7115 5.77921 12.4717 5.81296 11.8847 5.81296H10.8729C10.3037 5.81296 10.1278 5.80197 9.861 6.01384C10.2701 6.2469 10.5237 6.47839 10.5237 7.36825V11.0972C10.4704 11.8387 9.95455 12.326 9.45652 12.326C9.11858 12.326 8.81621 12.093 8.63834 11.7116C7.83794 10.2709 7.16206 8.91491 6.5751 6.9657L6.3195 5.82159H4.04941C3.72925 5.82159 3.76482 6.41483 3.76482 6.60551C3.76482 6.73264 3.78261 6.90213 3.8004 7.00807L4.17391 8.19455C6.11265 14.1693 8.54941 18.089 10.8617 18.089H12.6403C12.8893 18.089 12.8715 17.7288 12.9249 17.5169L13.2628 15.6524C13.334 15.4617 13.3874 15.2922 13.5119 15.1439C13.6542 14.9744 13.8142 14.9109 13.9743 14.9109C14.3123 14.9109 14.6324 15.2287 14.8458 15.5253L16.3577 17.8135C16.4822 18.0466 16.5889 18.089 16.6601 18.089H19.5949C19.8794 18.089 20.1285 17.983 20.1285 17.7711C20.1285 17.7076 20.1107 17.6228 20.0751 17.5593L17.496 13.7244C17.2826 13.4066 17.1937 13.0888 17.1937 12.771C17.1937 12.432 17.3004 12.093 17.4783 11.7964C18.2253 10.4616 19.8261 8.55473 20.1996 6.98688L20.253 6.71145C20.3169 6.41562 20.3169 6.01384 20.1996 5.81296H17.4499C17.2721 5.89771 17.1047 6.6267 16.998 6.7962L16.8913 7.19875C16.4822 8.55473 15.3617 10.4192 14.5613 11.7116C14.2945 12.0082 13.9921 12.1354 13.6897 12.1354Z" fill="black"/>
              <rect x="0.5" y="0.5" width="23" height="23" rx="4.5" stroke="black"/>
            </svg>
          </a>
        </div>
        <div class="soc_phone">
          <a class="hvr-bob" href="tel:232238">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M17.3852 19H17.2937C6.71681 18.3915 5.21505 9.46385 5.00513 6.73923C4.98821 6.52739 5.01325 6.31429 5.0788 6.11214C5.14435 5.91 5.24914 5.72278 5.38714 5.56121C5.52515 5.39965 5.69367 5.26691 5.88304 5.17061C6.07241 5.0743 6.27892 5.01633 6.49073 5H9.45657C9.67217 4.99979 9.88287 5.06435 10.0614 5.18532C10.2399 5.30628 10.378 5.47808 10.4577 5.67846L11.2759 7.69231C11.3547 7.88806 11.3742 8.10266 11.3321 8.30943C11.29 8.51621 11.1881 8.70605 11.0391 8.85539L9.89256 10.0131C10.0716 11.0312 10.559 11.9697 11.2888 12.7016C12.0185 13.4335 12.9553 13.9235 13.9726 14.1054L15.1406 12.9477C15.2921 12.8002 15.4837 12.7007 15.6914 12.6614C15.8991 12.6222 16.1138 12.6449 16.3087 12.7269L18.3379 13.54C18.5352 13.6223 18.7035 13.7615 18.8214 13.9399C18.9393 14.1183 19.0015 14.3277 19 14.5415V17.3846C19 17.813 18.8298 18.2239 18.527 18.5269C18.2242 18.8298 17.8135 19 17.3852 19ZM6.61992 6.07692C6.47716 6.07692 6.34025 6.13365 6.23931 6.23464C6.13836 6.33562 6.08165 6.47258 6.08165 6.61539V6.65846C6.32925 9.84615 7.91713 17.3846 17.3529 17.9231C17.4236 17.9275 17.4945 17.9178 17.5615 17.8947C17.6284 17.8716 17.6902 17.8355 17.7432 17.7885C17.7962 17.7415 17.8394 17.6845 17.8704 17.6207C17.9013 17.5569 17.9193 17.4877 17.9234 17.4169V14.5415L15.8942 13.7285L14.3494 15.2631L14.091 15.2308C9.40812 14.6438 8.77297 9.95923 8.77297 9.91077L8.74067 9.65231L10.2693 8.10692L9.46195 6.07692H6.61992Z" fill="black"/>
              <rect x="0.5" y="0.5" width="23" height="23" rx="4.5" stroke="black"/>
            </svg>
          </a>
        </div>
      </div>
    </header>
  </div>