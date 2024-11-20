<div class="container1">
                    <h2>Rincian Informasi
                        <span class="dropdown-icon" onclick="toggleForm()"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="22" viewBox="0 0 15 22" fill="none">
                            <path d="M0.5 1.77312L2.00937 0.5L14.5 11L2.00937 21.5L0.5 20.2334L11.474 11L0.5 1.77312Z" fill="white"/>
                          </svg></span>
                    </h2>
                   
                    <form class="form1">
                        <table>
                            <tr>
                            <div class="status-permohonan <?php echo strtolower($status); ?>">
    <span class="tebal">Status Permohonan: </span>
    <span class="tebal1">
        <?php 
        if (isset($status)) {
            if ($status == 'menunggu') {
                echo "Permohonan PKL sedang menunggu konfirmasi.";
            } elseif ($status == 'diterima') {
                echo "Permohonan PKL diterima. Silakan berkonsultasi dengan guru pembimbing.";
            } else {
                echo "Permohonan PKL ditolak.";
            }
        }
        ?>
    </span>
</div>
                            </tr>
                            <tr>
                                <td><label for="ceo">CEO</label></td>
                                <td><input type="text" id="ceo" name="ceo" value="<?php echo $detail['pendiri']; ?>" readonly/></td>
                            </tr>
                            <tr>
                                <td><label for="kabupaten">Kabupaten / Kecamatan</label></td>
                                <td><input type="text" id="kabupaten" name="kabupaten" value="<?php echo $detail['lokasi']; ?>"  readonly/></td>
                            </tr>
                            <tr>
                                <td><label for="nama-industri">Nama Industri</label></td>
                                <td><input type="text" id="nama-industri" name="nama-industri" value="<?php echo $detail['perusahaan']; ?>"  readonly/></td>
                            </tr>
                            <tr>
                                <td><label for="bidang-industri">Bidang Industri</label></td>
                                <td><input type="text" id="bidang-industri" name="bidang-industri" value="<?php echo $detail['bidang_industri']; ?>" readonly/></td>
                            </tr>
                            <tr>
                                <td><label for="jalan">Jalan</label></td>
                                <td><input type="text" id="jalan" name="jalan" value="<?php echo $detail['jalan']; ?>" readonly/></td>
                            </tr>
                            <tr>
                                <td><label for="tahun-berdiri">Tahun Berdiri Industri</label></td>
                                <td><input type="text" id="tahun-berdiri" name="tahun-berdiri" value="<?php echo $detail['tahun_berdiri']; ?>" readonly/></td>
                            </tr>
                        </table>
                    </form>
                </div>