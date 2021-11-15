<div id="templatemo_content_right">
<div class="cleaner_with_width">&nbsp;</div>
                <?php
                foreach ($dataSach as $v){
                    ?>                    
                    <div class="templatemo_product_box">
                    <h1><?php echo $v->tensach ?><span>(<?php echo $v->masach ?>)</span></h1>
                    <img src="images/templatemo_image_03.jpg" alt="image" />
                    <div class="product_info">
                        <h3>Mã NXB: <?php echo $v->manxb ?></h3>
                        <h3>Mã loại: <?php echo $v->maloai ?></h3>
                        <h3>Giá: <?php echo $v->gia ?> vnd</h3>
                        <div class="buy_now_button"><a href="subpage.html">Buy Now</a></div>
                        <div class="detail_button"><a href="subpage.html">Detail</a></div>
                    </div>
                    <div class="cleaner">&nbsp;</div>
                    </div>

                    <div class="cleaner_with_width">&nbsp;</div>
                    <?php
                }
                ?>

                

                <a href="#"><img src="images/templatemo_ads.jpg" alt="ads" /></a>
            </div>