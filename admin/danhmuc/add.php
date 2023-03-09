<div class="row">
    <div class="row frmtitle">
        <h1>Them Moi Loai Hang Hoa</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=adddm" method="post">
            <div class="row mb10">
                Ma Loai<br />
                <input type="text" name="maloai" disabled />
            </div>
            <div class="row mb10">
                Ten Loai<br />
                <input type="text" name="tenloai" />
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="Them Moi" />
                <input type="reset" value="Nhap Lai" />
                <a href="index.php?act=lisdm"><input type="button" value="Danh Sach" /></a>
            </div>                                                          
            <?php
            if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
            ?>
        </form>
    </div>
</div>