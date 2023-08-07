<?php if ($bo_table == 'c1') { ?>

<div class="sub-tab inner">
    <a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=c1&wr_id=3&pu_id=<?php echo $pu_id; ?>">안전관리대상제품 표시사항 작성 지침</a>
    <a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=c1&wr_id=4&pu_id=<?php echo $pu_id; ?>">KC인증관리 활용 기업 사례집</a>
</div>


<?php } ?> 


<?php if ($bo_table == 'd1') { ?>

<div class="sub-tab inner">
    <a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=d1&wr_id=4&pu_id=<?php echo $pu_id; ?>">ICT컴플라이언스</a>
    <a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=d1&wr_id=5&pu_id=<?php echo $pu_id; ?>">한일전자</a>
    <a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=d1&wr_id=6&pu_id=<?php echo $pu_id; ?>">공감중문</a>
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
