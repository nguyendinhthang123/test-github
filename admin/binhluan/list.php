<div class="row">
    <div class="row frmtitle">
        <h1>Danh Sach Tai Khoan</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>NOI DUNG</th>
                    <th>IDUSER</th>
                    <th>IDPRO</th>
                    <th>NGAY BINH LUAN</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);
                    $suabl="index.php?act=suabl&id=".$id;
                    $xoabl="index.php?act=xoabl&id=".$id;
                    echo '<tr>
                <td><input type="checkbox" name="" id="" /></td>
                <td>'.$id.'</td>
                <td>'.$noidung.'</td>
                <td>'.$iduser.'</td>
                <td>'.$idpro.'</td>
                <td>'.$ngaybinhluan.'</td>
                <td><a href="'.$suabl.'"><input type="button" value="Sua"></a><a href="'.$xoabl.'"><input type="button" value="Xoa" /></a></td>
              </tr>';
                }
                ?>
                
            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="chon tat ca" />
            <input type="button" value="bo chon tat ca" />
            <input type="button" value="xoa cac muc" />
        </div>
    </div>
</div>