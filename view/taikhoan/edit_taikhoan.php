<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">

            <div class="boxtitle">CAP NHAT TAI KHOAN</div>
            <div class="row boxcontent formtaikhoan">
                <?php
                
                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
                }
                
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    <div class="row mb10">
                        Email
                        <input type="email" name="email" value="<?=$email?>">
                    </div>
                    <div class="row mb10">
                        Ten dang nhap
                        <input type="text" name="user"value="<?=$user?>">
                    </div>
                    <div class="row mb10">
                        Mat khau
                        <input type="password" name="pass"value="<?=$pass?>">
                    </div>
                    <div class="row mb10">
                        Dia chi
                        <input type="text" name="address"value="<?=$address?>">
                    </div>
                    <div class="row mb10">
                        Dien thoai
                        <input type="text" name="tel"value="<?=$tel?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit"name="capnhat" value="Cap nhat">
                        <input type="reset" name="Nhaplai" value="Nhập Lại">
                    </div>
                </form>
                <h2 class="thongbao">
                    <?php

                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                    ?>
                </h2>
            </div>

        </div>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>