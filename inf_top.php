<section id="inf-section" class="inf-section ">
        <div class="container">
            <?php if($db_ad->id and $db_ad->file1 !== '') { 
                    echo '<div class="inf-top col-lg-10 offset-lg-2">' ;
                    echo '<img src="/ad/'.trim($db_ad->file1).'" style="cursor: pointer" onclick="javascript:window.open(\''.$db_ad->url1.'\');">' ;
                    echo '</div>';
                    } else {
                        echo '<div class="inf-top col-lg-10 offset-lg-2"></div>';} ?>
        </div>
    </section>