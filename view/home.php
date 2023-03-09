<div class="row mb">
  <div class="boxtrai mr">
    <div class="row">
      <div class="banner">
        <!-- Slideshow container -->
        <div class="slideshow-container">

          <!-- Full-width images with number and caption text -->
          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="view/images/banner1.jpg" style="width:100%">
            <div class="text">Caption Text</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="view/images/banner2.jpg" style="width:100%">
            <div class="text">Caption Two</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="view/images/banner3.jpg" style="width:100%">
            <div class="text">Caption Three</div>
          </div>

          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>
      </div>
    </div>
    <div class="row">
      <?php
      $i = 0;
      foreach ($spnew as $sp) {
        extract($sp);
        $linksp = "index.php?act=sanphamct&idsp=" . $id;
        $hinh = $img_path . $img;
        if (($i == 2) || ($i == 5) || ($i == 8)) {
          $mr = "";
        } else {
          $mr = "mr";
        }
        echo '<div class="boxsp ' . $mr . '">

             <div class="row img"><a href="'.$linksp.'"><img src="' . $hinh . '" alt="" /></a></div>
                <p>$' . $price .'</p>
                <a href="'.$linksp.'">'. $name .'</a>
                <div class="row btnaddtocart">
                <form action="index.php?act=addtocart" method="post">
                  <input type="hidden" name="id" value="'.$id.'">
                  <input type="hidden" name="name" value="'.$name.'"> 
                  <input type="hidden" name="img" value="'.$img.'">
                  <input type="hidden" name="price" value="'.$price.'">
                  <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                  </form>
                </div>
        </div>';
        $i += 1;
      }
      ?>
      <!-- <div class="boxsp mr">
        <div class="row img">
          <img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/9/_/9.1.jpg" alt="" />
        </div>
        <p>10.490.000 ₫</p>
        <a href="">Laptop Asus Vivobook Flip 14 TP470EA EC346W</a>
      </div>
      <div class="boxsp mr">
        <div class="row img">
          <img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/4/h/4h43.png" alt="" />
        </div>
        <p>18.890.000 đ</p>
        <a href="">Laptop Asus Gaming Rog Strix G15 G513IH HN015W</a>
      </div>
      <div class="boxsp">
        <div class="row img">
          <img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/m/a/macbook_air_22.png " alt="" />
        </div>
        <p>21.990.000 ₫</p>
        <a href="">Apple MacBook Air M1 256GB 2020 I Chính hãng Apple Việt Nam</a>
      </div>
      <div class="boxsp mr">
        <div class="row img">
          <img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/t/e/text_ng_n_22_.png" alt="" />
        </div>
        <p>14.190.000 ₫</p>
        <a href="">Laptop MSI Modern 14 B11MOU-1032VN</a>
      </div>
      <div class="boxsp mr">
        <div class="row img">
          <img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/m/a/macbook_pro_14_m1_pro.png" alt="" />
        </div>
        <p>61.990.000 ₫</p>
        <a href="">Macbook Pro 14 M1 Pro 10 CPU - 16 GPU 32GB 512GB 2021</a>
      </div>
      <div class="boxsp">
        <div class="row img">
          <img src="https://cdn2.cellphones.com.vn/358x358,webp,q100/media/catalog/product/0/7/07_1_5.jpg" alt="" />
        </div>
        <p>13.990.000 ₫</p>
        <a href=""> Laptop Dell Inspirion 15 3000 I3511 5101BLK</a>
      </div> -->
    </div>
  </div>
  <div class="boxphai">
    <?php include "boxright.php"; ?>
  </div>
</div>