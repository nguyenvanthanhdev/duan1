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
                    <a href="index.php?admin=add_news"><button type="submit" class="btn btn-primary" name="add_rom">Thêm
                            mới</button></a>

                </div>
            </div>
        </div>
    </div>
    <hr>
    <table>
        <thead>
            <tr>
                <th>Id_news</th>
                <th>title</th>
                <th>subtitle</th>
                <th>image</th>
                <th>content</th>
                <th>date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            <div class="table-tr">
                <?php if(is_array($load_tt)) foreach ($load_tt as $load) {  $path_img="../uploads/";
                        extract($load); $img=$path_img.$image_news; ?>

                <tr>
                    <td>
                        <p><?=$id_news?></p>
                    </td>
                    <td><?=$title?></td>
                    <td><?=$title_sub?></td>
                    <td><img src="<?=$img?>" alt="" width="150px" height="100px"></td>
                    <td> <?php echo '<textarea required id="largeTextBox"
                            placeholder="Type your content here...">'.htmlspecialchars($content_news).'</textarea> </td>
                    '; ?>
                    <td></td>
                    <td class="action-buttons">
                        <a class="text-decoration-none" href="index.php?admin=delete_tt&id_news=<?=$id_news?>"> <span
                                class="delete-button" onclick="deleteRow(1)">Xóa</span> </a>
                        <a class="text-decoration-none" href="'.$suaid_rom.'"> <span class="edit-button"
                                onclick="editRow(1)">Sửa</span> </a>
                    </td>
                </tr>

                <?php }?>
                <!-- <tr>
                    <td>
                        <p></p>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td> <img src="'.$img.'" alt="" width="150px" height="100px"></td>
                    <td></td>
                    <td class="action-buttons">
                        <a class="text-decoration-none" href="'.$delete_rom.'"> <span class="delete-button"
                                onclick="deleteRow(1)">Xóa</span> </a>
                        <a class="text-decoration-none" href="'.$suaid_rom.'"> <span class="edit-button"
                                onclick="editRow(1)">Sửa</span> </a>
                    </td>
                </tr> -->
            </div>

        </tbody>


    </table>

</div>