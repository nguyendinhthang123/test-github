<div class="row">
    <div class="row frmtitle">
        <h1>Danh Sach Loai Hang</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>Ma Loai</th>
                    <th>Ten Loai</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    $suadm="index.php?act=suadm&id=".$id;
                    $xoadm="index.php?act=xoadm&id=".$id;
                    echo '<tr>
                <td><input type="checkbox" name="" id="" /></td>
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td><a href="'.$suadm.'"><input type="button" value="Sua"></a><a href="'.$xoadm.'"><input type="button" value="Xoa" /></a></td>
              </tr>';
                }
                ?>
                
            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="chon tat ca" />
            <input type="button" value="bo chon tat ca" />
            <input type="button" value="xoa cac muc" />
            <a href="index.php?act=adddm"><input type="button" value="Nhap them" /></a>
        </div>
    </div>
</div>