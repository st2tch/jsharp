<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$admin = get_admin("super");

// 사용자 화면 우측과 하단을 담당하는 페이지입니다.
// 우측, 하단 화면을 꾸미려면 이 파일을 수정합니다.
?>
</div><!-- container End -->

<div id="ft">
    <div class="ft_wr">
        <ul>
             <li class="ft_box">
                <h2><i class="fa fa-phone"></i><br>고객센터</h2>
                <strong>02-123-1234</strong>
                <p>월-금 am 9:00 - pm 05:00<br>점심시간 : am 12:00 - pm 01:00</p>
            </li>
             <li class="ft_box ft_info">
                <h2><i class="fa fa-building-o"></i><br><?php echo $config['cf_title']; ?> 정보</h2>
                <p>
                <span>주소 : <?php echo $default['de_admin_company_addr']; ?></span><br>
                <span>대표 : <?php echo $default['de_admin_company_owner']; ?></span> <br>
                <span>사업자 등록번호 : <?php echo $default['de_admin_company_saupja_no']; ?></span><br>
                <span>전화 : <?php echo $default['de_admin_company_tel']; ?></span>
                <span>팩스 : <?php echo $default['de_admin_company_fax']; ?></span><br>
                <span>통신판매업신고번호 : <?php echo $default['de_admin_tongsin_no']; ?></span><br>
                <span>개인정보 보호책임자 : <?php echo $default['de_admin_info_name']; ?></span>
                <?php if ($default['de_admin_buga_no']) echo '<br><span>부가통신사업신고번호 : '.$default['de_admin_buga_no'].'</span>'; ?>
                </p>
            </li>

            <li class="ft_box"><?php echo latest('theme/shop_basic', 'notice', 4, 23); ?></li>
        </ul>
    </div>
    <div class="ft_wr1">
        <div id="ft_company">
            <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=company">회사소개</a>
            <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=privacy">개인정보</a>
            <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=provision">이용약관</a>
            <?php
            if(G5_DEVICE_BUTTON_DISPLAY && G5_IS_MOBILE) { ?>
            <a href="<?php echo get_device_change_url(); ?>" id="device_change">PC 버전</a>
            <?php } ?>     
            <div class="ft_copy">Copyright &copy; 2001-2013 <?php echo $default['de_admin_company_name']; ?>. All Rights Reserved. </div>
        </div>
       
     </div>
     <a href="#" id="ft_to_top"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></a>

</div>

<?php
$sec = get_microtime() - $begin_time;
$file = $_SERVER['SCRIPT_NAME'];

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<script src="<?php echo G5_JS_URL; ?>/sns.js"></script>

<?php
include_once(G5_THEME_PATH.'/tail.sub.php');
?>
