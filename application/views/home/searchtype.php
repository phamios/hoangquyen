<br/>
<b>Sim số đẹp</b>
Sim so dep giá rẻ các mạng Viettel, Mobi, Vina. Bán Sim số đẹp giá gốc, đăng ký thông tin chính chủ. Giao sim số đẹp miễn phí Toàn Quốc
 
<table class="tblsim-res2" width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC">
    <tbody>
        <?php if($listNumber <> null):?>
        <?php $i = 0;?>
        <?php foreach($listNumber as $vip):?>
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
            <td align="center" valign="middle" bgcolor="#FFFFFF"><span class="simso"><a href="<?php echo site_url(trim(str_replace('.','',$vip->simnumber)).'-'.$vip->id.'.html');?>" target="_blank"><?php echo $vip->simnumber?></a></span></td>
            <td align="center" valign="middle" bgcolor="#FFFFFF"><strong><?php echo number_format($vip->simcost)?> đ</strong></td>
            <td class="hide480" align="center" valign="middle" bgcolor="#FFFFFF"><a href="#" class="<?php echo $class;?>"><?php echo $vip->simtelco?></a></td>
            <td class="hide480 hide555" align="center" valign="middle" bgcolor="#FFFFFF">
                <span class="cat2"><a href="<?php echo site_url('kieu-sim/'.$vip->simtype);?>"><?php echo $vip->simtype?></a></span></td>
            <td class="" align="center" valign="middle" bgcolor="#FFFFFF">
                <span class="news2 btn-mua"  onmouseover="this.style.textDecoration = &#39;underline&#39;;this.style.cursor = &#39;pointer&#39;;" onmouseout="this.style.textDecoration = &#39;none&#39;;">
                    <a href="<?php echo site_url(trim(str_replace('.','',$vip->simnumber)).'-'.$vip->id.'.html');?>" target="_blank">
                        Mua sim
                    </a>
                </span>
            </td>
        </tr>
        <?php endforeach;?>
        <?php endif;?>
    </tbody>
</table>
 
 