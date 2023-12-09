<div class="container dd-nbat">
    <div class="row text-center py-5">
        <h3>ĐIỂM ĐẾN NỔI BẬT</h3>
    </div>
    <div class="row mb-5">
        <?php  
                $load_dd=load_six_des();
                $path_img="./uploads/";

                foreach ($load_dd as $dd) {
                    extract($dd);
                    $img=$path_img . $image_des;
                    $tr='<div class="col-4 img-des pb-3 space">
                    <img src="'.$img.'" style="width:100%; height:250px" alt="">
                    <div class="tidel-des">
                    <h3> <i class="fa-solid fa-location-dot" style="color: #ffffff;"></i> '.$name_des.'</h3>
                </div>
                </div>';echo $tr;
                }

               
               ?>


        <!-- <div class="col-4 img-des space">
                <img src="./images/hcm.jpg" style="width:100%; height:250px" alt="">
                <div class="tidel-des">

                    <h3> <i class="fa-solid fa-location-dot" style="color: #ffffff;"></i> Hồ Chính Minh</h3>
                </div>
            </div>
            <div class="col-4  space">
                <img src="./images/hcm.jpg" style="width:100%; height:250px" alt="">
            </div>
            <div class="col-4  space">
                <img src="./images/hcm.jpg" style="width:100%; height:250px" alt="">
            </div> -->

    </div>
</div>