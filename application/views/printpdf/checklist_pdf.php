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

        .style19b {
            color: #000000;
            font-size: 11pt;
            font-weight: bold;
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

        .page_break {
            page-break-before: always;
        }

        .content-container {
            float: left;
            width: 100%;
            background: #fff;
        }

        #content {
            clear: left;
            float: left;
            width: 48%;
            display: inline;
        }

        #aside {
            float: right;
            width: 50%;
            display: inline;
            margin-left: 100px;
        }

        footer {
            position: fixed;
            text-align: left;
            bottom: 0px;
            left: auto;
            right: auto;
            height: 20px;
        }
    </style>
</head>

<body>

    <div class="content-container">
        <div id="content">
            <div align="left" class="style9b" style="margin-bottom: 5px;">
                <h4><b>CV. INDORENZ UTAMA TRANSPORTASI</b></h4>
                <small>
                    Pertokoan Club 9 Jl. Kalimalang Raya Blok N No. 12G <br> Jakarta Timur<br />
                    Phone : +62 21 2962 2181 - Mobile Phone : 0811 815 799 <br>
                    Mail : indorenz@gmail.com - www.jakartaalphardrent.com
                </small>
            </div>

            <table width="100%" border="1" align="center" cellspacing="-1" cellpadding="0">
                <tr>
                    <td class="style9b" style="padding-left: 5px; width: 120px;">STNK Atas Nama</td>
                    <td class="style9" style="padding-left: 5px;"><?= $so['nama_stnk']; ?></td>
                </tr>
                <tr>
                    <td class="style9b" style="padding-left: 5px;">Alamat</td>
                    <td class="style9" style="padding-left: 5px;"><?= $so['alamat_stnk'] ?></td>
                </tr>
            </table>

            <table width="100%" border="0" align="center" cellspacing="0" cellpadding="0">
                <tr class="style9b">
                    <td>Kendaraan Pengganti :</td>
                    <td>No Pol :</td>
                </tr>
            </table>

            <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                <tr class="style9b" style="text-align: center;">
                    <td>No.</td>
                    <td>Kondisi Kendaraan</td>
                    <td>Keterangan</td>
                </tr>
                <tr class="style9b">
                    <td></td>
                    <td style="padding-left: 3px;">Bagian Dalam / Interior</td>
                    <td>

                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">1.</td>
                    <td style="padding-left: 3px;">Starter</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">2.</td>
                    <td style="padding-left: 3px;">Putaran Mesin / RPM</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">3.</td>
                    <td style="padding-left: 3px;">Rem Tangan</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">4.</td>
                    <td style="padding-left: 3px;">Pedal Rem / Kopling / Gas</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">5.</td>
                    <td style="padding-left: 3px;">Posisi Stir / Klakson</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">6.</td>
                    <td style="padding-left: 3px;">Kabel Oil / Kartu OK</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">7.</td>
                    <td style="padding-left: 3px;">Wiper Depan / Belakang</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">8.</td>
                    <td style="padding-left: 3px;">Lampu Sen</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">9.</td>
                    <td style="padding-left: 3px;">Lampu Baca</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">10.</td>
                    <td style="padding-left: 3px;">Arah Lampu Besar</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">11.</td>
                    <td style="padding-left: 3px;">Lampu Rem</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">12.</td>
                    <td style="padding-left: 3px;">Lampu Mundur</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">13.</td>
                    <td style="padding-left: 3px;">Power Window</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">14.</td>
                    <td style="padding-left: 3px;">Central Lock</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">15.</td>
                    <td style="padding-left: 3px;">Electric Mirror</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">16.</td>
                    <td style="padding-left: 3px;">AC / Merk</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">17.</td>
                    <td style="padding-left: 3px;">STNK s/d</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">18.</td>
                    <td style="padding-left: 3px;">Lighter / Pemantik Api</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">19.</td>
                    <td style="padding-left: 3px;">Safety Belt / Sabuk Pengaman</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">20.</td>
                    <td style="padding-left: 3px;">Head Rest / Standar Kepala</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">21.</td>
                    <td style="padding-left: 3px;">Plafon</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">22.</td>
                    <td style="padding-left: 3px;">Radio/Tape/CD Merk</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">23.</td>
                    <td style="padding-left: 3px;">Power Merk</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">24.</td>
                    <td style="padding-left: 3px;">Sarung Jok</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">25.</td>
                    <td style="padding-left: 3px;">Karpet Dasar</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">26.</td>
                    <td style="padding-left: 3px;">Asbak (Depan/Belakang)</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">27.</td>
                    <td style="padding-left: 3px;">Jumlah Speed</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style9b">
                    <td></td>
                    <td style="padding-left: 3px;">Bagian Luar / Exterior</td>
                    <td></td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">1.</td>
                    <td style="padding-left: 3px;">Cat Kap Motor</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">2.</td>
                    <td style="padding-left: 3px;">Cat Bumper / Spakbort</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">3.</td>
                    <td style="padding-left: 3px;">Cat-cat Pintu</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="-1" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">4.</td>
                    <td style="padding-left: 3px;">Mika-mika Lampu</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="-1" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">5.</td>
                    <td style="padding-left: 3px;">Velg</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="-1" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">6.</td>
                    <td style="padding-left: 3px;">Dop Roda</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="-1" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">7.</td>
                    <td style="padding-left: 3px;">Kembang Ban</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="-1" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">8.</td>
                    <td style="padding-left: 3px;">Kaca Film</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="-1" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">9.</td>
                    <td style="padding-left: 3px;">Kunci Pintu</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="-1" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">10.</td>
                    <td style="padding-left: 3px;">Emblem / Stiker</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="-1" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style9b">
                    <td></td>
                    <td style="padding-left: 3px;">Bagian Mesin</td>
                    <td></td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">1.</td>
                    <td style="padding-left: 3px;">Oli Mesin, Merk</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="-1" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">2.</td>
                    <td style="padding-left: 3px;">Air dan Tutup Radiator</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="-1" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">3.</td>
                    <td style="padding-left: 3px;">Accu, Merk</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="-1" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>

        <div id="aside">
            <table width="100%" border="1" align="center" cellspacing="-1" cellpadding="0" style="margin-bottom: 5px;">
                <tr class="style9b" style="text-align: center;">
                    <td>No.</td>
                    <td>Kondisi Kendaraan</td>
                    <td>Keterangan</td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">4.</td>
                    <td style="padding-left: 3px;">Tali Kipas</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="-1" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style9b">
                    <td></td>
                    <td style="padding-left: 3px;">Bagian Luar / Exterior</td>
                    <td></td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">1.</td>
                    <td style="padding-left: 3px;">Dongkrak dan Gagangnya</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="-1" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">2.</td>
                    <td style="padding-left: 3px;">Ban Serep dan Kunci Roda</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="-1" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">3.</td>
                    <td style="padding-left: 3px;">Segitiga Pengaman dan P3K</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="-1" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">4.</td>
                    <td style="padding-left: 3px;">Karpet Bagasi</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="-1" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="style6">
                    <td style="text-align: center;">5.</td>
                    <td style="padding-left: 3px;">Super TT/Premix/Premium/Solar</td>
                    <td>
                        <table width="100%" border="1" align="center" cellspacing="-1" cellpadding="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

            <table width="100%" border="0" align="center" cellspacing="-1" cellpadding="0" style="margin-bottom: 5px;">
                <tr class="style6">
                    <td class="garisbawah">No.Check List</td>
                    <td class="garisbawah">:</td>
                    <td class="garisbawah"><?= $so['kode_so']; ?></td>
                </tr>
                <tr class="style6">
                    <td class="garisbawah">Status</td>
                    <td class="garisbawah">:</td>
                    <td class="garisbawah"></td>
                </tr>
                <tr class="style6">
                    <td class="garisbawah">No.Polisi</td>
                    <td class="garisbawah">:</td>
                    <td class="garisbawah"><?= $so['no_polisi']; ?></td>
                </tr>
                <tr class="style6">
                    <td class="garisbawah">Tahun</td>
                    <td class="garisbawah">:</td>
                    <td class="garisbawah"><?= $so['tahun']; ?></td>
                </tr>
                <tr class="style6">
                    <td class="garisbawah">Merk / Type</td>
                    <td class="garisbawah">:</td>
                    <td class="garisbawah"><?= $so['nama_mobil']; ?></td>
                </tr>
                <tr class="style6">
                    <td class="garisbawah">Warna</td>
                    <td class="garisbawah">:</td>
                    <td class="garisbawah"><?= $so['warna']; ?></td>
                </tr>
                <tr class="style6">
                    <td class="garisbawah">No.Mesin</td>
                    <td class="garisbawah">:</td>
                    <td class="garisbawah"><?= $so['no_mesin']; ?></td>
                </tr>
                <tr class="style6">
                    <td class="garisbawah">No.Rangka</td>
                    <td class="garisbawah">:</td>
                    <td class="garisbawah"><?= $so['no_rangka']; ?></td>
                </tr>
            </table>
            <!-- <br> -->

            <table width="100%" border="1" align="center" cellspacing="-1" cellpadding="0" style="margin-bottom: 5px;">
                <tr>
                    <td>
                        <table width="100%" border="0" align="center" cellspacing="-1" cellpadding="0">
                            <tr class="style6">
                                <td style="padding-left: 3px;" class="garis">Nama Pemilik</td>
                                <td class="garis">:</td>
                                <td class="garis"> <?= $so['nama_pemilik']; ?></td>
                            </tr>
                            <tr class="style6">
                                <td style="padding-left: 3px;" class="garis">Alamat</td>
                                <td class="garis">:</td>
                                <td class="garis"> <?= $so['alamat_domisili']; ?></td>
                            </tr>
                            <tr class="style6">
                                <td style="padding-left: 3px;" class="garis">Penanggung Jawab</td>
                                <td class="garis">:</td>
                                <td class="garis"> <?= $so['nama_customer']; ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!-- <br> -->

            <table width="100%" border="1" align="center" cellspacing="-1" cellpadding="0" style="margin-bottom: 5px;">
                <tr>
                    <td>
                        <table width="100%" border="0" align="center" cellspacing="-1" cellpadding="0">
                            <tr class="style6">
                                <td style="padding-left: 3px;" class="garis">Tanggal</td>
                                <td class="garis">:</td>
                                <td class="garis"> <?= date('d/m/Y', strtotime($so['tgl_start'])); ?></td>
                            </tr>
                            <tr class="style6">
                                <td style="padding-left: 3px;" class="garis">Kilometer</td>
                                <td class="garis">:</td>
                                <td class="garis"></td>
                            </tr>
                            <tr class="style6">
                                <td style="padding-left: 3px;" class="garis">Pukul</td>
                                <td class="garis">:</td>
                                <td class="garis"></td>
                            </tr>
                            <tr class="style6">
                                <td style="padding-left: 3px;" class="garis">Pemeriksa</td>
                                <td class="garis">:</td>
                                <td class="garis"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!-- <br> -->

            <table width="100%" border="1" align="center" cellspacing="-1" cellpadding="0" style="margin-bottom: 5px;">
                <tr>
                    <td>
                        <table width="100%" border="0" align="center" cellspacing="-1" cellpadding="0">
                            <tr class="style6">
                                <td style="padding-left: 3px;" class="garis" colspan="3">Kondisi Cat / Body saat keluar</td>
                            </tr>
                            <tr class="style6">
                                <td style="padding-left: 3px;" class="garis">Bagian Velg</td>
                                <td class="garis">:</td>
                                <td class="garis"></td>
                            </tr>
                            <tr class="style6">
                                <td style="padding-left: 20px;" class="garis">Dop</td>
                                <td class="garis">:</td>
                                <td class="garis"></td>
                            </tr>
                            <tr class="style6">
                                <td style="padding-left: 3px;" class="garis">Ban Kanan Depan Merk</td>
                                <td class="garis">:</td>
                                <td class="garis"></td>
                            </tr>
                            <tr class="style6">
                                <td style="padding-left: 20px;" class="garis">Kiri Depan Merk</td>
                                <td class="garis">:</td>
                                <td class="garis"></td>
                            </tr>
                            <tr class="style6">
                                <td style="padding-left: 20px;" class="garis">Kanan Belakang Merk</td>
                                <td class="garis">:</td>
                                <td class="garis"></td>
                            </tr>
                            <tr class="style6">
                                <td style="padding-left: 20px;" class="garis">Kiri Belakang Merk</td>
                                <td class="garis">:</td>
                                <td class="garis"></td>
                            </tr>
                            <tr class="style6">
                                <td style="padding-left: 3px;" class="garis">Ukuran Ban</td>
                                <td class="garis">:</td>
                                <td class="garis"></td>
                            </tr>
                            <tr class="style6">
                                <td style="padding-left: 3px;" class="garis">Catatan</td>
                                <td class="garis">:</td>
                                <td class="garis"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <img src="<?= base_url('template/img/car1.jpg') ?>">
        </div>
    </div>

    <footer class="style9">
        <p>Keterangan : B = Baik/Ada, R = Rusak/Cacat, H = Hilang/Tidak Ada <br>
            Lembar 1 (Putih): Arsip CV. Indorenz Utama Transportasi, Lembar 2 (Biru): Arsip Pemilik, Lembar 3 (Merah): Arsip Penyewa</p>
    </footer>
</body>

</html>