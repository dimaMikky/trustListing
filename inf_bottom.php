<section id="inf-section" class="inf-section ">
        <div class="container">
        <?php if($db_ad->id and $db_ad->file4 !== '') { 
                    echo '<div class="inf-bottom col-lg-10 offset-lg-0">' ;
                    echo '<img src="/ad/'.trim($db_ad->file4).'" style="cursor: pointer" onclick="javascript:window.open(\''.$db_ad->url4.'\');">' ;
                    echo '</div>';
                    } ?>
    </section>