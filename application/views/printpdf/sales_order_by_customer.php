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
                            SUMMARY SALES ORDER BY MOBIL
                        </span><br><small class="style9">Periode: <?= Tanggal(date('Y-m-d', $start)) . ' s/d ' . Tanggal(date('Y-m-d', $end)); ?></small></div>
                </td>
            </tr>
        </table>
        <p class="page style10b">Hal: </p>
    </header>

    <footer>
        <p class="style6">Pertokon Club 9 Jl.Kalimalang Raya Blok N Nomor 12G JAKARTA TIMUR<br>Phone: +62 21 2962 2181, Mobile Phone: 0811 815 799, Mail: indorenz@gmail.com, www.jakartaalphardrent.com</p>
    </footer>

    <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 20px;">
        <thead>
            <tr class="style6b" style="text-align: center;">
                <th>NO</th>
                <th>CUSTOMER</th>
                <th>PERUSAHAAN</th>
                <th>JABATAN</th>
                <th>NO.TELP</th>
                <th>QTY</th>
                <th>TOTAL RP.</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0;
            $grandtotal = 0; ?>
            <?php foreach ($list as $c) : ?>
                <?php $grandtotal += $c['ptotal']; ?>
                <?php $count = $this->db->get_where('rc_pembayaran', ['kode_customer' => $c['kode_customer']])->num_rows(); ?>
                <tr>
                    <td style="text-align: center;" class="style6 garisbawah"><?= ($no + 1) . '.'; ?></td>
                    <td style="padding-left: 5px;" class="style6 garisbawah"><?= $c['nama_customer']; ?></td>
                    <td style="padding-left: 5px;" class="style6 garisbawah"><?= $c['nama_perusahaan']; ?></td>
                    <td style="padding-left: 5px;" class="style6 garisbawah"><?= $c['posisi_jabatan']; ?></td>
                    <td style="padding-left: 5px;" class="style6 garisbawah"><?= $c['no_telp_customer1']; ?></td>
                    <td style="text-align: center;" class="style6 garisbawah"><?= $count; ?></td>
                    <td style="text-align: right; padding-right: 5px;" class="style6 garisbawah"><?= rupiah($c['ptotal']); ?></td>
                </tr>
                <?php $no++; ?>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5" class="st_total" style="text-align: right; padding-right: 5px; padding-top: 20px;">Grand Total :</td>
                <td colspan="2" class="st_total garisbawah" style="text-align: right; padding-right: 5px;">
                    Rp. <?= rupiah($grandtotal); ?>
                </td>
            </tr>
        </tfoot>

    </table>
    <small><i> Dicetak oleh , <?= $user['nama'] . '<br>' . longdate_indo(date('Y-m-d')); ?></i></small>
</body>

</html>