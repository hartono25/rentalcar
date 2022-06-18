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

        .garisputus {
            border-bottom: dashed #000 1px;
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
                    <div>
                        <span class="style10b">
                            OUTSTANDING INVOICE
                        </span>
                    </div>
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
            <tr class="style9b" style="text-align: center;">
                <th width="20">NO</th>
                <th>TGL_START</th>
                <th>TGL_FINISH</th>
                <th width="80">SALES ORDER</th>
                <th>NO.POL</th>
                <th>MOBIL</th>
                <th>TIPE SEWA</th>
                <th>Rp. SEWA</th>
                <th>DP</th>
                <th>OVERTIME</th>
                <th>SISA</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $gdp = 0;
            $gsewa = 0;
            $gover = 0;
            $gsisa = 0;
            ?>
            <?php foreach ($list as $l) : ?>
                <tr class="style9b">
                    <td colspan="11" class="garisbawah" style="padding-left: 10px;"><?= $l['kode_customer'] . ' - ' . $l['nama_customer']; ?></td>
                </tr>
                <?php $data = $this->Model->getSoCustmer($l['kode_customer']); ?>
                <?php
                $no = 0;
                $tover = 0;
                $tsewa = 0;
                $tdp = 0;
                $tsisa = 0;
                ?>
                <?php foreach ($data as $d) : ?>
                    <?php
                    $tsewa  += $d['harga_sewa'];
                    $tdp    += $d['pembayaran_dp'];
                    $tover  += denda($d['so_id']);
                    $tsisa  += ($d['harga_sewa'] + denda($d['so_id'])) - $d['pembayaran_dp'];

                    ?>
                    <tr class="style6">
                        <td class="garisputus" style="text-align: center;"><?= ($no + 1) . '.'; ?></td>
                        <td class="garisputus"><?= Tanggal(date('Y-m-d', strtotime($d['tgl_start']))); ?></td>
                        <td class="garisputus"><?= Tanggal(date('Y-m-d', strtotime($d['tgl_end']))); ?></td>
                        <td class="garisputus"><?= $d['kode_so']; ?></td>
                        <td class="garisputus"><?= $d['no_polisi']; ?></td>
                        <td class="garisputus"><?= $d['nama_mobil']; ?></td>
                        <td class="garisputus"><?= $d['tipe_sewa']; ?></td>
                        <td class="garisputus" style="text-align: right;"><?= rupiah($d['harga_sewa']); ?></td>
                        <td class="garisputus" style="text-align: right;"><?= rupiah($d['pembayaran_dp']); ?></td>
                        <td class="garisputus" style="text-align: right;"><?= rupiah(denda($d['so_id'])); ?></td>
                        <td class="garisputus" style="text-align: right;"><?= rupiah(($d['harga_sewa'] + denda($d['so_id'])) - $d['pembayaran_dp']); ?></td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
                <?php
                $gsewa  = $gsewa + $tsewa;
                $gdp    = $gdp + $tdp;
                $gover  = $gover + $tover;
                $gsisa  = $gsisa + $tsisa;
                ?>
                <tr>
                    <td colspan="7" style="text-align: right;" class="style6b garisbawah">
                        <?= 'Total ' . $l['nama_customer'] . ' :'; ?>
                    </td>
                    <td style="text-align: right;" class="style6b garisbawah">
                        <?= rupiah($tsewa); ?>
                    </td>
                    <td style="text-align: right;" class="style6b garisbawah">
                        <?= rupiah($tdp); ?>
                    </td>
                    <td style="text-align: right;" class="style6b garisbawah">
                        <?= rupiah($tover); ?>
                    </td>
                    <td style="text-align: right;" class="style6b garisbawah">
                        <?= rupiah($tsisa); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <td colspan="7" style="text-align: right;" class="style6b garisbawah">
                GRAND TOTAL :
            </td>
            <td style="text-align: right;" class="style6b garisbawah">
                <?= rupiah($gsewa); ?>
            </td>
            <td style="text-align: right;" class="style6b garisbawah">
                <?= rupiah($gdp); ?>
            </td>
            <td style="text-align: right;" class="style6b garisbawah">
                <?= rupiah($gover); ?>
            </td>
            <td style="text-align: right;" class="style6b garisbawah">
                <?= rupiah($gsisa); ?>
            </td>
        </tfoot>
    </table>
    <small><i> Dicetak oleh , <?= $user['nama'] . '<br>' . longdate_indo(date('Y-m-d')); ?></i></small>
</body>

</html>