<?php
$per_page =!empty($_GET['pre_page']) ? $_GET['pre_page'] : 3;
$page=!empty($_GET['page']) ? $_GET['page'] : 1;
$offset =($page-1) * $per_page;
$sql="select * from roms order by id_rom asc limit  $per_page  offset $offset ";
$result =pdo_query($sql);
$conn = pdo_get_connection();
$stmtRowCount = $conn->prepare("SELECT COUNT(*) FROM roms");
$stmtRowCount->execute();
$tatal_rom= $stmtRowCount->fetchColumn();
$tatal_page =ceil($tatal_rom / $per_page);
?>


<div class="admin-content">
    <div class="tiled">
        <h3>DANH SÁCH DANH MỤC PHÒNG</h3>
    </div>
    <div class="search-ds-phong mt-3" style="width: 80%; ">
        <div class="input-group flex-nowrap">

            <input type="text" class="form-control" name="timkiem" placeholder="Tìm kiếm phòng...  "
                aria-label="Username" aria-describedby="addon-wrapping">
            <button type="submit" name="timkiem" class="btn btn-warning">Tìm kiếm</button>


            <div class="row ">

                <div class="col text-center ">
                    <a href="index.php?admin=danhmucphong"><button type="submit" class="btn btn-primary"
                            name="add_rom">Thêm
                            mới</button></a>

                </div>
            </div>
        </div>
    </div>
    <hr>
    <table>
        <thead>
            <tr>
                <th>ID Danh Mục</th>
                <th>Name DMPHONG</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php  
            foreach ($load_all_dsphong as $dm_phong) {
                extract($dm_phong);
                $suaid_menu="index.php?admin=suaid_menu&id_menu=".$id_menu;
                $delete_dm="index.php?admin=delete_dm&id_menu=".$id_menu;
                $tr = ' <tr>
                <td>'.$id_menu.'</td>
                <td>'.$name_menu.'</td>
                <td class="action-buttons">
                <a  class="text-decoration-none" href="'.$delete_dm.'"><span class="delete-button" onclick="deleteRow(1)">Xóa</span></a> 
                <a class="text-decoration-none" href="'.$suaid_menu.'"> <span class="edit-button" onclick="editRow(1)">Sửa</span></a>
                </td>
            </tr>';
            echo $tr;
            }
        ?>
            <!-- <tr>
                <td>1</td>
                <td>Phòng 101</td>
                <td class="action-buttons">
                    <span class="delete-button" onclick="deleteRow(1)">Xóa</span>
                    <span class="edit-button" onclick="editRow(1)">Sửa</span>
                </td>
            </tr> -->
            <!-- Thêm các dòng khác tương tự -->
        </tbody>
    </table>
</div>