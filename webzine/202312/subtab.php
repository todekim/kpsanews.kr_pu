<?php if ($bo_table == 'c1') { ?>

<div class="sub-tab inner">
    <a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=c1&wr_id=5&pu_id=<?php echo $pu_id; ?>">안전성조사(수시2차)와 안전성 집중검사</a>
    <a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=c1&wr_id=6&pu_id=<?php echo $pu_id; ?>">제조·유통업을 위한 환경성 표시·광고 가이드라인</a>
    <a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=c1&wr_id=7&pu_id=<?php echo $pu_id; ?>">「한국인정기구(KOLAS) 공인기관 성과사례」</a>
    <a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=c1&wr_id=8&pu_id=<?php echo $pu_id; ?>">공정위·소비자원, 중고거래 플랫폼과 제품안전·분쟁해결 자율 협약 체결</a>
</div>


<?php } ?> 


<?php if ($bo_table == 'd1') { ?>

<div class="sub-tab inner">
    <a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=d1&wr_id=7&pu_id=<?php echo $pu_id; ?>">(주)열린문</a>
    <a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=d1&wr_id=8&pu_id=<?php echo $pu_id; ?>">(주)유닉스</a>
    <a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=d1&wr_id=9&pu_id=<?php echo $pu_id; ?>">(주)아하</a>
    <a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=d1&wr_id=10&pu_id=<?php echo $pu_id; ?>">(주)세홍</a>
    <a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=d1&wr_id=11&pu_id=<?php echo $pu_id; ?>">(주)인익스</a>
    <a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=d1&wr_id=12&pu_id=<?php echo $pu_id; ?>">실버팍스</a>
</div>

<?php } ?> 


<?php if ($bo_table == 'c1' || $bo_table == 'd1') { ?>

 <script>
    var url = $(location).attr('href').split('&')
    $('.sub-tab a').each(function(){
        var linkId = $(this).attr('href').split('&')
        if(url[1] == linkId[1]){
            $(this).addClass('on')
        }
    })
</script>

<?php } ?> 
