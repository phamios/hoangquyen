<br/>
<b>Sim số đẹp</b>
Sim so dep giá rẻ các mạng Viettel, Mobi, Vina. Bán Sim số đẹp giá gốc, đăng ký thông tin chính chủ. Giao sim số đẹp miễn phí Toàn Quốc
 
<!-- VIP DANH NHAN -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tbody>
        <tr>
            <td valign="middle">
            <a href="<?php echo site_url();?>"><strong style=" color: red; "><h1>Sim Vip Doanh Nhân</h1></strong> </a>
            </td>
            <td width="200" align="right" valign="middle"></td>
        </tr>
    </tbody>
</table> 
<table class="tblsim-res2" width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC">
    <tbody>
        <?php if($listVip <> null):?>
        <?php $i = 0;?>
        <?php foreach($listVip as $vip):?>
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
            <td align="center" valign="middle" bgcolor="#FFFFFF"><span class="simso"><a href="<?php echo site_url(trim(str_replace('.','',$vip->simnumber)).'-'.$vip->id.'.html');?>"><?php echo $vip->simnumber?></a></span></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF"><strong><?php echo number_format($vip->simcost)?> đ</strong></td>
            <td class="hide480" align="center" valign="middle" bgcolor="#FFFFFF"><a href="#" class="<?php echo $class;?>"><?php echo $vip->simtelco?></a></td>
            <td class="hide480 hide555" align="center" valign="middle" bgcolor="#FFFFFF">
                <span class="cat2"><a href="<?php echo site_url('kieu-sim/'.substr($vip->simtype_slug,0,-1));?>"><?php echo $vip->simtype?></a></span></td>
            <td class="" align="center" valign="middle" bgcolor="#FFFFFF">
            <a href="<?php echo site_url(trim(str_replace('.','',$vip->simnumber)).'-'.$vip->id.'.html');?>" target="_blank">
                <span class="news2 btn-mua" onclick="ctsim(&#39;0964788888&#39;)" onmouseover="this.style.textDecoration = &#39;underline&#39;;this.style.cursor = &#39;pointer&#39;;" onmouseout="this.style.textDecoration = &#39;none&#39;;">Mua sim</span>
                </a>
            </td>
        </tr>
        <?php endforeach;?>
        <?php endif;?>
    </tbody>
</table>

<!-- SALE THEO NGAY -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tbody>
        <tr>
            <td valign="middle">
                <a href="<?php echo site_url();?>"><strong style=" color: red; "><h1>Sim khuyến mãi trong ngày</h1></strong> </a>
            </td>
            <td width="200" align="right" valign="middle"></td>
        </tr>
    </tbody>
</table> 
<table class="tblsim-res2" width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC">
    <tbody>
        <?php if($listSale <> null):?>
        <?php $i = 0;?>
        <?php foreach($listSale as $sale):?>
            
            <?php 
                $class = "";
                if($sale->simtelco == "viettel"){
                    $class = "lg-viettel";
                }elseif($sale->simtelco == "vinaphone"){
                    $class="lg-vinaphone";
                }elseif($sale->simtelco == "mobifone"){
                    $class="lg-mobifone";
                }
            ?>
        <?php $i++;?>
        <tr>
            <td class="hide480" height="32" align="center" valign="middle" bgcolor="#FFFFFF"><span class="sott"><?php echo $i;?></span></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF"><span class="simso"><a href="<?php echo site_url(trim(str_replace('.','',$sale->simnumber)).'-'.$sale->id.'.html');?>"><?php echo $sale->simnumber?></a></span></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF"><strong><?php echo number_format($sale->simcost)?> đ</strong></td>
            <td class="hide480" align="center" valign="middle" bgcolor="#FFFFFF"><a href="#" class="<?php echo $class;?>"><?php echo $sale->simtelco?></a></td>
            <td class="hide480 hide555" align="center" valign="middle" bgcolor="#FFFFFF">
                <span class="cat2"><a href="<?php echo site_url('kieu-sim/'.substr($sale->simtype_slug,0,-1));?>"><?php echo $sale->simtype?></a></span></td>
                <td class="" align="center" valign="middle" bgcolor="#FFFFFF">
            <a href="<?php echo site_url(trim(str_replace('.','',$sale->simnumber)).'-'.$sale->id.'.html');?>" target="_blank">
                <span class="news2 btn-mua" onclick="ctsim(&#39;0964788888&#39;)" onmouseover="this.style.textDecoration = &#39;underline&#39;;this.style.cursor = &#39;pointer&#39;;" onmouseout="this.style.textDecoration = &#39;none&#39;;">Mua sim</span>
                </a>
            </td>

        </tr>
        <?php endforeach;?>
        <?php endif;?>
    </tbody>
</table>


<!-- SIM ĐỀ XUẤT -->
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tbody>
        <tr>
            <td valign="middle">
                <a href="<?php echo site_url();?>"><strong style=" color: red; "><h1>Sim đề xuất</h1></strong> </a>
            </td>
            <td width="200" align="right" valign="middle"></td>
        </tr>
    </tbody>
</table> 
<table class="tblsim-res2" width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC">
    <tbody>
        <?php if($listSuggest <> null):?>
        <?php $i = 0;?>
        <?php foreach($listSuggest as $suggest):?>
        <?php 
                $class = "";
                if($suggest->simtelco == "viettel"){
                    $class = "lg-viettel";
                }elseif($suggest->simtelco == "vinaphone"){
                    $class="lg-vinaphone";
                }elseif($suggest->simtelco == "mobifone"){
                    $class="lg-mobifone";
                }
            ?>
        <?php $i++;?>
        <tr>
            <td class="hide480" height="32" align="center" valign="middle" bgcolor="#FFFFFF"><span class="sott"><?php echo $i;?></span></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF"><span class="simso"><a href="<?php echo site_url(trim(str_replace('.','',$suggest->simnumber)).'-'.$suggest->id.'.html');?>" target="_blank"><?php echo $suggest->simnumber?></a></span></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF"><strong><?php echo number_format($suggest->simcost)?> đ</strong></td>
            <td class="hide480" align="center" valign="middle" bgcolor="#FFFFFF"><a href="#" class="<?php echo $class;?>"><?php echo $suggest->simtelco?></a></td>
            <td class="hide480 hide555" align="center" valign="middle" bgcolor="#FFFFFF">
                <span class="cat2"><a href="<?php echo site_url('kieu-sim/'.substr($suggest->simtype_slug,0,-1));?>"><?php echo $suggest->simtype?></a></span></td>
            <td class="" align="center" valign="middle" bgcolor="#FFFFFF">
                <a href="<?php echo site_url(trim(str_replace('.','',$suggest->simnumber)).'-'.$suggest->id.'.html');?>" target="_blank">
                <span class="news2 btn-mua" onclick="ctsim(&#39;0964788888&#39;)" onmouseover="this.style.textDecoration = &#39;underline&#39;;this.style.cursor = &#39;pointer&#39;;" onmouseout="this.style.textDecoration = &#39;none&#39;;">Mua sim</span>
                </a>
            </td>
        </tr>
        <?php endforeach;?>
        <?php endif;?>
    </tbody>
</table>
 