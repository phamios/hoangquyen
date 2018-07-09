<aside>
    <div class="list-group">
        <a href="javascript:void(0);" class="list-group-item active">Bán hàng online</a>
        <div class="contact-right" id="contact-right">
            <div id="hlkd"><span class="sales">Nhật Lệ</span>
                <br><a href="tel:0911.43.6699"><span class="hotline">098.998.98.98</span></a>
                <br>
                <div class="line-bottom"></div><span class="sales">Nguyễn Thu</span>
                <br><a href="tel:0888.14.6699"><span class="hotline">098.998.98.98</span></a>
                <br>
                
                <div class="line-bottom"></div>
            </div>
            
            <a href="javascript:void(0)" onclick="this.style.display = &#39;none&#39;;document.getElementById(&#39;gddl&#39;).style.display = &#39;block&#39;;document.getElementById(&#39;bpkt&#39;).style.display = &#39;block&#39;"><span>Xem thêm <div class="arrow-right"></div></span></a>
            <div id="gddl">
                
                <span class="sales">Thu Hoài</span>
                <br><a href="tel:0888.10.6699"><span class="hotline">098.998.98.98</span></a>
                <br>
                <div class="line-bottom"></div><span class="sales">Yến Chi</span>
                <br><a href="tel:0941546699"><span class="hotline">098.998.98.98</span></a>
                <br>
                
                <div class="line-bottom"></div>
            </div>
            <div id="bpkt">
                <br>
                <br>
                <span>Bộ phận kế toán:</span>
                <br> 098.998.98.98
                <br>
            </div>
            <h3 style="margin-bottom: 5px">Góp ý, khiếu nại:</h3><a href="tel:098.998.98.98"><strong>098.998.98.98</strong></a>
            <br>
            <br>
        </div>
    </div>
    <div class="list-group">
        <a href="javascript:void(0);" class="list-group-item active">Đơn hàng mới</a>
        <div class="wgc-right">
            <marquee direction="up" width="185" onmouseover="this.stop()" scrolldelay="1" scrollamount="2" onmouseout="this.start()" height="350" align="left">
                <?php if($listorders <> null):?>
                <?php foreach($listorders as $order):?>
                &nbsp;&nbsp;<strong><font color="#FF0000"><?php echo $order->fullname?></font></strong>
                <br> &nbsp;&nbsp;Đặt sim: <strong><?php echo mb_substr($order->phonenumber, 0, -5)?>...</strong>
                <br> &nbsp;&nbsp;Vào lúc: <?php echo $order->orderdate?>.
                <hr width="95%" size="1" noshade="noshade"> &nbsp;&nbsp; 
                <?php endforeach;?>
                <?php endif;?>
            </marquee>
        </div>
    </div>
    <div class="list-group  item-tintuc">
        <a href="javascript:void(0);" class="list-group-item active">Bạn cần biết</a>
        <a class="list-group-item lgit" href="#bai-viet/2955/khuyen-mai-vang-lap-dat-internet-cap-quang-tai-ha-noi-24-7-lien-he-0941113911.html">KHUYẾN MẠI VÀNG Lắp đặt internet cáp quang tại Hà Nội 24/7</a>
        <a class="list-group-item lgit" href="#sim-so-dep/15/cam-ket-ban-hang.html">Cam kết bán hàng</a>
        <a class="list-group-item lgit" href="#bai-viet/64/kiem-tra-thong-tin-chu-thue-bao-di-dong.html">Kiểm tra thông tin chủ thuê bao di động</a>
        <a class="list-group-item lgit" href="#bai-viet/65/cach-mua-sim-va-thanh-toan.html">Cách mua sim và thanh toán</a>
        <a class="list-group-item lgit" href="#bai-viet/63/kiem-tra-sim-con-hay-da-ban.html">Kiểm tra sim còn hay đã bán</a>
        <a class="list-group-item lgit" href="#bai-viet/27/cach-chon-sim-hop-tuoi.html">Cách chọn Sim hợp tuổi</a>
        <a class="list-group-item lgit" href="#bai-viet/66/tai-sao-mua-duoc-sim-gia-re-tai-sim-thang-long.html">Tại sao mua được sim giá rẻ tại Sim Thăng Long</a>
        <a class="list-group-item lgit" href="#bai-viet/65/Cach-mua-sim-va-thanh-toan.html">Hướng dẫn MUA HÀNG VÀ THANH TOÁN</a>
        <a class="list-group-item lgit" href="javascript:void(0);" onclick="document.getElementById(&#39;chonkhoanggiabg&#39;).style.display=&#39;block&#39;;document.getElementById(&#39;framedanhchodaily&#39;).innerHTML=&#39;&lt;br&gt;&lt;iframe src=\&#39;https://appsim.vn/bang-so-uu-tien\&#39;  frameborder=\&#39;0\&#39; style=\&#39;overflow:hidden;height:100vh;width:100vw;max-width: 300px;max-height: 400px;\&#39; /&gt;&#39;;document.getElementById(&#39;danhchodaily&#39;).style.top=&#39;0&#39;">Dành cho đại lý Sim số đẹp</a>
        <div id="danhchodaily" class="w3-modal-content" style="top:-1500px;position: fixed;z-index: 9;width: 300px;height: 450px;text-align: center;left: 50%;margin: 50px 0px 0px -150px;transition: all 0.2s linear;">
            <div class="w3-container" style=" padding: 0; ">
                <span onclick="document.getElementById(&#39;danhchodaily&#39;).style.top=&#39;-1500px&#39;;document.getElementById(&#39;chonkhoanggiabg&#39;).style.display=&#39;none&#39;;" class="w3-button w3-display-topright">×</span>
                <p id="framedanhchodaily">
                </p>
            </div>
        </div>
    </div>
    <div class="list-group  item-tintuc mobile-hide">
        <a href="javascript:void(0);" class="list-group-item active">Tin mới cập nhật</a>
        <a class="list-group-item lgit" href="#bai-viet/2967/huong-dan-cach-chuyen-11-so-ve-10-so-tren-android.html">Hướng dẫn cách chuyển 11 số về 10 số trên Android</a>
        <a class="list-group-item lgit" href="#bai-viet/2966/4g-bung-no-cuoc-dua-khong-gioi-han.html">4G bùng nổ - Cuộc đua không giới hạn</a>
        <a class="list-group-item lgit" href="#bai-viet/2965/dinh-mao-1987-nen-chon-sim-nao-cho-hop-menh-hop-tuoi.html">Đinh Mão 1987 nên chọn sim nào cho hợp mệnh, hợp tuổi?</a>
        <a class="list-group-item lgit" href="#bai-viet/2964/huong-dan-cach-chon-sim-ganh-dao-theo-menh-mang-den-nhieu-van-may.html">Hướng dẫn cách chọn sim gánh đảo theo mệnh mang đến nhiều vận may</a>
        <a class="list-group-item lgit" href="#bai-viet/2963/thuc-hu-cau-chuyen-phong-thuy-va-mang-tai-loc-dang-sau-sieu-sim-0989999999-cua-ngoc-trinh.html">Thực hư câu chuyện phong thủy và mang tài lộc đằng sau siêu sim 098.9999999 của Ngọc Trinh</a>
        <a class="list-group-item lgit" href="#bai-viet/2962/sieu-sim-chuc-ti-0989999999-tung-qua-tay-nhung-dai-gia-nao.html">Siêu sim chục tỉ 0989.999.999 từng qua tay những đại gia nào?</a>
        <a class="list-group-item lgit" href="#bai-viet/2961/ly-do-sim-11-so-vinaphone-hut-khach-trong-khi-viettel-lai-e-am.html">Lý do sim 11 số Vinaphone hút khách trong khi Viettel lại ế ẩm?</a>
        <a class="list-group-item lgit" href="#bai-viet/2960/bo-3-goi-data-moi-toanh-h5-h10-d15-cuavinaphone.html">Bộ 3 gói Data mới toanh H5, H10, D15 củaVinaphone</a>
        <a class="list-group-item lgit" href="#bai-viet/2959/so-phan-cua-dau-so-tien-012345-se-nhu-the-nao-khi-chuyen-ve-10-so.html">Số phận của đầu số tiến 012345 sẽ như thế nào khi chuyển về 10 số?</a>
        <a class="list-group-item lgit" href="#bai-viet/2956/ly-giai-nguyen-nhan-my-viettel-khong-phe-duyet-khi-da-bo-sung-thong-tin-ca-nhan.html">Lý giải nguyên nhân My Viettel không phê duyệt khi đã bổ sung thông tin cá nhân</a>
    </div>
</aside>