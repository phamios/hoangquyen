<br/>
<b>Sim số đẹp</b>
Sim so dep giá rẻ các mạng Viettel, Mobi, Vina. Bán Sim số đẹp giá gốc, đăng ký thông tin chính chủ. Giao sim số đẹp miễn phí Toàn Quốc
 
<!-- VIP DANH NHAN -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tbody>
        <tr>
            <td valign="middle">
            <a href="<?php echo site_url();?>"><strong style=" color: red; "><h1>Kết quả tìm kiếm số</h1></strong> </a>
            </td>
            <td width="200" align="right" valign="middle"></td>
        </tr>
    </tbody>
</table> 
<table class="tblsim-res2" width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC">
    <tbody>
        <?php if($listSearch <> null):?>
        <?php $i = 0;?>
        <?php foreach($listSearch as $vip):?>
        <?php 
                $class = "";
                if($vip->simtelco == "viettel"){
                    $class = "lg-viettel";
                }elseif($vip->simtelco == "vinaphone"){
                    $class="lg-vinaphone";
                }elseif($vip->simtelco == "mobifone"){
                    $class="lg-mobifone";
                }
            ?>
        <?php $i++;?>
        <tr>
            <td class="hide480" height="32" align="center" valign="middle" bgcolor="#FFFFFF"><span class="sott"><?php echo $i;?></span></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF"><span class="simso"><a href="#"><?php echo $vip->simnumber?></a></span></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF"><strong><?php echo number_format($vip->simcost)?> đ</strong></td>
            <td class="hide480" align="center" valign="middle" bgcolor="#FFFFFF"><a href="#" class="<?php echo $class;?>"><?php echo $vip->simtelco?></a></td>
            <td class="hide480 hide555" align="center" valign="middle" bgcolor="#FFFFFF">
                <span class="cat2"><a href="<?php echo site_url('kieu-sim/'.substr($vip->simtype_slug,0,-1));?>"><?php echo $vip->simtype?></a></span></td>
            <td class="" align="center" valign="middle" bgcolor="#FFFFFF"><span class="news2 btn-mua"  onmouseover="this.style.textDecoration = &#39;underline&#39;;this.style.cursor = &#39;pointer&#39;;" onmouseout="this.style.textDecoration = &#39;none&#39;;">Mua sim</span></td>
        </tr>
        <?php endforeach;?>
        <?php endif;?>
    </tbody>
</table>
 
 