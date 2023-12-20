
<?php 

$bo_tit = $board['bo_subject'];
$img_root="&#47;images";
if ( $bo_table == "temp") $bo_tit="중소기업 애로기술 해결 지원사업";
if ( $bo_table == "temp") $img_root="&#47;webzine&#47;$pu_id&#47;images&#47;$bo_table";
if ( $bo_table == "") $bo_tit="온라인 패트롤";
if ( $bo_table == "") $bo_table="monitor";
if ( $bo_table == "monitor") $bo_tit="온라인 패트롤";

?>

<div id="sub-<?=$bo_table;?>" class="sub-wrap">
    <section class="sub-visual">
        <div class="inner">
            <div class="cate">
                <img src="<?=$img_root;?>/<?=$bo_table;?>_cate_ico.png" alt="ico" class="img-fluid">
                <p><?=$bo_tit;?></p>
            </div>
        </div>
    </section>

