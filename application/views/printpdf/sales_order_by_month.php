<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RCMS | REPORT</title>

    <style type="text/css">
        body {
            margin-top: 10%;
        }

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
                            SUMMARY SALES ORDER
                        </span><br><small class="style9">Periode: <?= Tanggal(date('Y-m-d', $start)) . ' s/d ' . Tanggal(date('Y-m-d', $end)); ?></small></div>
                </td>
            </tr>
        </table>
        <p class="page style10b">Hal: </p>
    </header>

    <footer>
        <p class="style6">Pertokon Club 9 Jl.Kalimalang Raya Blok N Nomor 12G JAKARTA TIMUR<br>Phone: +62 21 2962 2181, Mobile Phone: 0811 815 799, Mail: indorenz@gmail.com, www.jakartaalphardrent.com</p>
    </footer>

    <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
        <thead>
            <tr class="style9b" style="text-align: center;">
                <th>TANGGAL</th>
                <th>MOBIL</th>
                <th>NO. POL</th>
                <th>ORDER</th>
                <th>JENIS SEWA</th>
                <th>CUSTOMER</th>
                <th>HARGA</th>
                <th>DENDA</th>
                <th>TOTAL</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $grandtotal = 0;
            ?>
            <?php foreach ($list as $so) : ?>
                <?php
                $subtotal = 0;
                $tgl = date('Y-m-d H:i:s', strtotime($so['tgl_start']));
                $data = $this->Model->report_so($tgl, $so['kode_customer']);
                foreach ($data as $d) :
                    $total = denda($d['so_id']) + $d['harga_sewa'];
                    $subtotal += $total;
                ?>
                    <tr>
                        <td style="padding-left: 5px;" class="style9 garisbawah"><?= Tanggal(date('Y-m-d', strtotime($d['tgl_start']))); ?></td>
                        <td style="padding-left: 5px;" class="style9 garisbawah">
                            <?= $d['nama_mobil']; ?>
                        </td>
                        <td style="padding-left: 5px;" class="style9 garisbawah"><?= $d['no_polisi']; ?></td>
                        <td style="padding-left: 5px;" class="style9 garisbawah"><?= $d['tipe_order']; ?></td>
                        <td style="padding-left: 5px;" class="style9 garisbawah"><?= $d['tipe_sewa']; ?></td>
                        <td style="padding-left: 5px;" class="style9 garisbawah"><?= $d['nama_customer']; ?></td>
                        <td style="padding-right: 5px; text-align: right;" class="style9 garisbawah"><?= rupiah($d['harga_sewa']); ?></td>
                        <td style="padding-right: 5px; text-align: right;" class="style9 garisbawah"><?= rupiah(denda($d['so_id'])); ?></td>
                        <td style="padding-right: 5px; text-align: right;" class="style9 garisbawah"><?= rupiah($total); ?></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="7" class="st_total " style="padding-right: 5px; text-align: right;">Sub Total :</td>
                    <td colspan="3" class="st_total " style="padding-right: 5px; text-align: right;"><?= rupiah($subtotal); ?></td>
                </tr>
                <?php $grandtotal += $subtotal; ?>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <td colspan="7" class="st_total " style="padding-right: 5px; text-align: right;">Grand Total :</td>
            <td colspan="3" class="st_total " style="padding-right: 5px; text-align: right;"><?= rupiah($grandtotal); ?></td>
        </tfoot>
    </table>
    <small><i> Dicetak oleh , <?= $user['nama'] . '<br>' . longdate_indo(date('Y-m-d')); ?></i></small>
</body>

</html>