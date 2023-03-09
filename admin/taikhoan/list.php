<div class="row">
    <div class="row frmtitle">
        <h1>Danh Sach Tai Khoan</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MA TK</th>
                    <th>TEN DANG NHAP</th>
                    <th>MAT KHAU</th>
                    <th>EMAIL</th>
                    <th>DIA CHI</th>
                    <th>DIEN THOAI</th>
                    <th>VAI TRO</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    $suatk="index.php?act=suatk&id=".$id;
                    $xoatk="index.php?act=xoatk&id=".$id;
                    echo '<tr>
                <td><input type="checkbox" name="" id="" /></td>
                <td>'.$id.'</td>
                <td>'.$user.'</td>
                <td>'.$pass.'</td>
                <td>'.$email.'</td>
                <td>'.$address.'</td>
                <td>'.$tel.'</td>
                <td>'.$role.'</td>
                <td><a href="'.$suatk.'"><input type="button" value="Sua"></a><a href="'.$xoatk.'"><input type="button" value="Xoa" /></a></td>
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