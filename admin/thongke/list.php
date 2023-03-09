<div class="row">
    <div class="row frmtitle">
        <H1>THONG KE SAN PHAM THEO LOAI</H1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th>MA DANH MUC</th>
                    <th>TEN DANH MUC</th>
                    <th>SO LUONG</th>
                    <th>GIA CAO NHAT</th>
                    <th>GIA THAP NHAT</th>
                    <th>GIA TRUNG BINH</th>
                </tr>
                <?php
                    foreach ($listthongke as $thongke) {
                        extract($thongke);
                        echo '<tr>
                                <td>'.$madm.'</td>
                                <td>'.$tendm.'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$maxprice.'</td>
                                <td>'.$minprice.'</td>
                                <td>'.$avgprice.'</td>
                            </tr>';
                    }
                ?>
            </table>

        </div>
        <div class="row mb10">
            <a href="index.php?act=bieudo"><input type="button" value="Xem bieu do"></a>

        </div>
    </div>
</div>