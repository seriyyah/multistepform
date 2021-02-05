<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="/css/style.css">
<body>

<form id="regForm" novalidate action="send_mail.php"  method="post"">
  <h1>Квиз Форма</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Предполагаемая стоимость кухни
  <label for="price"></label>
  <select name="price" id="price">
    <option value="100000">До 100 000 руб.</option>
    <option value="100000-125000">от 100 000 руб. до 125 000 руб.</option>
    <option value="125000-150000">от 125 000 руб. до 150 000 руб.</option>
    <option value="150000-200000">от 150 000 руб. до 200 000 руб.</option>
    <option value="200000-250000">от 200 000 руб. до 250 000 руб.</option>
    <option value="250000">Свыше 250 000 руб.</option></select>
  </select>
  
  
  </div>
  <div class="tab">Выбор модели
    <select name="img_swap_id" id="img_swap_id">
                  <option value="Выберите" data-img="/img/i101.png">Выберите модель</option>
									<option value="Мисури" data-img="/img/4346488ace4261a74fbddf32da32e34f.jpg"> Мисури</option>
									<option value="Алегри" data-img="/img/bc0b224a72d5ee487d969e477dc04ca6.jpg">Алегри</option>
									<option value="Алиери" data-img="/img/8fdc3481f60958776e06e2b7dea270a3.jpg">Алиери</option>
									<option value="Альп" data-img="/img/bf88556412adf3238a52f65f0e8c8f14.jpg">Альп</option>
									<option value="Арли" data-img="/img/4e8fd8c7a4f103ea4f9be36db2010ca1.jpg">Арли </option>
									<option value="Астория" data-img="/img/7ded5ee953d893505653c198421eadfc.jpg">Астория</option>
									<option value="Астра" data-img="/img/176e2c971fc6244ca76e2452be4ba1bb.jpg">Астра</option>
									<option value="Валенсия" data-img="/img/f926f59ba768d694b23b7730848783e3.jpg">Валенсия</option>
									<option value="Валерия" data-img="/img/4ea545e90b923d1b1bdc8736264ab596.jpg">Валерия</option>
									<option value="Вальда" data-img="/img/01c403b4e9fb7903d9c2b4fa66ce34c7.jpg">Вальда</option>
									<option value="Вальс" data-img="/img/e1b790303447ea5af389fa8f549e5d2f.jpg">Вальс</option>
									<option value="Ванесса" data-img="/img/8785981dd9ff040a26b75700de7d83a7.jpg">Ванесса</option>
									<option value="Ванкувер" data-img="/img/eec982c8335a602f39fe58f294866c69.jpg">Ванкувер</option>
									<option value="Варадеро" data-img="/img/e782543a7cf785a8b0c904b003299935.jpg">Варадеро</option>
									<option value="Варвара" data-img="/img/0e9132f87aea38268b0b7a428a1eb2a3.jpg">Варвара</option>
									<option value="Вармия" data-img="/img/e4cd2c80059d9a33c5fee2c2470459ed.jpg">Вармия</option>
									<option value="Варна" data-img="/img/6824fe4b850b92542f6e06ab1b426d3d.jpg">Варна</option>
									<option value="Веда" data-img="/img/172d22ac3d1820a03542116dfa2670b6.jpg">Веда</option>
									<option value="Вектор" data-img="/img/0e570fdb9d87fdb5aeb4b6b5b0339c9c.jpg">Вектор</option>
									<option value="Велла" data-img="/img/52e5a0e4d80dcf883c1c6fd8331aa33b.jpg">Велла</option>
									<option value="Вельвет" data-img="/img/57e3a381c53eafacf92634749a18dc82.jpg">Вельвет</option>
									<option value="Верже" data-img="/img/a5a90a3c8f9b5ea3875f6b73ca01cbda.jpg">Верже</option>
									<option value="Вермонт" data-img="/img/643ac658bffa0e3eebe09e650aa65683.jpg">Вермонт</option>
									<option value="Вернисаж" data-img="/img/fc11c00bf445ad4b2d9eee9eb6c370cd.jpg">Вернисаж</option>
									<option value="Визит" data-img="/img/819bc70439fb68b40554e26b7e777c9f.jpg">Визит</option>
									<option value="Вика" data-img="/img/52cee8b14182d5387d1a135ed95db57d.jpg">Вика</option>
									<option value="Викинг" data-img="/img/7a3f55d4393a73625e30258483df867c.jpg">Викинг</option>
									<option value="Вилладжио" data-img="/img/ae200648f08330cefcc3e2d7069c50aa.jpg">Вилладжио</option>
									<option value="Вильям" data-img="/img/b6165ff30a10f1dfa6bab0c57a88844d.jpg">Вильям</option>
									<option value="Винтаж" data-img="/img/6c8aca7642d8ad4e3e4ed93e44fbb343.jpg">Винтаж</option>
									<option value="Виола" data-img="/img/c68210bd1a5f718d23a3878138966892.jpg">Виола</option>
									<option value="Вита" data-img="/img/0164ca9f364eb90abdcd4cc30cf61b46.jpg">Вита</option>
									<option value="Волна" data-img="/img/607a944a4ba17bd510168abf96b9c436.jpg">Волна</option>
									<option value="Дамиана" data-img="/img/9cc12694d96082b84a0d550f8d0ec66d.jpg">Дамиана</option>
									<option value="Калипсо" data-img="/img/99c124388ba3ec4f8c3755c30639e0e1.jpg">Калипсо</option>
									<option value="Капри" data-img="/img/9422ca0e2441e5ef6de6a19f3691a3dd.jpg">Капри</option>
									<option value="Леда" data-img="/img/eedd2c997dd2b01ff143a7d70f373350.jpg">Леда</option>
									<option value="Лимба" data-img="/img/c32fd0d8c660fda94b9c3626300d9e76.jpg">Лимба</option>
									<option value="Маринара" data-img="/img/8a589e65f16dce1b977682b45c9d0409.jpg">Маринара</option>
									<option value="Модо" data-img="/img/2f15a8b5e8e686763ccb0fa7c3ee9f3f.jpg">Модо</option>
									<option value="Натали" data-img="/img/b681088c02d1781cd414e4c9028b010f.jpg">Натали</option>
									<option value="Норма" data-img="/img/31e96209c6d3744505e999726a779023.jpg">Норма</option>
									<option value="Патриция" data-img="/img/22402054bccb5e10c84c79baa6767998.png">Патриция</option>
									<option value="Руна" data-img="/img/e201f7fad8462a0c272127d82e5b3698.jpg">Руна</option>
									<option value="Симона" data-img="/img/b528cb898ad80c6ec660abb406338cf0.jpg">Симона</option>
									<option value="Фреда" data-img="/img/3d0561d48a011813ea8fe102b2c77c59.jpg">Фреда</option>
									<option value="Фреда" data-img="/img/a4d3a6ba47ab9385fff6dbd5bd78cd33.jpg">Фреда</option>
									<option value="Чентини" data-img="/img/f9c63b22fea96cf9c2f4fc73340a7c9b.jpg">Чентини</option>
									<option value="Эйва" data-img="/img/c31fcdb05f1c00254d80321cb5027dc0.jpg">Эйва</option>
									<option value="Эри" data-img="/img/cb9164e8477da0fc6725411e4de4f577.jpg">Эри</option>
									<option value="Эстель" data-img="/img/6db9c9e8cc8b72369373ca153cb7fc52.jpg">Эстель</option>
    </select>
    
<br><br>
<div class="img_block_swap">
<img id="" class="image-swap" src="/img/i101.png">
			</div>
    
  </div>
  <div class="tab">Форма кухни
  <select name="img_swap_id_f" id="img_swap_id_f">
  
      <option value="" disabled="" selected="">Выберите вариант формы кухни</option>
      <option value="Прямая" data-img="/img/stol_60.jpg">Прямая</option>
      <option value="Г-образная" data-img="/img/stol_61.jpg">Г-образная</option>
      <option value="П-образная" data-img="/img/stol_62.jpg">П-образная</option>
    </select>
     
<br><br>
  <div class="img_block_swap">
  <img id="" class="image-swap_f" src="/img/stol_60.jpg">
  </div>
  </div>
  <div class="tab">Размеры гарнитуры
    <p><input placeholder="Длина фронтальной части (м | см | мм)" oninput="this.className = ''" name="front_length" type="text"></p>
    <p><input placeholder="Длина левой части (м | см | мм)" oninput="this.className = ''" name="left_length" type="text" ></p>
    <p><input placeholder="Длина правой части (м | см | мм)" oninput="this.className = ''" name="right_length" type="text"></p>
  </div>
  <div class="tab">Размеры гарнитуры
    <p><input type="text" name="mf_name" value="" class="" placeholder="Ваше имя"></p>
    <p><input type="text" name="mf_email" value="" class="" placeholder="Почта"></p>
    <p><input type="text" name="mf_phone" value="" class="" placeholder="Номер телефона*"></p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
<script src="/js/multistep.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
jQuery(document).ready(function($){
  $("#img_swap_id").change(function(){
      var opt = $('option[value='+this.value+']', this);
      var img = opt.data('img');
    $('.image-swap').attr("src",img);
  });
  $("#img_swap_id_f").change(function(){
      var opt = $('option[value='+this.value+']', this);
      var img = opt.data('img');
    $('.image-swap_f').attr("src",img);
  });
})
</script>
</body>
</html>
