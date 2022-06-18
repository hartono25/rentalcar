<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RCMS | Expired STNK</title>
    <style type="text/css">
        .st_total {
            font-size: 9pt;
            font-weight: bold;
            font-family: Verdana, Arial, Helvetica, sans-serif;
        }

        .style6 {
            color: #000000;
            font-size: 9pt;
            font-weight: bold;
            font-family: Arial;
        }

        .style9 {
            color: #000000;
            font-size: 9pt;
            font-weight: normal;
            font-family: Arial;
        }

        .style9b {
            color: #000000;
            font-size: 9pt;
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
    </style>
</head>

<body>


    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="8">
                <div align="center">
                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <td colspan="4" class="garis">
                                <div align="left" class="style6">
                                    Jl. Pluit Selatan 1 No. 41<br />
                                    Jakarta 14450 - INDONESIA<br />
                                    Phone : (62-21) 662-5933, 663-2468<br />
                                    Fax : (62-21) 666-94126<br>
                                    E-mail : mediacipta@indosat.net.id
                                </div>
                            </td>
                            <td colspan="4" class="garis">
                                <div align="right" class="style6">
                                    <h1>CUSTOMER</h1>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <br>

    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <?php foreach ($mobil as $c) : ?>
            <?php $hari = expired($c['exp_date']); ?>
            <?php if ($hari <= 30) : ?>
                <tr>
                    <td colspan="8">
                        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                                <td colspan="8">
                                    <div align="right" class="style6">
                                        Exp Date: <?= date_indo($c['exp_date']); ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="8">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="padding: 5px;">
                                    <div align="left" class="style6">
                                        STNK
                                    </div>
                                </td>
                                <td>:</td>
                                <td style="padding: 5px;" colspan="6">
                                    <div align="left" class="style6">
                                        <?= $c['nama_stnk']; ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px;">
                                    <div align="left" class="style6">
                                        NOMOR POLISI
                                    </div>
                                </td>
                                <td>:</td>
                                <td style="padding: 5px;">
                                    <div align="left" class="style6">
                                        <?= $c['no_polisi']; ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px;">
                                    <div align="left" class="style6">
                                        MERK MOBIL
                                    </div>
                                </td>
                                <td>:</td>
                                <td style="padding: 5px;">
                                    <div align="left" class="style6">
                                        <?= $c['merk_mobil']; ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px;">
                                    <div align="left" class="style6">
                                        JENIS MOBIL
                                    </div>
                                </td>
                                <td>:</td>
                                <td style="padding: 5px;">
                                    <div align="left" class="style6">
                                        <?= $c['nama_mobil']; ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="8"><br>
                                    <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" class="style6">
                                        <tr>
                                            <td style="padding: 5px; text-align: center;">WARNA</td>
                                            <td style="padding: 5px; text-align: center;">NOMOR MESIN</td>
                                            <td style="padding: 5px; text-align: center;">NOMOR RANGKA</td>
                                            <td style="padding: 5px; text-align: center;">TAHUN PEMBUATAN</td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px; text-align: center;"> <?= $c['warna']; ?></td>
                                            <td style="padding: 5px; text-align: center;"> <?= $c['no_mesin']; ?></td>
                                            <td style="padding: 5px; text-align: center;"> <?= $c['no_rangka']; ?></td>
                                            <td style="padding: 5px; text-align: center;"> <?= $c['tahun']; ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="8">
                        <br>
                        <hr>
                    </td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>
    </table>

</body>

</html>