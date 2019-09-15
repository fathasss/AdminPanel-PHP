<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
                                <center><img src="images/pp2.jpg" style=" border:solid 3 black;width:230px;height:230px;"></center>
                                </br>
                                <div class="content">
						            <div class="module">
							            <div class="module-head">
                                            <?php
                                            $isim=$vt->query("SELECT * FROM uyeler");
                                            $isim_dizi=$isim->fetch_assoc();
                                            echo "<center><strong>$isim_dizi[uye_adi]</strong></center>";
                                            ?>
                                            <div class="content">
							                        <div class="module-head">
                                                    <?php
                                                    $isim=$vt->query("SELECT * FROM uyeler");
                                                    $isim_dizi=$isim->fetch_assoc();
                                                    echo "<center><strong>$isim_dizi[uye_email]</strong></center>";
                                                    ?>
                                                    <div class="content">
							                                <div class="module-head">
                                                            <?php
                                                            $cins=$vt->query("SELECT * FROM uyeler");
                                                            $cinsbelirt=$cins->fetch_assoc();
                                                            if($cinsbelirt['uye_cinsiyet']==1){
                                                                echo "<center><strong>ERKEK</strong></center>";
                                                            }
                                                            if($cinsbelirt['uye_cinsiyet']==2){
                                                                echo "<center><strong>KADIN</strong></center>";
                                                            }                                                           
                                                            ?>
                                                            <div class="content"></br>
                                                                <?php
                                                                $durum=$vt->query("SELECT * FROM uyeler");
                                                                $durumbelirt=$durum->fetch_assoc();
                                                                if($durumbelirt['uye_online']==1){
                                                                    echo '<center><strong><a class="btn btn-large btn-success">ONLINE</a></strong></center>';
                                                                }
                                                                if($cinsbelirt['uye_online']==2){
                                                                    echo '<center><strong><a class="btn btn-large btn-danger">OFFLINE</a></strong></center>';
                                                                }                                                           
                                                                ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
