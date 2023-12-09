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
    <table>
        <thead>
            <tr>
                <th>Id_menu</th>
                <th>id_des</th>
                <th>ID rom</th>
                <th>Name rom</th>
                <th>Price rom</th>
                <th>Image rom</th>
                <th>Mã rom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php  
                    foreach ($load_all_rom as $load_rom) {

                        $path_img="../uploads/";
                        extract($load_rom);
                        $suaid_rom="index.php?admin=suaid_rom&id_rom=".$id_rom;
                        $delete_rom="index.php?admin=delete_rom&id_rom=".$id_rom;
                        $img=$path_img.$image_rom;
                        
                        $tr =' <div class="table-tr">  
                    <tr>
                    <td>'.$id_menu_r.'</td>
                    <td>'.$id_des_a.'</td>
                    <td>'.$id_rom.'</td>
                    <td>'.$name_rom.'</td>
                    <td>'.$price_rom.'</td>
                    <td>  <img src="'.$img.'" alt="" width="150px" height="100px"></td>
                    <td>'.$ma_rom.'</td>
                    <td class="action-buttons">
                      <a class="text-decoration-none" href="'.$delete_rom.'">  <span class="delete-button" onclick="deleteRow(1)">Xóa</span> </a>
                      <a class="text-decoration-none" href="'.$suaid_rom.'">   <span class="edit-button" onclick="editRow(1)">Sửa</span> </a>
                    </td>
                </tr>
                 </div> ';
             echo $tr ;
                    
                    }
                ?>

        </tbody>


    </table>

</div>