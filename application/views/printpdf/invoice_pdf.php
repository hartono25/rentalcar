<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RCMS | INVOICE</title>

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
    </style>
</head>

<body>

    <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <h3>CV. INDORENZ UTAMA TRANSPORTASI</h3>
            </td>
            <td>
                &nbsp;
            </td>
            <td rowspan="4" style="text-align: center;">
                <h3><u>&nbsp; KWITANSI &nbsp;</u><br><small class="style9b">Official Receipt</small></h3>
            </td>
        </tr>
        <tr>
            <td>
                <smallsmall class="style6">Pertokoan Club 9 Jl. Kalimalang Raya Blok N No. 12G JAKARTA TIMUR</smallsmall>
            </td>
        </tr>
        <tr>
            <td><small small class="style6">Phone : +62 21 2962 2181 - Mobile Phone : 0811 815 799</small></td>

        </tr>
        <tr>
            <td><small small class="style6">Mail : indorenz@gmail.com - www.jakartaalphardrent.com</small></td>
        </tr>
    </table>

    <table width="100%" align="center" border="1" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="3" style="text-align: center; padding:5px;" class="style10b">
                TANDA TERIMA
            </td>
        </tr>
        <tr>
            <td colspan="3" style="padding-left: 5px;">
                <table width="100%" align="center" border="0" cellpadding="5" cellspacing="0">
                    <tr>
                        <td class="style9 garisbawah" style="width: 20%;">
                            Sudah Terima dari
                        </td>
                        <td colspan="3" class="style9">
                            : <?= $so['nama_customer'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="style9 garisbawah" style="width: 20%;">
                            Received From <br>
                            Alamat
                        </td>
                        <td colspan="3" class="style9">
                            : <?= $so['alamat_customer']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="style9" style="width: 20%;">
                            Address <br>
                            Telp/Mobile
                        </td>
                        <td colspan="3" class="style9">
                            : <?= $so['no_telp_customer1']; ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="padding-left: 5px;">
                <table width="100%" align="center" border="0" cellpadding="5" cellspacing="0">
                    <tr>
                        <td class="style9" style="width: 20%;">
                            Banyak Uang <br>
                            Amount in Word
                        </td>
                        <td colspan="3" class="st_total">
                            : <?= terbilang(($so['harga_sewa'] - $so['pembayaran_dp']) + $denda) . ' Rupiah'; ?>
                        </td>

                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="padding: 0px;">
                <!-- <table width="100%" align="center" border="0" cellpadding="5" cellspacing="0">
                    <tr>
                        <td style="width: 55%;"> -->
                <table width="100%" align="center" border="1" cellpadding="0" cellspacing="0">
                    <tr>
                        <td colspan="3" style="padding-left: 5px;">
                            <table width="100%" align="center" border="0" cellpadding="5" cellspacing="0">
                                <tr>
                                    <td class="style9 garisbawah" style="width: 40%;">
                                        Jumlah Seluruhnya
                                    </td>
                                    <td class="style10">
                                        : Rp. <?= rupiah($so['harga_sewa']); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="style9 garisbawah">
                                        Total <br>
                                        Uang Muka
                                    </td>
                                    <td class="style10">
                                        : Rp. <?= rupiah($so['pembayaran_dp']) ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="style9 garisbawah">
                                        Down Payment <br>
                                        Sisa Pembayaran
                                    </td>
                                    <td class="style10">
                                        : Rp. <?= rupiah($so['harga_sewa'] - $so['pembayaran_dp']); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="style9 garisbawah">
                                        Remaining <br>
                                        Overtime
                                    </td>
                                    <td class="style10">
                                        : Rp. <?= rupiah($denda); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                </tr>
                            </table>
                        </td>
                        <td style="width: 50%;">
                            <table width="100%" align="center" border="0" cellpadding="5" cellspacing="0">
                                <tr>
                                    <td style="width: 5%;">
                                        &nbsp;
                                    </td>
                                    <td class="style9 garisbawah" style="width: 40%;">
                                        Untuk Pembayaran
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 5%;">
                                        &nbsp;
                                    </td>
                                    <td class="style9 garisbawah">
                                        Payment For
                                    </td>
                                    <td class="style9 garisbawah">
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 5%;">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td class="style9 garisbawah">
                                        Mobil / Car
                                    </td>
                                    <td class="style9 garisbawah">
                                        : <?= $so['nama_mobil'] . ' ' . $so['tahun']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 5%;">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td class="style9 garisbawah">
                                        Bus
                                    </td>
                                    <td class="style9 garisbawah">
                                        :
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 5%;">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td class="style9 garisbawah">
                                        Driver
                                    </td>
                                    <td class="style9 garisbawah">
                                        : <?= $so['nama_driver']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 5%;">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td class="style9 ">
                                        &nbsp;
                                    </td>
                                    <td class="style9 ">
                                        :
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <table width="100%" align="center" border="0" cellpadding="3" cellspacing="0">
                    <tr>
                        <td class="style9" style="padding-left: 10px; width: 18%;">
                            No.Pol
                        </td>
                        <td class="style9 garisbawah" style="padding-left: 5px; width: 30%;">
                            : <?= $so['no_polisi']; ?>
                        </td>
                        <td class="style9" style="padding-left: 15px; width: 18%;">
                            Type / Warna
                        </td>
                        <td class="style9 garisbawah" style="padding-left: 5px;">
                            : <?= $so['merk_mobil'] . ' / ' . $so['warna']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="style9" style="padding-left: 10px;">
                            Dari Tanggal - Jam
                        </td>
                        <td class="style9 garisbawah" style="padding-left: 5px;">
                            : <?= date('d F Y H.s', strtotime($so['tgl_start'])); ?>
                        </td>
                        <td class="style9" style="padding-left: 15px;">
                            s/d Tanggal - Jam
                        </td>
                        <td class="style9 garisbawah" style="padding-left: 5px;">
                            : <?= date('d F Y H.s', strtotime($so['tgl_end'])); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="style9 garis" style="padding-left: 10px;">
                            Tujuan
                        </td>
                        <td colspan="3" class="style9 garis" style="padding-left: 5px;">
                            :
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <table width="100%" align="center" border="0" cellpadding="3" cellspacing="0">
                    <tr>
                        <td class="style9" style="padding-left: 10px; width: 15%;">
                            Jumlah Pembayaran
                        </td>
                        <td class="st_total garisbawah" style="padding-left: 5px; width: 30%;">
                            : Rp. <?= rupiah(($so['harga_sewa'] - $so['pembayaran_dp']) + $denda) ?>
                        </td>
                        <td class="style9" style="padding-left: 15px; width: 15%;">

                        </td>
                        <td class="style9 " style="padding-left: 5px; text-align: center;">
                            Jakarta, <?= Tanggal(date('Y-m-d')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="style9" style="padding-left: 10px;">
                            Payment With
                        </td>
                        <td class="style9" style="padding-left: 5px;">
                            <table width="100%" border="0" align="center" cellpadding="3" cellspacing="0">
                                <tr>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td> Tunai / Cash</td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td class="garisbawah">
                                        &nbsp;
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td class="style9 " style="padding-left: 5px;">

                        </td>
                    </tr>
                    <tr>
                        <td class="style9">

                        </td>
                        <td class="style9" style="padding-left: 5px;">
                            <table width="100%" border="0" align="center" cellpadding="2" cellspacing="0">
                                <tr>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td style="padding-left: 15px;"> Transfer Bank
                                        Mandiri

                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                    </td>
                                    <td style="padding-left: 15px;"> a/c : 12200.8888.0268
                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                    </td>
                                    <td style="padding-left: 15px;"> a/n : Ronaldo Tuani. Fransiscus
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>