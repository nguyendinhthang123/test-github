<div class="row mb">
    <div class="boxtrai mr">
        <form action="index.php?act=billcomfirm" method="post">
            <div class="row mb">
                <div class="boxtitle">THONG TIN DAT HANG</div>
                <div class="row boxcontent billform">
                     <table>
                        <?php
                        if(isset($_SESSION['user'])){
                            $name=$_SESSION['user']['user'];
                            $address=$_SESSION['user']['address'];
                            $email=$_SESSION['user']['email'];
                            $tel=$_SESSION['user']['tel'];
                        }else{
                            $name="";
                            $address="";
                            $email="";
                            $tel="";
                        }
                        ?>
                        <tr>
                            <td>Người dặt hàng</td> 
                            <td><input type="text" name="name" value="<?=$name?>"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td> 
                            <td><input type="text" name="address" value="<?=$address?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td> 
                            <td><input type="text" name="email" value="<?=$email?>"></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td> 
                            <td><input type="text" name="tel" value="<?=$tel?>"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
                <div class="row boxcontent">
                    <table>
                        <tr>
                            <td><input type="radio" name="pttt" checked> Trả tiền khi nhận hàng</td>
                            <td><input type="radio" name="pttt"> Chuyển khoản ngân hàng</td>
                            <td><input type="radio" name="pttt"> Thanh toán online</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
                <div class="row boxcontent cart">
                        <table>
                            <?php viewcart(0);?>
                        </table>
                </div>
            </div>
            <div class="row mb bill">
                <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">        
            </div>
        </form>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php";?>
    </div>
</div>