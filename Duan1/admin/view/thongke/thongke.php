<?php     
    

    $sql="Select menu.name_menu as name_menu , sum(quantity) as ctsl , sum(sum) as sumprice  ";
    $sql.="from book_rom left join menu on menu.id_menu=book_rom.id_menu_b ";
    $sql.="group by menu.id_menu asc ";
     $result=pdo_query($sql);


?>

<style>
.tdt {
    background-color: orangered;
}

.tdt span {
    color: white;
    font-size: 20px;
    font-weight: 700;
}
</style>

<div class="admin-content">
    <div class="tiled">
        <h3>THỐNG KÊ</h3>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-5">
                <table>
                    <thead>
                        <tr>
                            <th>Phòng</th>
                            <th>Số lượng</th>
                            <th>Tổng tiền</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    $tatal=0;
                     foreach ($result as $load) {
                       extract($load);
                       $tatal+=$sumprice;
                       $tr=' <tr>
                       <td>'.$name_menu.'</td>
                       <td>'.$ctsl.'</td>
                       <td>'.number_format($sumprice, 0, ".", ".").' VNĐ</td>
                       
                       
                   </tr>';echo $tr;
                     }
                   ?>


                        <!-- <tr>
                        <td>Phòng A</td>
                        <td>10</td>
                    </tr> -->
                        <!-- Thêm các dòng khác nếu cần -->
                    </tbody>


                </table>
                <div class="container">
                    <div class="row my-5">
                        <div class="col tdt py-3 text-center">
                            <span>Tổng danh thu : <?php if(isset($tatal)) echo number_format($tatal, 0, ".", ".") ?> VNĐ
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div id="myPlot" style="width:100%;max-width:700px"></div>
                <?php
                    $tatal=0;
                     foreach ($result as $load) {
                       extract($load);
                       $hh=["$name_menu"];
                     }
                     ?>
                <script>
                const xArray = ["Italy", "France", "Spain", "USA", "Argentina"];
                const yArray = [55, 49, 44, 24, 15];

                const layout = {
                    title: "World Wide Wine Production"
                };

                const data = [{
                    labels: xArray,
                    values: yArray,
                    type: "pie"
                }];

                Plotly.newPlot("myPlot", data, layout);
                </script>

            </div>
        </div>
        <!-- Biểu đồ tròn -->

    </div>
</div>