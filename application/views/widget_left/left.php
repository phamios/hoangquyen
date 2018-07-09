<nav>
    <div class="list-group">
        <a href="javascript:void(0);" class="list-group-item active">Sim theo giá</a>
        <div style="margin-top: 1px;columns: 177px 2;column-gap: 0px;border: 1px solid #ccc;">
            <?php if($listcategorycost <> null):?>
            <?php foreach($listcategorycost as $cost):?>
            <a class="list-group-item lgit" href="<?php echo site_url().'/loai-sim/'.create_slug($cost->categoryname).'-'.$cost->id.'.html'?>"><?php echo $cost->categoryname?></a>
            <?php endforeach;?>
            <?php endif;?>
            <a class="list-group-item lgit" href="javascript:void(0);" onclick="document.getElementById(&#39;chonkhoanggiabg&#39;).style.display=&#39;block&#39;;document.getElementById(&#39;chonkhoanggia&#39;).style.top=&#39;100px&#39;">Tùy chọn khoảng giá</a>
            <div id="chonkhoanggiabg" class="w3-modal" style="display:none" onclick="document.getElementById(&#39;btnclosehl&#39;).style.display=&#39;none&#39;;document.getElementById(&#39;chonkhoanggiabg&#39;).style.display=&#39;none&#39;;document.getElementById(&#39;danhchodaily&#39;).style.top=&#39;-1500px&#39;;document.getElementById(&#39;chonkhoanggia&#39;).style.top=&#39;-500px&#39;;document.getElementById(&#39;contact-right&#39;).setAttribute(&#39;style&#39;,&#39;&#39;)">
            </div>
            <div id="chonkhoanggia" class="w3-modal-content" style="top:-500px;position: fixed;z-index: 9;width: 300px;left: 50%;margin-left: -150px;-webkit-transition: all 0.2s linear; -moz-transition: all 0.2s linear; -o-transition: all 0.2s linear; transition: all 0.2s linear;">
                <div class="w3-container">
                    <span onclick="document.getElementById(&#39;chonkhoanggiabg&#39;).style.display=&#39;none&#39;;document.getElementById(&#39;chonkhoanggia&#39;).style.top=&#39;-500px&#39;" class="w3-button w3-display-topright">×</span>
                    <p>
                        <br>
                    </p>
                    <table>
                        <tbody>
                            <tr>
                                <td>Giá từ: </td>
                                <td style=" position: relative; ">
                                    <input style="padding: 5px;text-align: right;font-weight: bold;" id="pricef" type="text" onkeyup="formatnumberprice(this)">
                                </td>
                                <td>₫</td>
                            </tr>
                            <tr>
                                <td>Đến: </td>
                                <td style=" position: relative; ">
                                    <input style="padding: 5px;text-align: right;font-weight: bold;" id="pricee" type="text" onkeyup="formatnumberprice(this)">
                                </td>
                                <td>₫</td>
                            </tr>
                            <tr>
                                <td> </td>
                                <td style=" text-align: center; ">
                                    <input type="button" value=" Tìm theo giá " class="btn-mua" onclick="lockhoanggia()" style=" border-radius: 0; padding: 10px; margin-top: 13px; ">
                                </td>
                                <td> </td>
                            </tr>
                        </tbody>
                    </table>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <div class="list-group">
        <a href="javascript:void(0);" class="list-group-item active">Sim theo loại</a>
        <div style="margin-top: 1px;columns: 177px 2;column-gap: 0px;border: 1px solid #ccc;">
            <?php if($listCategories <> null):?>
            <?php foreach($listCategories as $cate):?>
            <a class="list-group-item lgit" href="<?php echo site_url().'/loai-sim/'.create_slug($cate->categoryname).'-'.$cate->id.'.html'?>"><?php echo $cate->categoryname?></a>
            <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
    <div class="list-group">
        <a href="javascript:void(0);" class="list-group-item active">Sim theo mạng</a>
        <div style="margin-top: 1px;columns: 177px 2;column-gap: 0px;border: 1px solid #ccc;">
            <?php if($listCategoriestelco <> null):?>
            <?php foreach($listCategoriestelco as $telco):?>
            <a class="list-group-item lgit" href="<?php echo site_url().'/loai-sim/'.create_slug($telco->categoryname).'-'.$telco->id.'.html'?>"><?php echo $telco->categoryname?></a>
            <?php endforeach;?>
            <?php endif;?>
            <span class="list-group-item lgit desktop-hide">&nbsp;</span>
        </div>
    </div>
    <div class="list-group hide480">
        <a href="javascript:void(0);" class="list-group-item active">Sim năm sinh</a>
        <div style="margin-top: 1px;columns: 177px 2;column-gap: 0px;border: 1px solid #ccc;">
        
        <?php if($listcategorybrith <> null):?>
            <?php foreach($listcategorybrith as $birth):?>
            <a class="list-group-item lgit" href="<?php echo site_url().'/loai-sim/'.create_slug($birth->categoryname).'-'.$birth->id.'.html'?>"><?php echo $birth->categoryname?></a>
            <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
    <div class="list-group">
        <a href="javascript:void(0);" class="list-group-item active">Truy cập</a>
        <div class="list-group-item">
            <div style=" font-weight: normal; ">Server: <strong>1</strong>
                <br> Hôm nay: <strong><?php echo 1000+rand(1000,5000)?></strong>
                <br> Đang online: <strong><font color="#FF0000"><?php echo rand(10,100);?></font></strong>
            </div>
        </div>
    </div>
</nav>