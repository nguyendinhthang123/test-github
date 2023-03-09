<div class="row mb">
      <div class="boxtitle">TÀI KHOẢN</div>
      <div class="boxcontent formtaikhoan">
        <?php
        if(isset($_SESSION['user'])){
          extract($_SESSION['user']);
          ?>
          <div class="row mb10">
            Xin chao<br />
            <?=$user?>
          </div>
          <div class="row mb10">
          <li>
          <a href="index.php?act=mybill">Don hang cua toi</a>
        </li>
          <li>
          <a href="index.php?act=quenmk">Quen Mat Khau</a>
        </li>
        <li>
          <a href="index.php?act=edit_taikhoan">Cap nhat tai khoan</a>
        </li>
        <?php if($role==1){ ?>
        <li>
          <a href="admin/index.php ">Dang nhap Admin</a>
        </li>
        <?php }?>
        <li>
          <a href="index.php?act=thoat">Thoat</a>
        </li>
          </div>
          <?php
        }else{

        
        ?>
        <form action="index.php?act=dangnhap" method="post">
          <div class="row mb10">
            Ten Dang Nhap<br />
            <input type="text" name="user"  />
          </div>
          <div class="row mb10">
            Mat Khau<br />
            <input type="password" name="pass" />
          </div>
          <div class="row mb10">
            <input type="checkbox" name="" /> Ghi Nho Tai Khoan?
          </div>
          <div class="row mb10">
            <input type="submit" value="Dang Nhap" name="dangnhap" />
          </div>
        </form>
        <li>
          <a href="#">Quen Mat Khau</a>
        </li>
        <li>
          <a href="index.php?act=dangky">Dang Ky Thanh Vien</a>
        </li>
        <?php }?>
      </div>
    </div>
    <div class="row mb">
      <div class="boxtitle">DANH MỤC</div>
      <div class="boxcontent2 menudoc">
        <ul>
          <?php
          foreach ($dsdm as $dm) {
            extract($dm);
            $linkdm="index.php?act=sanpham&iddm=".$id;
            echo '<li>
                  <a href="'.$linkdm.'">'.$name.'</a>
            </li>';
          }
          ?>
          <!-- <li><a href="#">Dong Ho</a></li>
          <li><a href="#">LapTop</a></li>
          <li><a href="#">Dien Thoai</a></li>
          <li><a href="#">Ba Lo</a></li> -->
        </ul>
      </div>
      <div class="boxfooter searbox">
        <form action="index.php?act=sanpham" method="post">
          <input type="text" name="kyw" />
          <input type="submit" name="timkiem" value="Tim Kiem">
        </form>
      </div>
    </div>
    <div class="row">
      <div class="boxtitle">TOP 10 YÊU THÍCH</div>
      <div class="row boxcontent">
        <?php
        foreach ($dstop10 as $sp) {
          extract($sp);
          $linksp="index.php?act=sanphamct&idsp=".$id;
          $img=$img_path.$img;
          echo'<div class="row mb10 top10">
          <img src="'.$img.'" alt="" />
          <a href="'.$linksp.'">'.$name.'</a>
        </div>';
        }
        ?>
        <!-- <div class="row mb10 top10">
          <img src="view/images/products/1001.jpg" alt="" />
          <a href="#">nguyen dinh thang</a>
        </div>
        <div class="row mb10 top10">
          <img src="view/images/products/1002.jpg" alt="" />
          <a href="#">bui thi lan anh</a>
        </div>
        <div class="row mb10 top10">
          <img src="view/images/products/1003.jpg" alt="" />
          <a href="#">nguyen dinh thang</a>
        </div>
        <div class="row mb10 top10">
          <img src="view/images/products/1004.jpg" alt="" />
          <a href="#">bui thi lan anh</a>
        </div>
        <div class="row mb10 top10">
          <img src="view/images/products/1005.jpg" alt="" />
          <a href="#">nguyen dinh thang</a>
        </div>
        <div class="row mb10 top10">
          <img src="view/images/products/1006.jpg" alt="" />
          <a href="#">bui thi lan anh</a>
        </div>
        <div class="row mb10 top10">
          <img src="view/images/products/1007.jpg" alt="" />
          <a href="#">nguyen dinh thang</a>
        </div>
        <div class="row mb10 top10">
          <img src="view/images/products/1008.jpg" alt="" />
          <a href="#">bui thi lan anh</a>
        </div>
        <div class="row mb10 top10">
          <img src="view/images/products/1009.jpg" alt="" />
          <a href="#">nguyen dinh thang</a>
        </div>
        <div class="row mb10 top10">
          <img src="view/images/products/1010.jpg" alt="" />
          <a href="#">bui thi lan anh</a>
        </div> -->
      </div>
    </div>