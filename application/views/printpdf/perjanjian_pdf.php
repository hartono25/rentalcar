<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RCMS | Checklist</title>
    <style type="text/css">
        .st_total {
            font-size: 9pt;
            font-weight: bold;
            font-family: Verdana, Arial, Helvetica, sans-serif;
        }

        .style6 {
            color: #000000;
            font-size: 9pt;
            font-weight: normal;
            font-family: Arial;
        }

        .style6b {
            color: #000000;
            font-size: 9pt;
            font-weight: bold;
            font-family: Arial;
        }

        .style9 {
            color: #000000;
            font-size: 10pt;
            font-weight: normal;
            font-family: Arial;
        }

        .style9b {
            color: #000000;
            font-size: 10pt;
            font-weight: bold;
            font-family: Arial;
        }

        /* .style19b {
            color: #000000;
            font-size: 11pt;
            font-weight: bold;
            font-family: Arial;
        } */

        .style10 {
            color: #000000;
            font-size: 11pt;
            font-weight: normal;
            font-family: Arial;
        }

        .style10b {
            color: #000000;
            font-size: 11pt;
            font-weight: bold;
            font-family: Arial;
        }

        .border {
            border: solid #000 2px;
        }

        .garis {
            border-bottom: solid #000 2px;
        }

        .gariskanan {
            border-right: solid #000 1px;
        }

        .garisbawah {
            border-bottom: solid #000 1px;
        }

        .garisatas {
            border-top: solid #000 1px;
        }

        .gariskiri {
            border-left: solid #000 1px;
        }

        footer {
            position: fixed;
            text-align: center;
            bottom: -10px;
            left: auto;
            right: auto;
            height: 20px;
        }

        header {
            text-align: center;
            left: 0;
            right: 0;
            height: 16%;
        }

        .page_break {
            page-break-before: always;
        }
    </style>
</head>

<body>
    <header><img src="<?= base_url('template/img/logo-perjanjian.png'); ?>"></header>
    <footer>
        <p class="style6">Pertokon Club 9 Jl.Kalimalang Raya Blok N Nomor 12G JAKARTA TIMUR<br>Phone: +62 21 2962 2181, Mobile Phone: 0811 815 799, Mail: indorenz@gmail.com, www.jakartaalphardrent.com</p>
    </footer>
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="4" class="">
                <!-- <h4>CV INDORENZ UTAMA TRANSPORTASI</h4> -->
                <div align="center" class="style9b garis">
                    <h2><b>SURAT PERJANJIAN SEWA MENYEWA KENDARAAN</b></h2>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="4" class="">
                <!-- <h4>CV INDORENZ UTAMA TRANSPORTASI</h4> -->
                <div align="center" class="style9b">
                    <h2><b>No Kontrak <?= $tanggal; ?>/<?= $bulan ?>/IRUT/<?= $tahun; ?>/<?= $kodeurut; ?></b></h2>
                </div>
            </td>
        </tr>
    </table>
    <p class="style10" style="text-align: justify;">Pada hari <?= $hari; ?> tanggal <?= $tanggal; ?> bulan <?= $bulan; ?> tahun <?= $tahun; ?> Surat Perjanjian Kerja Kontrak/Sewa Mobil di Jakarta ini dibuat dengan seksama serta kesepakatan dari kedua belah pihak untuk dapat memfasilitasi penggunaan kontrak/sewa mobil</p>

    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td align="right" width="30" class="style10">1.</td>
            <td align="left" width="150" class="style10">Merk</td>
            <td class="style10">: <?= $so['merk_mobil']; ?></td>
        </tr>
        <tr>
            <td align="right" width="30" class="style10">2.</td>
            <td align="left" class="style10">Type</td>
            <td class="style10">: <?= $so['nama_mobil']; ?></td>
        </tr>
        <tr>
            <td align="right" width="30" class="style10">3.</td>
            <td align="left" class="style10">Tahun Pembuatan</td>
            <td class="style10">: <?= $so['tahun']; ?></td>
        </tr>
        <tr>
            <td align="right" width="30">4.</td>
            <td align="left">Nomor Rangka</td>
            <td class="style10">: <?= $so['no_rangka']; ?></td>
        </tr>
        <tr>
            <td align="right" width="30" class="style10">5.</td>
            <td align="left" class="style10">Nomor Mesin</td>
            <td class="style10">: <?= $so['no_mesin']; ?></td>
        </tr>
        <tr>
            <td align="right" width="30" class="style10">6.</td>
            <td align="left" class="style10">Nomor Polisi</td>
            <td class="style10">: <?= $so['no_polisi']; ?></td>
        </tr>
        <tr>
            <td align="right" width="30" class="style10">7.</td>
            <td align="left" class="style10">Atas Nama Pemilik</td>
            <td class="style10">: <?= $so['nama_pemilik']; ?></td>
        </tr>
    </table>

    <p class="style10" style="text-align: justify;">Adapun perjanjian ini disepakati oleh kedua belah pihak dengan menyertakan identitas dari pihak pertama dan pihak kedua serta dapat dipertanggungjawabkan sebagai berikut</p>

    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" width="160" style="padding-left: 30px;" class="style10">Nama</td>
            <td align="center" width="5" class="style10">:</td>
            <td class="style10">Harry Angga DM</td>
        </tr>
        <tr>
            <td align="left" width="160" style="padding-left: 30px;" class="style10">Jabatan</td>
            <td align="center" width="5" class="style10">:</td>
            <td class="style10">General Manager</td>
        </tr>
        <tr>
            <td align="left" width="160" style="padding-left: 30px;" class="style10">NIK KTP</td>
            <td align="center" width="5" class="style10">:</td>
            <td class="style10">3275081610880010</td>
        </tr>
        <tr>
            <td align="left" width="160" style="padding-left: 30px;" class="style10">Alamat Tinggal</td>
            <td align="center" width="5" class="style10">:</td>
            <td class="style10">
                Perum Jatimakmur Permal Jl. P. Berhala C5/8 Pondok Gede Bekasi
            </td>
        </tr>
        <tr>
            <td align="left" width="160" style="padding-left: 30px;" class="style10">Telepon</td>
            <td align="center" width="5" class="style10">:</td>
            <td class="style10">0812-1212-9221</td>
        </tr>
        <tr>
            <td align="left" width="160" style="padding-left: 30px;" class="style10">Telepon Kantor</td>
            <td align="center" width="5" class="style10">:</td>
            <td class="style10">(021) 2962 2181</td>
        </tr>
    </table>

    <p class="style10" style="text-align: justify;">Dalam hal ini bertindak atas nama perusahaan CV INDORENZ UTAMA TRANSPORTASI yang beralamat di Jl. Kalimalang Raya Blok N No.12G Jakarta Timur selaku pemilik kendaraan, selanjutnya disebut <b>PIHAK PERTAMA</b></p>

    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td align="left" width="160" style="padding-left: 30px;" class="style10">Nama</td>
            <td align="center" width="5" class="style10">:</td>
            <td class="style10"> <?= $so['nama_customer']; ?></td>
        </tr>
        <tr>
            <td align="left" width="160" style="padding-left: 30px;" class="style10">NIK KTP</td>
            <td align="center" width="5" class="style10">:</td>
            <td class="style10"> <?= $so['ktp_or_sim']; ?></td>
        </tr>
        <tr>
            <td align="left" width="160" style="padding-left: 30px;" class="style10">Alamat Tinggal</td>
            <td align="center" width="5" class="style10">:</td>
            <td class="style10">
                <?= $so['alamat_customer']; ?>
            </td>
        </tr>
        <tr>
            <td align="left" width="160" style="padding-left: 30px;" class="style10">Telepon</td>
            <td align="center" width="5" class="style10">:</td>
            <td class="style10"> <?= $so['no_telp_customer1']; ?></td>
        </tr>
        <tr>
            <td align="left" width="160" style="padding-left: 30px;" class="style10">Telepon Rumah</td>
            <td align="center" width="5" class="style10">:</td>
            <td class="style10"> <?= $so['no_telp_customer2']; ?></td>
        </tr>
    </table>

    <p class="style10" style="text-align: justify;">Dalam hal ini bertindak atas nama <?= $so['tagihan_for']; ?> yang berlamat di <?= $so['alamat_customer']; ?>, selanjutnya disebut <b>PIHAK KEDUA</b></p>

    <p class="style10" style="text-align: justify;">Kedua belah pihak sepakat untuk mengadakan perjanjian Sewa Kontrak Kendaraan dengan KETENTUAN DAN SYARAT-SYARAT sesuai pasal dibawah ini:</p>

    <div class="page_break"></div>
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="4" class="">
                <!-- <h4>CV INDORENZ UTAMA TRANSPORTASI</h4> -->
                <div align="center" class="style9b">
                    <h3><b>PASAL I<br>DATA-DATA SERAH TERIMA KENDARAAN</b></h3>
                </div>
            </td>
        </tr>
    </table>

    <p class="style10" style="text-align: justify;">Setelah <b>PIHAK KEDUA</b> melengkapi persyaratan yang ditentukan oleh <b>PIHAK PERTAMA</b>, maka <b>PIHAK PERTAMA</b> akan menyerahkan 1 (satu) unit kendaraan untuk dikontrak/sewa oleh <b>PIHAK KEDUA</b> dengan data-data sebagai berikut:</p>

    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td align="right" width="30" class="style10">1.</td>
            <td align="left" width="150" class="style10">Merk</td>
            <td class="style10">: <?= $so['merk_mobil']; ?></td>
        </tr>
        <tr>
            <td align="right" width="30" class="style10">2.</td>
            <td align="left" class="style10">Type</td>
            <td class="style10">: <?= $so['nama_mobil']; ?></td>
        </tr>
        <tr>
            <td align="right" width="30" class="style10">3.</td>
            <td align="left" class="style10">Tahun Pembuatan</td>
            <td class="style10">: <?= $so['tahun']; ?></td>
        </tr>
        <tr>
            <td align="right" width="30">4.</td>
            <td align="left">Nomor Rangka</td>
            <td class="style10">: <?= $so['no_rangka']; ?></td>
        </tr>
        <tr>
            <td align="right" width="30" class="style10">5.</td>
            <td align="left" class="style10">Nomor Mesin</td>
            <td class="style10">: <?= $so['no_mesin']; ?></td>
        </tr>
        <tr>
            <td align="right" width="30" class="style10">6.</td>
            <td align="left" class="style10">Nomor Polisi</td>
            <td class="style10">: <?= $so['no_polisi']; ?></td>
        </tr>
        <tr>
            <td align="right" width="30" class="style10">7.</td>
            <td align="left" class="style10">Atas Nama Pemilik</td>
            <td class="style10">: <?= $so['nama_pemilik']; ?></td>
        </tr>
    </table>

    <p class="style10" style="text-align: justify;">Yang dituangkan dalam BERITA ACARA serah terima kendaraan, yang ditanda tangani oleh kedua belah pihak dan merupakan bagian yang tak terpisahkan dari surat perjanjian ini. Data BERITA ACARA termasuk kelengkapan kendaraan berupa AC, Tape, Double Blower, Velg, Kunci Ban, serta Ban Cadangan serta sesuai dengan kesepakatan awal</p>

    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="4" class="">
                <!-- <h4>CV INDORENZ UTAMA TRANSPORTASI</h4> -->
                <div align="center" class="style9b">
                    <h3><b>PASAL II<br>JANGKA WAKTU DAN HARGA SEWA KONTRAK KENDARAAN</b></h3>
                </div>
            </td>
        </tr>
    </table>

    <ol align="left" style="margin-left: -20px;">
        <li class="style10">
            Perjanjian sewa mobil ini berlaku untuk waktu <?= $jmlhari . '.' ?> Terhitung mulai hari <?= $hari . ' tanggal ' . $tanggal . ' bulan ' . $bulan . ' tahun ' . $tahun . ' pukul ' . $waktu . ' WIB.'; ?>
        </li>
        <li class="style10">
            Harga sewa kendaraan dengan jangka waktu yang tertulis di ayat 1 disepakati sebesar Rp. <?= number_format($so['harga_sewa'], 0, ',', '.') . ',- Terbilang (' . terbilang($so['harga_sewa']) . ' Rupiah) per ' . $jmlhari . '.'; ?> Terlebih dahulu melunasi harga sewa tiap perpanjangan periode selanjutnya didepan dengan bukti pembayaran yang SAH.
        </li>
        <li class="style10">
            <b>PIHAK KEDUA</b> diwajibkan menyediakan fotocopy data pendukung kepada <b>PIHAK PERTAMA</b> untuk digunakan sebagai pengganti kerusakan-kerusakan kecil yang diakibatkan oleh kelalaian <b>PIHAK KEDUA</b> ataupun oleh sebab lain.
        </li>
    </ol>

    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="4" class="">
                <!-- <h4>CV INDORENZ UTAMA TRANSPORTASI</h4> -->
                <div align="center" class="style9b">
                    <h3><b>PASAL III<br>PERPANJANGAN DAN PEMBATALAN SEWA KONTRAK KENDARAAN</b></h3>
                </div>
            </td>
        </tr>
    </table>

    <ol align="left" style="margin-left: -20px;">
        <li class="style10">
            Apabila terjadi pembatalan sewa pada saat kendaraan dikirim, maka <b>PIHAK KEDUA</b> akan dikenakan denda sebesar 50% (Lima Puluh Persen) dari harga sewa.
        </li>
        <li class="style10">
            Pembatalan sewa kontrak yang berjalan oleh <b>PIHAK KEDUA</b> dikenakan biaya pembatalan maksimum harga kontrak satu bulan (sesuai harga kontrak berjalan).
        </li>
        <li class="style10">
            Perpanjangan masa sewa dapat dilakukan dengan pemberitahuan 1 (satu) minggu sebelum masa sewa berakhir dan melunasi biaya sewa selanjutnya.
        </li>
        <li class="style10">
            Kelebihan waktu pemakaian tanpa pemberitahuan dan pelunasan biaya dibayar dibelakang, akan dikenakan denda sebesar
        </li>
    </ol>

    <div class="page_break"></div>
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="4" class="">
                <!-- <h4>CV INDORENZ UTAMA TRANSPORTASI</h4> -->
                <div align="center" class="style9b">
                    <h3><b>PASAL IV<br>HAK, KEWAJIBAN DAN TANGGUNG JAWAB PIHAK PERTAMA</b></h3>
                </div>
            </td>
        </tr>
    </table>

    <ol align="left" style="margin-left: -20px;">
        <li class="style10">
            <b>PIHAK PERTAMA</b> berhak menarik kembali kendaraan tersebut apabila :
            <ul align="left" style="margin-left: -20px;">
                <li>Telah berakhir masa sewa</li>
                <li>Kendaraan dianggap tidak terawat</li>
                <li>Kendaraan dijual / digadaikan / dipindahtangankan kepada pihak lain</li>
                <li>Menggunakan kendaraan untuk tindak pidana kejahatan dan atau kegiatan-kegiatan yang melanggar HUKUM</li>
            </ul>
        </li>
        <li class="style10">
            <b>PIHAK PERTAMA</b> setiap saat dapat memeriksa kendaraan tersebut di tempat <b>PIHAK KEDUA</b>.
        </li>
        <li class="style10">
            <b>PIHAK PERTAMA</b> bertanggung jawab dan menjamin sepenuhnya bahwa saat berlangsung waktu sewa kendaraan, tidak ada tuntutan / gugatan dari pihak lain atas kendaraan tersebut.
        </li>
        <li class="style10">
            <b>PIHAK PERTAMA</b> bertanggung jawab sepenuhnya atas biaya perpanjangan STNK yang telah habis masa berlakunya.
        </li>
        <li class="style10">
            Perbaikan kerusakan yang terjadi dalam ayat 5 dikerjakan oleh <b>PIHAK PERTAMA</b> hanya pada hari kerja (Senin s/d Jum'at) jam 09.00 - 15.00 WIB dan Sabtu jam 09.00 - 14.00 WIB di Wilayah Jakarta.
        </li>
        <li class="style10">
            Kerusakan yang terjadi di luar Wilayah Jakarta, akan ditangani oleh <b>PIHAK KEDUA</b> dan biaya perbaikan akan mendapat penggantian sepenuhnya oleh <b>PIHAK PERTAMA</b>, berdasarkan bukti pembayaran yang SAH dan dapat dipertanggungjawabkan.
        </li>
    </ol>

    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="4" class="">
                <!-- <h4>CV INDORENZ UTAMA TRANSPORTASI</h4> -->
                <div align="center" class="style9b">
                    <h3><b>PASAL V<br>HAK, KEWAJIBAN DAN TANGGUNG JAWAB PIHAK KEDUA</b></h3>
                </div>
            </td>
        </tr>
    </table>

    <ol align="left" style="margin-left: -20px;">
        <li class="style10">
            <b>PIHAK KEDUA</b> berkewajiban memberitahukan kepada <b>PIHAK PERTAMA</b> apabila terjadi kerusakan atau kehilangan atas kendaraan tersebut secepatnya dalam tempo 1 x 24 jam.
        </li>
        <li class="style10">
            Apabila terjadi kehilangan kendaraan, maka <b>PIHAK KEDUA</b> :
            <ul align="left" style="margin-left: -20px;">
                <li>Tidak mendapat penggantian kendaraan</li>
                <li>Bersama-sama dengan <b>PIHAK PERTAMA</b> melaporkan kehilangan kendaraan kepada kepolisian</li>
                <li>Membayar biaya klaim Asuransi</li>
                <li>Tetap dikenakan biaya sewa sampai <b>PIHAK PERTAMA</b> mendapat penggantian dari pihak Asuransi</li>
                <li>Mengganti kendaraan yang hilang, apabila Pihak Asuransi menolak klaim yang diajukan oleh <b>PIHAK PERTAMA</b></li>
            </ul>
        </li>
        <li class="style10">
            Apabila terjadi insiden Tabrakan, maka <b>PIHAK KEDUA</b> :
            <ul align="left" style="margin-left: -20px;">
                <li>Tidak mendapat penggantian kendaraan</li>
                <li>Menanggung biaya Derek dari tempat kejadian sampai ke bengkel yang ditunjuk oleh <b>PIHAK PERTAMA</b></li>
                <li>Membayar biaya klaim Asuransi</li>
                <li>Tetap dikenakan biaya sewa sampai <b>PIHAK PERTAMA</b> siap mengoperasikan kendaraan tersebut</li>
            </ul>
        </li>
        <li class="style10">
            <b>PIHAK KEDUA</b> bertanggung jawab atas pemeliharaan dan kebersihan kendaraan yang disewa.
        </li>
        <li class="style10">
            Untuk jangka sewa lebih dari 1 x 24 jam, maka <b>PIHAK KEDUA</b> bertanggung jawab atas :
            <ul align="left" style="margin-left: -20px;">
                <li>Air Radiator apabila kurang</li>
                <li>Air Accu apabila kurang</li>
                <li>Minyak rem apabila kurang</li>
                <li>Oli apabila telah mencapai kilometer penggantian: (penggantian oli dilakukan oleh <b>PIHAK PERTAMA</b> 1x untuk jangka waktu 1 (satu) bulan ditempat <b>PIHAK PERTAMA</b>).</li>
            </ul>
        </li>
        <li class="style10">
            Apabila terjadi kerusakan akibat kelalaian <b>PIHAK KEDUA</b>, maka biaya perbaikan ditanggung sepenuhnya oleh <b>PIHAK KEDUA</b> dan selama masa perbaikan, uang sewa sesuai pasal III tetap ditanggung oleh <b>PIHAK KEDUA</b>.
        </li>
        <li class="style10">
            <b>PIHAK KEDUA</b> tidak dibenarkan mempergunakan kendaraan yang disewa untuk Olah Raga Balap dan Ketangkasan, disewakan / dipindahtangankan kepada pihak lain, dijadikan Barang Jaminan atau digadaikan.
        </li>
        <li class="style10">
            <b>PIHAK KEDUA</b> wajib memberitahukan dan meminta persetujuan <b>PIHAK PERTAMA</b> terlebih dahulu apabila kendaraan dipinjamkan / dipergunakan pihak lain, tanpa mengurangi hak dan tanggung jawab <b>PIHAK KEDUA</b>.
        </li>
        <li class="style10">
            <b>PIHAK PERTAMA</b> menyerahkan kendaraan yang disewakan dalam keadaan baik sesuai dengan Berita Acara Serah Terima / Kondisi Kendaraan kepada <b>PIHAK KEDUA</b>, <b>PIHAK KEDUA</b> diwajibkan untuk mengembalikan kendaraan tersebut dengan keadaan baik pula (Sesuai Berita Acara). Segala kehilangan dan kerusakan perlengkapan selama waktu sewa, menjadi tanggung jawab sepenuhnya <b>PIHAK KEDUA</b>.
        </li>
        <li class="style10">
            Apabila kendaraan yang disewa terlibat Pelanggaran Hukum, atau STNK / Kendaraan di Tahan / dikuasai oleh Pihak Berwajib atau Pihak Lain, maka <b>PIHAK KEDUA</b> :
            <ul align="left" style="margin-left: -20px;">
                <li>Tidak mendapat penggantian kendaraan</li>
                <li>Menanggung sepenuhnya semua biaya serta Resiko penyelesaian masalah tersebut</li>
                <li>Tetap dikenakan biaya sewa sampai <b>PIHAK PERTAMA</b> menerima kembali kendaraan tersebut dalam kondisi seperti semula</li>
                <li>Tidak melibatkan <b>PIHAK PERTAMA</b> kedalam masalah tersebut</li>
                <li>Apabila STNK hilang, <b>PIHAK KEDUA</b> bertanggung jawab membayar biaya pengurusan kehilangan STNK dan tidak diberikan Kompensasi atau penggantian dalam bentuk apapun serta biaya sewa dan waktu tetap berjalan sesuai perjanjian</li>
            </ul>
        </li>
        <li class="style10">
            Apabila <b>PIHAK KEDUA</b> tidak dapat melunasi kewajiban sewa, maka <b>PIHAK PERTAMA</b> berhak mendapat penggantian berupa Barang Berharga lain yang senilai dengan harga sewa tertunggak.
        </li>
        <li class="style10">
            <b>PIHAK KEDUA</b> berhak memberikan mobil kepada <b>PIHAK PERTAMA</b> untuk dilakukan service rutin selama sebulan 2 kali.
        </li>
    </ol>

    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="4" class="">
                <!-- <h4>CV INDORENZ UTAMA TRANSPORTASI</h4> -->
                <div align="center" class="style9b">
                    <h3><b>PASAL VI<br>HAL LAIN-LAIN</b></h3>
                </div>
            </td>
        </tr>
    </table>

    <ol align="left" style="margin-left: -20px;">
        <li>
            Hal-hal yang belum diatur dalam surat sewa kontrak kendaraan ini akan diatur secara musyawarah kemudian dibuat secara tertulis dan ditandatangani oleh kedua belah pihak, serta merupakan ADDENDUM yang tak terpisahkan dari Surat Perjanjian Sewa / Kontrak ini.
        </li>
        <li>
            Apabila terjadi perselisihan yang tidak dapat diselesaikan, maka kedua belah pihak bersepakat untuk mengambil Wilayah Hukum yang tetap pada Pengadilan Negeri setempat.
        </li>
        <li>
            Demikian Surat Perjanjian Sewa / Kontrak ini dibuat dalam Rangkap 2 (dua) dimana Asli dan Tembusannya dibubuhi Materai yang cukup dan ditandatangani kedua belah pihak serta kedua-duanya mempunyai kekuatan Hukum yang sama.
        </li>
    </ol>

    <br>
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="3" class="">
                <div align="left" class="style10">
                    Jakarta, <?= Tanggal(date('Y-m-d')); ?>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div align="center" class="style9b">
                    <h3><b>PIHAK PERTAMA</b></h3>
                </div>
            </td>
            <td>&nbsp;</td>
            <td>
                <div align="center" class="style9b">
                    <h3><b>PIHAK KEDUA</b></h3>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
            <td>
                <div align="center" class="style9b">
                    <h3><b>( HARRY ANGGA DM )</b></h3>
                </div>
            </td>
            <td>&nbsp;</td>
            <td>
                <div align="center" class="style9b">
                    <h3><b>( <?= $so['nama_customer']; ?> )</b></h3>
                </div>
            </td>
        </tr>
    </table>

</body>

</html>