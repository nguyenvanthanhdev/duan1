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
                    <a href="index.php?admin=add_destination"><button type="submit" class="btn btn-primary"
                            name="add_des">Thêm
                            mới</button></a>

                </div>
            </div>
        </div>
    </div>
    <hr>
    <table>
        <thead>
            <tr>
                <th>Id_dm</th>
                <th>Id des</th>
                <th>Name des</th>
                <th>Image rom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php  
                    foreach ($load_all_des as $load_des) {
                        $path_img="../uploads/";
                        extract($load_des);
                        $suaid_des="index.php?admin=suaid_des&id_des=".$id_des;
                        $delete_des="index.php?admin=delete_des&id_des=".$id_des;
                        $img=$path_img.$image_des;
                        $tr =' <div class="table-tr">  <tr>
                        <td>'.$id_dm.'</td>
                        <td>'.$id_des.'</td>
                        <td>'.$name_des.'</td>
                        <td> <img src="'.$img.'" alt="" width="150px" height="100px"></td>
                        <td class="action-buttons">
                        <a class="text-decoration-none" href="'.$delete_des.'">  <span class="delete-button" onclick="deleteRow(1)">Xóa</span> </a>
                        <a class="text-decoration-none"  href="'.$suaid_des.'"><span class="edit-button" onclick="editRow(1)">Sửa</span> </a>
                    </td>
                    </tr>  
                   
                 </div>  ';
             echo $tr ;
                    
                    }
                ?>


        </tbody>


    </table>

</div>