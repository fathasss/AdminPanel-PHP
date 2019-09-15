<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12" >
                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                <thead>
                    <tr>
                        <th>Kullanıcı Numarası</th>
                        <th>Kullanıcı Adı</th>
                        <th>Kullanıcı Maili</th>
                        <th>Kullanıcı Durumu</th>
                        </tr>
                        </thead>
                        <?php
                            $i=1;
                            $cek=$vt->query("SELECT * FROM uyeler");
                            while($goster=$cek->fetch_assoc()){
                                echo "<tbody><tr>
                                <td>$i</td>
                                <td>$goster[uye_adi]</td>
                                <td>$goster[uye_email]</td>
                                <td>$goster[uye_online]</td>";
                                $i++;
                            }
                        ?>
            </table>
            </div>
        </div>
    </div>
</div>
