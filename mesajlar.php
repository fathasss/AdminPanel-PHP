<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12" >
                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                <thead>
                    <tr>
                        <th>Mesaj No</th>
                        <th>Gönderen</th>
                        <th>Gönderen Maili</th>
                        <th>Mesaj İçeriği</th>
                        </tr>
                        </thead>
                        <?php
                            $i=1;
                            $cek=$vt->query("SELECT * FROM uyeler");
                            $message=$vt->query("SELECT * FROM mesajlar");
                            while($goster=$cek->fetch_assoc() && $goster_mesaj=$message->fetch_assoc()){
                                echo "<tbody><tr>
                                <td>$goster_mesaj[mesaj_id]</td>
                                <td>$goster[uye_adi]</td>
                                <td>$goster[uye_email]</td>
                                <td>$goster_mesaj[mesaj]</td>";
                                $i++;
                            }
                        ?>
            </table>
            </div>
        </div>
    </div>
</div>