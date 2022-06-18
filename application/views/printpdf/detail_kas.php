<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RCMS | REPORT</title>

    <style type="text/css">
        body {
            margin-top: 7%;
        }

        .st_total {
            font-size: 11pt;
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

        footer {
            position: fixed;
            text-align: left;
            bottom: -10px;
            left: auto;
            right: auto;
            height: 20px;
        }

        header {
            position: fixed;
            top: 0px;
            text-align: right;
            left: 0;
            right: 0;
            height: 20px;
        }

        .page:after {
            content: counter(page, decimal);
        }

        th {
            border-left: solid #000 1px;
            border-bottom: solid #000 1px;
            border-top: solid #000 1px;
            border-right: solid #000 1px;
        }
    </style>

</head>

<body>

    <header>
        <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td style="width: 35%;" class="style10b">
                    CV. INDORENZ UTAMA <br>TRANSPORTASI
                </td>
                <td style="text-align: left;">
                    <div><span class="style10b">
                            DETAIL KAS
                        </span><br><small class="style9"><?= Tanggal(date('Y-m-d', $start)); ?></small></div>
                </td>
            </tr>
        </table>
        <p class="page style10b">Hal: </p>
    </header>

    <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 20px;">
        <thead>
            <tr class="style6b">
                <th>NO</th>
                <th>JENIS TRANSAKSI</th>
                <th>DEBET</th>
                <th>KREDIT</th>
                <th>KETERANGAN</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0;
            $tkredit = 0;
            $tdebet = 0; ?>
            <?php foreach ($list as $l) : ?>
                <?php $tkredit += $l['kredit'];
                $tdebet += $l['debet']; ?>
                <tr class="style9">
                    <td style="text-align: center;" class="garisbawah"><?= ($no + 1) . '.'; ?></td>
                    <td style="padding-left: 10px;" class="garisbawah"><?= $l['jenis']; ?></td>
                    <td style="text-align: right; padding-right: 10px;" class="garisbawah"><?= rupiah($l['debet']); ?></td>
                    <td style="text-align: right; padding-right: 10px;" class="garisbawah"><?= rupiah($l['kredit']); ?></td>
                    <td style="padding-left: 10px;" class="garisbawah"><?= $l['keterangan']; ?></td>
                </tr>
                <?php $no++; ?>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">&nbsp;</td>
                <td class="st_total garisbawah" style="text-align: right; padding-right: 10px;"><?= rupiah($tdebet); ?></td>
                <td class="st_total garisbawah" style="text-align: right; padding-right: 10px;"><?= rupiah($tkredit); ?></td>
                <td class="st_total garisbawah" style="text-align: right; padding-right: 10px;"><?= rupiah($tdebet + $tkredit); ?></td>
            </tr>
        </tfoot>
    </table>
    <footer>
        <p class="style6">Pertokon Club 9 Jl.Kalimalang Raya Blok N Nomor 12G JAKARTA TIMUR<br>Phone: +62 21 2962 2181, Mobile Phone: 0811 815 799, Mail: indorenz@gmail.com, www.jakartaalphardrent.com</p>
    </footer>


    <small><i> Dicetak oleh , <?= $user['nama'] . '<br>' . longdate_indo(date('Y-m-d')); ?></i></small>
</body>

</html>