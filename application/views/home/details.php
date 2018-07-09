<article>
<?php if($detailNumber <> null):?>
<?php foreach($detailNumber as $number):?>
<h1>Sim <?php echo $number->simnumber?> - Bán sim <?php echo $number->simnumber?> giá rẻ</h1>

    <input type="hidden" name="lead_source" value="undefined">
    <div class="section group" style=" background: #fff; border: 1px solid #ccc; ">
        <div class="col span_7_of_12">
            <div style="width: fit-content;margin: 24px auto;padding: 15px; float:left;">
                <input name="sosim" type="hidden" id="sosim" value="01664.000.555">
                <input name="giaban" type="hidden" id="giaban" value="29.990.000₫">
                <input name="mang" type="hidden" id="mang" value="<?php echo $number->simtelco?>">
                <label style=" width: 65px; text-align: left; ">Số sim:</label><span class="simso2"><?php echo $number->simnumber?></span>
                <br>
                <label style=" width: 65px; text-align: left; ">Giá bán:</label><strong><font size="3"><?php echo number_format($number->simcost)?>₫</font></strong>
                <br>
                <label style=" width: 65px; text-align: left; ">Mạng:</label>
                <a style="position: absolute;" href="#">
                    <img src="<?php echo base_url('assets/home');?>/datmua_files/<?php echo $number->simtelco?>.gif" alt="<?php echo $number->simtelco?>" border="0" data-pagespeed-url-hash="494097423" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                <label style=" width: 100%; text-align: left; "></label>
            </div>
        </div>
        <div class="col span_5_of_12">
        <!-- <img src="https://static.simthanglong.vn/<?php echo $simnumber.'.jpg'?>" width="50%" alt="<?php echo $number->simtelco?>" border="0" data-pagespeed-url-hash="494097423" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> -->
        </div>
    </div>
    <table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC">
        <tbody>
        </tbody>
    </table>
    <br>
    <style type="text/css">
    .form-style-5{
        max-width: 500px;
        padding: 10px 20px;
        background: #f4f7f8;
        margin: 10px auto;
        padding: 20px;
        background: #f4f7f8;
        border-radius: 8px;
        font-family: Georgia, "Times New Roman", Times, serif;
    }
    .form-style-5 fieldset{
        border: none;
    }
    .form-style-5 legend {
        font-size: 1.4em;
        margin-bottom: 10px;
    }
    .form-style-5 label {
        display: block;
        margin-bottom: 8px;
    }
    .form-style-5 input[type="text"],
    .form-style-5 input[type="date"],
    .form-style-5 input[type="datetime"],
    .form-style-5 input[type="email"],
    .form-style-5 input[type="number"],
    .form-style-5 input[type="search"],
    .form-style-5 input[type="time"],
    .form-style-5 input[type="url"],
    .form-style-5 textarea,
    .form-style-5 select {
        font-family: Georgia, "Times New Roman", Times, serif;
        background: rgba(255,255,255,.1);
        border: none;
        border-radius: 4px;
        font-size: 16px;
        margin: 0;
        outline: 0;
        padding: 7px;
        width: 100%;
        box-sizing: border-box; 
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box; 
        background-color: #e8eeef;
        color:#8a97a0;
        -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
        box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
        margin-bottom: 30px;
        
    }
    .form-style-5 input[type="text"]:focus,
    .form-style-5 input[type="date"]:focus,
    .form-style-5 input[type="datetime"]:focus,
    .form-style-5 input[type="email"]:focus,
    .form-style-5 input[type="number"]:focus,
    .form-style-5 input[type="search"]:focus,
    .form-style-5 input[type="time"]:focus,
    .form-style-5 input[type="url"]:focus,
    .form-style-5 textarea:focus,
    .form-style-5 select:focus{
        background: #d2d9dd;
    }
    .form-style-5 select{
        -webkit-appearance: menulist-button;
        height:35px;
    }
    .form-style-5 .number {
        background: #1abc9c;
        color: #fff;
        height: 30px;
        width: 30px;
        display: inline-block;
        font-size: 0.8em;
        margin-right: 4px;
        line-height: 30px;
        text-align: center;
        text-shadow: 0 1px 0 rgba(255,255,255,0.2);
        border-radius: 15px 15px 15px 0px;
    }

    .form-style-5 input[type="submit"],
    .form-style-5 input[type="button"]
    {
        position: relative;
        display: block;
        padding: 19px 39px 18px 39px;
        color: #FFF;
        margin: 0 auto;
        background: #1abc9c;
        font-size: 18px;
        text-align: center;
        font-style: normal;
        width: 100%;
        border: 1px solid #16a085;
        border-width: 1px 1px 3px;
        margin-bottom: 10px;
    }
    .form-style-5 input[type="submit"]:hover,
    .form-style-5 input[type="button"]:hover
    {
        background: #109177;
    }
    </style>
    <div id="frm-order" style=" background: #c7eeff; border: 1px solid #ccc; padding: 10px;">
            <div class="form-style-5">
            <?php echo form_open_multipart('mua/'.str_replace(".","",$number->simnumber)); ?>
                    <fieldset>
                        <legend><span class="number">1</span> Đặt Mua Sim</legend>
                        <input type="hidden" name="number" value="<?php echo $number->simnumber?>"/>
                        <input type="hidden" name="numbercost" value="<?php echo $number->simcost?>"/>
                        <input type="text" name="username" placeholder="Họ tên của bạn *">
                        <input type="number" name="email" placeholder="Điện thoại liên hệ *">
                        <input type="text" name="address" placeholder="Địa chỉ *">
                        <label for="job">Interests:</label>
                    </fieldset>
                    <fieldset>
                        <legend><span class="number">2</span> Thêm thông tin</legend>
                        <textarea name="requirements" placeholder="Điền yêu cầu của bạn vào đây "></textarea>
                    </fieldset>
                    <input type="submit" name="buynumbernow" value="Đặt Sim" />
                <?php echo form_close(); ?>
            </div>
    </div>
 
<br>
<div style=" background: #fff; border: 1px solid #ccc; ">
    <div style=" padding:10px; ">
        <strong>Hướng dẫn cách thức mua sim <?php echo  $number->simnumber?>:</strong>
        <br> ▪ Cách 1: <a href="<?php echo site_url();?>">Sim Hoàng Quyền</a> giao sim và thu tiền tận nhà miễn phí (áp dụng Hà Nội, Tp.HCM và các tỉnh/thành có đại lý)
        <br> ▪ Cách 2: Quý khách đến cửa hàng tại Hà Nội hoặc Tp.HCM (Xem Địa chỉ ở cuối trang)
        <br> ▪ Cách 3: Đặt cọc và thanh toán tiền còn lại khi nhận sim (áp dụng tại các tỉnh không có đại lý): Quý khách đảm bảo việc mua hàng bằng cách đặt cọc tối thiểu 10% giá trị sim qua chuyển khoản hoặc mã thẻ cào. 
        Chúng tôi sẽ gửi bưu điện phát sim đến tay quý khách và thu tiền còn lại 
        <em>(Hệ thống bưu điện trên cả nước đều cung cấp dịch vụ thu hộ tiền cho người bán - gọi tắt là COD. Theo đó, bưu điện sẽ giao hàng (sim) đến tận tay quý khách và thu tiền cho chúng tôi)</em>
        <br>
        <br>
        <em>Chúc quý khách gặp nhiều may mắn khi sở hữu thuê bao <strong><?php echo  $number->simnumber?></strong></em>
    </div>
</div>
<center>
    <h2>So dep <?php echo  $number->simnumber?>, giá sim <?php echo  $number->simnumber?>, so dien thoai <?php echo  $number->simnumber?></h2></center>
<br>
<?php endforeach;?>
<?php endif;?>
</article>