<div id="templatemo_content">

            <div id="templatemo_content_left">
                <div class="templatemo_content_left_section">
                    <h1>Danh sách thể loại: </h1>
                    <ul>
                        <?php
                        foreach ($dataLoai as $v){
                            ?>
                            <li><a href="#"><?php echo $v->tenloai ?> - <?php echo $v->maloai ?></a></li>
                            <?php
                        }
                        ?>                    
                    </ul>
                </div>
                <div class="templatemo_content_left_section">
                    <h1>Danh sách NXB: </h1>
                    <ul>
                    <?php
                        foreach ($dataNXB as $v){
                            ?>
                            <li><a href="#"><?php echo $v->tennxb ?> - <?php echo $v->manxb ?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>

                <div class="templatemo_content_left_section">
                    <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
                    <a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
                </div>
            </div>