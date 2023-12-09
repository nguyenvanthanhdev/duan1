<?php 
  if(is_array($load_bookrom))
  extract($load_bookrom);
  
?>

<style>
td {
    font-size: 13px;
    color: black;
}
</style>

<div class="admin-content">
    <div class="tiled">
        <h3>DANH SÁCH PHÒNG</h3>
    </div>
    <div class="search-ds-phong mt-3" style="width: 80%; ">
        <div class="input-group flex-nowrap">

            <input type="text" class="form-control" name="timkiem" placeholder="Tìm kiếm phòng...  "
                aria-label="Username" aria-describedby="addon-wrapping">
            <button type="submit" name="timkiem" class="btn btn-warning">Tìm kiếm</button>


            <div class="row ">

                <div class="col text-center ">
                    <a href="index.php?admin=add_rom"><button type="submit" class="btn btn-primary" name="add_rom">Thêm
                            mới</button></a>

                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12" style="display:block">
            <table>
                <thead>


                    <tr>
                        <th>Mã hóa đơn</th>
                        <th>Tên khách hàng</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Giới tính</th>
                        <th>Tên phòng</th>
                        <th>Giá phòng</th>
                        <th>Số lượng- Ngày</th>
                        <th>Ngày nhận - trả phòng</th>
                        <th>Loại phòng</th>
                        <th>Mã phòng</th>
                        <th>Địa điểm</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php  
                    foreach ($load_bookrom as $load) {
                        extract($load);
                       ?>

                    <form action="index.php?admin=xacnhan" method="post">
                        <tr>
                            <td><?=$id_book_rom?></td>
                            <td><?=$name_kh?></td>
                            <td> <?=$email?></td>
                            <td> <?=$phone?></td>
                            <td> <?=$gender?></td>
                            <td> <?=$name_rom?></td>
                            <td> <?=number_format($price, 0, ".", ".")?></td>
                            <td> <?=$quantity.'- '.$number_date?></td>
                            <td> <?=$date_get.'- '.$date_pay?></td>
                            <td> <?=$type_rom?></td>
                            <td> <?=$ma_rom?></td>
                            <td> <?=$name_des?></td>
                            <td> <?=number_format($sum, 0, ".", ".")?>VNĐ</td>
                            <td style="color:#4CAF50;"><?=$status?></td>
                            <td>
                                <?php if(isset($_POST['thanhcong'])) {?>
                                <?php } else{?>
                                <input type="hidden" value="<?=$id_book_rom?>" name="id_book_rom">
                                <input type="hidden" value="Thành công" name="thanhcong">
                                <input type="submit" name="xacnhan" class="btn btn-warning mb-3" value="Xác nhận">

                                <?php }?>

                                <a class="text-decoration-none"
                                    href="index.php?admin=delete_bookrom&&id_book_rom='<?=$id_book_rom?>'"> <span
                                        class="delete-button-hd" onclick="deleteRow(1)">Hủy</span> </a>
                            </td>
                        </tr>
                    </form>


                    <?php }?>





                    <!-- <tr>
                        <td>Ma88</td>
                        <td>nguyễn văn</td>
                        <td>11222@gmail</td>
                        <td>999999</td>
                        <td>nam</td>
                        <td>tên phòng</td>
                        <td>giá phòng</td>
                        <td>số lượng</td>
                        <td>Ngày nhận - trả phòng</td>
                        <td>Loại phòng</td>
                        <td>Mã phòng</td>
                        <td>Địa điểm</td>
                        <td>Tổng tiền</td>
                        <td>Chờ thanh toán</td> -->
                    <!-- <td>Nguyễn Văn A</td>
                        <td>van.a@example.com</td>
                        <td>123</td>
                        <td>0123456789</td>
                        <td>Nam</td>
                        <td class="action-buttons">
                            <span class="delete-button" onclick="deleteRow(1)">Xóa</span>
                            <span class="edit-button" onclick="editRow(1)">Sửa</span>
                        </td> -->


                    <!-- Thêm thông tin khách hàng khác nếu cần -->
                </tbody>
            </table>
        </div>
    </div>

</div>