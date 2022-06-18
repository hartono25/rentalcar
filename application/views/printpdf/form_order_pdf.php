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
            font-size: 12pt;
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
    </style>
</head>

<body>


    <!-- <div style="width: 50%; margin-top: 0px;"> -->
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="4" class="">
                <!-- <h4>CV INDORENZ UTAMA TRANSPORTASI</h4> -->
                <div align="center" class="style9b" style="margin-bottom: 0px;">
                    <h2><b>CV. INDORENZ UTAMA TRANSPORTASI</b></h2>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="4" class="">
                <!-- <h4>CV INDORENZ UTAMA TRANSPORTASI</h4> -->
                <div align="center" class="style9b garis">
                    <!-- <h3><b>CV. INDORENZ UTAMA TRANSPORTASI</b></h3> -->
                    <small>Pertokoan Club 9 Jl. Kalimalang Raya Blok N No. 12G JAKARTA TIMUR<br />
                        Phone : +62 21 2962 2181 - Mobile Phone : 0811 815 799
                        Mail : indorenz@gmail.com - www.jakartaalphardrent.com</small>
                </div>
            </td>
        </tr>
    </table>

    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="4" class="">
                <!-- <h4>CV INDORENZ UTAMA TRANSPORTASI</h4> -->
                <div align="center" class="style9b" style="margin-bottom: 0px;">
                    <h2><b>SALES ORDER</b></h2>
                </div>
            </td>
        </tr>
    </table>

    <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
        <tr>
            <td>
                Nama Tamu
            </td>
            <td colspan="3">
                : <?= $so['nama_customer']; ?>
            </td>
        </tr>
        <tr>
            <td>
                No. Handphone
            </td>
            <td colspan="3">
                : <?= $so['no_telp_customer1']; ?>
            </td>
        </tr>
        <tr>
            <td>
                Alamat Jemput
            </td>
            <td colspan="3">
                : <?= $so['alamat_jemput']; ?>
            </td>
        </tr>
        <tr>
            <td>
                Alamat Finish
            </td>
            <td colspan="3">
                : <?= $so['alamat_finish']; ?>
            </td>
        </tr>
        <tr>
            <td>
                Tanggal, Jam Start
            </td>
            <td colspan="3">
                : <?= date('d/m/Y, h:i:s A', strtotime($so['tgl_start'])); ?>
            </td>
        </tr>
        <tr>
            <td>
                Tanggal, Jam Finish
            </td>
            <td colspan="3">
                : <?= date('d/m/Y, h:i:s A', strtotime($so['tgl_end'])); ?>
            </td>
        </tr>
        <tr>
            <td>
                Harga
            </td>
            <td colspan="3">
                : Rp <?= rupiah($so['harga_sewa']); ?>
            </td>
        </tr>
        <tr>
            <td>
                Overtime
            </td>
            <td colspan="3">
                : Rp <?= rupiah($denda); ?>
            </td>
        </tr>
        <tr>
            <td>
                Order By
            </td>
            <td colspan="3">
                :
            </td>
        </tr>
        <tr>
            <td>
                Used Daily
            </td>
            <td colspan="3">
                :
            </td>
        </tr>
        <tr>
            <td>
                Payment
            </td>
            <td colspan="3">
                : <?= $so['payment']; ?>
            </td>
        </tr>
        <tr>
            <td>
                Driver
            </td>
            <td colspan="3">
                : <?= $so['nama_driver']; ?>
            </td>
        </tr>
        <tr>
            <td>
                No. Handphone
            </td>
            <td colspan="3">
                : <?= $so['no_telp_driver']; ?>
            </td>
        </tr>
        <tr>
            <td>
                No. Pol Kendaraan
            </td>
            <td colspan="3">
                : <?= $so['no_polisi']; ?>
            </td>
        </tr>
        <tr>
            <td>
                Merk / Type
            </td>
            <td colspan="3">
                : <?= $so['merk_mobil']; ?>
            </td>
        </tr>
        <tr>
            <td>
                Warna
            </td>
            <td colspan="3">
                : <?= $so['warna']; ?>
            </td>
        </tr>
    </table>

    <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="4" class="" style="height: 150px; vertical-align: text-top;">
                <div align="center" class="style9b">
                    <h3><b>Keterangan</b></h3>
                </div>
            </td>
        </tr>
    </table>
    <br>

    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td class="style10b" style="vertical-align: text-top;">
                <div align="center" class="style10b">
                    Admin
                </div>
            </td>
            <td class="style10b" style="vertical-align: text-top;">
                <div align="center" class="style10b">
                    Driver
                </div>
            </td>
            <td class="style10b" style="vertical-align: text-top;">
                <div align="center" class="style10b">
                    Customer
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
            <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
            <td class="style10b" style="vertical-align: text-top;">
                <div align="center" class="style10b">
                    (<?= $so['user_by']; ?>)
                </div>
            </td>
            <td class="style10b" style="vertical-align: text-top;">
                <div align="center" class="style10b">
                    (<?= $so['nama_driver']; ?>)
                </div>
            </td>
            <td class="style10b" style="vertical-align: text-top;">
                <div align="center" class="style10b">
                    (<?= $so['nama_customer'] ?>)
                </div>
            </td>
        </tr>
    </table>
</body>

</html>