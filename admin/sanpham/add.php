<div class="row">
    <div class="row frmtitle">
        <h1>Them Moi san pham</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Danh muc<br />
                <select name="iddm">
                    <?php 
                        foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            echo'<option value="'.$id.'">'.$name.'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm<br />
                <input type="text" name="tensp" />
            </div>
            <div class="row mb10">
                giá<br />
                <input type="text" name="giasp" />
            </div>
            <div class="row mb10">
                hình<br />
                <input type="file" name="hinh"/>
            </div>
            <div class="row mb10">
                mota<br />
                <textarea name="mota" cols="30" rows="10"></textarea>
            </div>

            <div class="row mb10">
                <input type="submit" name="themmoi" value="Them Moi" />
                <input type="reset" value="Nhap Lai" />
                <a href="index.php?act=listsp"><input type="button" value="Danh Sach" /></a>
            </div>                                                          
            <?php
            if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
            ?>
        </form>
    </div>
</div>