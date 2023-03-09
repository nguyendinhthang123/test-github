<div class="row mb">
  <div class="boxtrai mr">
    <div class="row mb">

        <div class="boxtitle">SAN PHAM<strong><?=$tendm?></strong></div>
        <div class="row boxcontent">
          <?php
          $i=0;
        foreach ($dssp as $sp) {
            extract($sp);
            $hinh=$img_path.$img;
            if(($i==2)||($i==5)||($i==8)||($i==11)) {
              $mr="";
            } else {
              $mr="mr";
            }
            echo '<div class="boxsp '.$mr.'">
            <div class="row img image-product">
              <img src="'.$hinh.'" alt="" />
            </div>
            <div class="boxprice">
              <p class="price-product">'.$price.'</p>
              <a href="#" class="info-product">'.$name.'</a>
            </div>
          </div>';
          $i+=1;
            }
        ?>  
        </div>
        
    </div>
  </div>
  <div class="boxphai">
  <?php include "boxright.php";?>
  </div>
</div>