<?php
$string = (isset($_GET['id'])) ? $_GET['id'] : "0" ;
$id = str_replace(array("'",'"'),'',$string);
$trimmed_id = trim($id);
include("admin/connect.php");
$result = mysql_query("SELECT * FROM mining WHERE id='$trimmed_id'") or die(mysql_error());
$ad = mysql_query("SELECT * FROM mining_ad WHERE id='$trimmed_id'") or die(mysql_error());
$db_ad=mysql_fetch_object($ad);
$db_data=mysql_fetch_object($result);
if($db_data->id == null) {header("Location: mining.php"); exit('');}
if($db_data->review == null) {header("Location: mining.php"); exit('');}
include('beg.php');
include('inf_top.php');
     ?>
    <section id="main-section" class="main-section">
        <div class="container">
            <div class="row">
                <!--Left-->
                <div class="col-lg-8 ls content">
                    <!--News-Left-1-->

                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-category text-info">
                                <?php echo $db_data->title ?>
                            </h6>
                            <?php if($db_data->review_rus == "") {
                            echo $db_data->review;
                            } else { echo $review=($lang=='en') ? $db_data->review : $db_data->review_rus;} ?>
                            <p class="card-description">
                            </p>
                        </div>
                    </div>

                </div>
                <!--Right-->
                <div class="col-lg-4 rs">
                    <?php if ($db_data->pros1 !== '' and $db_data->cons1 !== ''){ ?>
                    <div class="card card-blog crd">
                        <div class="card-body ">
                            <h6 class="card-category text-success">Pro and Contra</h6>
                            <h4 class="card-title">
                                <a href="#pablo">Pro:</a>
                            </h4>
                            <p class="card-description">
                                <ul>
                                    <li>
                                        <?php if($db_data->pros1_rus == "") {
                                         echo $db_data->pros1;
                                    } else { echo $pros1=($lang=='en') ? $db_data->pros1 : $db_data->pros1_rus;} ?>
                                    </li>
                                    <?php if ($db_data->pros2 !== ''){ ?>
                                    <li>
                                        <?php if($db_data->pros2_rus == "") {
                                         echo $db_data->pros2;
                                    } else { echo $pros2=($lang=='en') ? $db_data->pros2 : $db_data->pros2_rus;} ?>
                                    </li>
                                    <?php } ?>
                                    <?php if ($db_data->pros3 !== ''){ ?>
                                    <li>
                                        <?php if($db_data->pros3_rus == "") {
                                         echo $db_data->pros3;
                                    } else { echo $pros3=($lang=='en') ? $db_data->pros3 : $db_data->pros3_rus;} ?>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </p>
                            <h4 class="card-title">
                                <a href="#pablo">Contra:</a>
                            </h4>
                            <p class="card-description">
                                <ul>
                                    <li>
                                        <?php if($db_data->cons1_rus == "") {
                                         echo $db_data->cons1;
                                    } else { echo $cons1=($lang=='en') ? $db_data->cons1 : $db_data->cons1_rus;} ?>
                                    </li>
                                    <?php if ($db_data->cons2 !== ''){ ?>
                                    <li>
                                        <?php if($db_data->cons2_rus == "") {
                                         echo $db_data->cons2;
                                    } else { echo $cons2=($lang=='en') ? $db_data->cons2 : $db_data->cons2_rus;} ?>
                                    </li>
                                    <?php } ?>
                                    <?php if ($db_data->cons3 !== ''){ ?>
                                    <li>
                                        <?php if($db_data->cons3_rus == "") {
                                         echo $db_data->cons3;
                                    } else { echo $cons3=($lang=='en') ? $db_data->cons3 : $db_data->cons3_rus;} ?>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <?php } ?>
                    <!--- news-->
                    <div class="card card-blog crd">
                        <div class="card-body ">
                            <h6 class="card-category text-success">Cloudbet.com is located in</h6>
                            <p class="card-description">Curacao, Netherlands Antilles
                            </p>
                        </div>
                    </div>
                    <?php if($db_ad->id and $db_ad->file2 !== '') { 
                    echo '<div class="card card-blog crd">' ;
                    echo '<img src="/ad/'.trim($db_ad->file2).'" style="cursor: pointer" onclick="javascript:window.open(\''.$db_ad->url2.'\');">' ;
                    echo '</div>';
                    } ?>
                    <!--- news-->
                    <div class="card card-blog crd">
                        <div class="card-body ">
                            <h6 class="card-category text-success">Bonus</h6>
                            <p class="card-description">100% welcome bonus up to 5 BTC
                            </p>
                        </div>
                    </div>
                    <!--- news-->
                    <div class="card card-blog crd">
                        <div class="card-body ">
                            <h6 class="card-category text-success">Deposits</h6>
                            <p class="card-description">Only in Bitcoin</p>
                        </div>
                    </div>
                    <!--- news-->
                    <div class="card card-blog crd">
                        <div class="card-body ">
                            <h6 class="card-category text-success">Withdrawals</h6>
                            <p class="card-description">Only Bitcoin
                            </p>
                        </div>
                    </div>
                    <!--- news-->
                    <div class="card card-blog crd">
                        <div class="card-body ">
                            <h6 class="card-category text-success">Games</h6>
                            <p class="card-description">
                                <ul>
                                    <li>Table Games</li>
                                    <li>Video Poker</li>
                                    <li>Live Casinos</li>
                                    <li>Soft Games</li>
                                    <li>3D Slots</li>
                                    <li>Traditional Slots</li>
                                    <li>Sports Betting</li>
                                </ul>
                            </p>
                        </div>
                    </div>

                      <?php if($db_ad->id and $db_ad->file3 !== '') { 
                    echo '<div class="card card-blog crd">' ;
                    echo '<img src="/ad/'.trim($db_ad->file3).'" style="cursor: pointer" onclick="javascript:window.open(\''.$db_ad->url3.'\');">' ;
                    echo '</div>';
                    } ?>
                <!--- news-->
                <div class="card card-blog crd">
                    <div class="card-body ">
                        <h6 class="card-category text-success">Provably fair?</h6>
                        <p class="card-description">No</p>
                    </div>
                </div>
                <!--- news-->
                <div class="card card-blog crd">
                    <div class="card-body ">
                        <h6 class="card-category text-success">US Players allowed?</h6>
                        <p class="card-description">Allowed</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>

    <?php
include('inf_bottom.php');
include('footer.php');
?>