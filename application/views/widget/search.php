<?php echo form_open_multipart('home/search', array('id' => "timkiem")); ?>
    <div class="row">
        <input class="search-input" name="search_keyword" type="tel" placeholder="Nhập số cần tìm" value="">
        <button class="search-btn" type="submit" name="bttSearch">
            <svg width="15px" height="15px">
                <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467"></path>
            </svg> Tìm <span class="hide480">kiếm</span>
        </button>
        <ul style=" padding-left: 15px; ">
            <li>Tìm sim có số <strong>6789</strong> bạn hãy gõ <strong>6789</strong></li>
            <li>Tìm sim có đầu <strong>090 </strong>đuôi <strong>8888</strong> hãy gõ <strong>090<font size="2">*</font>8888</strong></li>
            <li>Tìm sim bắt đầu bằng <strong>0914</strong> đuôi bất kỳ, hãy gõ:&nbsp;<strong>0914<font size="2">*</font></strong></li>
        </ul>
    </div>
<?php echo form_close(); ?>