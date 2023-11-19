<?php
$count = "1";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="./bootstrap-5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /** Define the margins of your page **/
        html {
            font-size: 14px;
            font-family: times, "Times New Roman";
        }

        @page {
            margin: 180px 50px 50px;
        }

        th,
        .padding-cust {
            padding: 5px;
        }

        .padding-cust-2 {
            padding: 0px 2px;
        }

        header {
            position: fixed;
            top: -130px;
            left: 0px;
            right: 0px;
            height: 50px;

            /** Extra personal styles **/
            text-align: center;
        }

        footer {
            position: fixed;
            bottom: -30px;
            left: 0px;
            right: 0px;
            height: 50px;

            /** Extra personal styles **/
            color: black;
            text-align: center;
            line-height: 35px;
            opacity: 0.4;
        }

        footer .pagenum:before {
            content: counter(page);
        }

        .custCol {
            background-color: #D7D7D8;
        }

        .aboveHeader {
            position: fixed;
            top: -170px;
            left: 0px;
            right: 0px;
            height: 50px;

            /** Extra personal styles **/
            text-align: center;
            line-height: 35px;
        }

        p {
            margin-bottom: 15px !important;
        }
        hr {
            margin: 1rem 0;
            color: black;
            border: 0;
            opacity: 0.75;
            width: 30%;
        }
    </style>

</head>

<header>
    <table class="w-100 text-left mt-3">
        <tr>
            <td width="20%">Nama Sekolah</td>
            <td width="2%"> : </td>
            <td width="38%">Sekolah Katolik Cor Jesu Malang</td>
            <td width="20%">Kelas</td>
            <td> : </td>
            <td class="fw-bold" width="20%">VIIB</td>
        </tr>
        <tr>
            <td width="20%">Alamat</td>
            <td width="2%"> : </td>
            <td width="38%">JL. Jaksa Agung Suprapto No.55 Malang</td>
            <td width="20%">Semester</td>
            <td width="2%"> : </td>
            <td class="fw-bold" width="20%">Genap</td>
        </tr>
        <tr>
            <td width="20%">Nama</td>
            <td width="2%"> : </td>
            <td class="fw-bold" width="38%">Agustino Erlangga Sutanto</td>
            <td width="20%">Tahun Pelajaran</td>
            <td width="2%"> : </td>
            <td width="20%">2023-2024</td>
        </tr>
        <tr>
            <td width="20%">NIS / NISN</td>
            <td width="2%"> : </td>
            <td class="fw-bold" width="38%">6401 / 0102650691</td>
            <td width="20%">Fase</td>
            <td width="2%"> : </td>
            <td class="fw-bold" width="20%">D</td>
        </tr>
    </table>
</header>
<footer>Rapot Semester VIIB - <span class="pagenum"></span></footer>

<main>
    <!-- Define header and footer blocks before your content -->
    <div style="font-size: 16px;" class="container text-center fw-bold aboveHeader">
        PENCAPAIAN KOMPETENSI PESERTA DIDIK
    </div>
    <table class="table table bordered mt-2">
        <thead class="align-middle text-center">
            <tr class="fw-bold custCol">
                <th class="border-1 border-dark" width="5%">NO</th>
                <th class="border-1 border-dark" width="45%">Mata Pelajaran</th>
                <th class="border-1 border-dark" width="5%">Nilai Akhir</th>
                <th class="border-1 border-dark" width="45%">Capaian Kompetensi</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            <tr>
                <td class="border-1 border-dark padding-cust text-center" rowspan="2"> 1 </td>
                <td class="border-1 border-dark padding-cust" rowspan="2">
                    Pendidikan Agama dan Budi Pekerti
                </td>
                <td class="border-1 border-dark padding-cust text-center" rowspan="2">
                    81
                </td>
                <td class="border-1 border-dark padding-cust">Penguasaan materi baik dalam memahami berbagai sifat dan sikap Yesus Kristus yang patut diteladani sebagai orang beriman sehingga tergerak mewujudkannya dalam perilaku sehari-hari.</td>
            </tr>
            <tr>
                <td class="border-1 border-dark padding-cust">Penguasaan materi cukup dalam memahami nilai-nilai dasar hidup bersama yang diajarkan Yesus sehingga mereka tergerak mewujudkannya dalam perilaku hidup sehari-hari.</td>
            </tr>

            <tr>
                <td class="border-1 border-dark padding-cust text-center" rowspan="2"> 1 </td>
                <td class="border-1 border-dark padding-cust" rowspan="2">
                    Pendidikan Agama dan Budi Pekerti
                </td>
                <td class="border-1 border-dark padding-cust text-center" rowspan="2">
                    81
                </td>
                <td class="border-1 border-dark padding-cust">Penguasaan materi baik dalam memahami berbagai sifat dan sikap Yesus Kristus yang patut diteladani sebagai orang beriman sehingga tergerak mewujudkannya dalam perilaku sehari-hari.</td>
            </tr>
            <tr>
                <td class="border-1 border-dark padding-cust">Penguasaan materi cukup dalam memahami nilai-nilai dasar hidup bersama yang diajarkan Yesus sehingga mereka tergerak mewujudkannya dalam perilaku hidup sehari-hari.</td>
            </tr>

            <tr>
                <td class="border-1 border-dark padding-cust text-center" rowspan="2"> 1 </td>
                <td class="border-1 border-dark padding-cust" rowspan="2">
                    Pendidikan Agama dan Budi Pekerti
                </td>
                <td class="border-1 border-dark padding-cust text-center" rowspan="2">
                    81
                </td>
                <td class="border-1 border-dark padding-cust">Penguasaan materi baik dalam memahami berbagai sifat dan sikap Yesus Kristus yang patut diteladani sebagai orang beriman sehingga tergerak mewujudkannya dalam perilaku sehari-hari.</td>
            </tr>
            <tr>
                <td class="border-1 border-dark padding-cust">Penguasaan materi cukup dalam memahami nilai-nilai dasar hidup bersama yang diajarkan Yesus sehingga mereka tergerak mewujudkannya dalam perilaku hidup sehari-hari.</td>
            </tr>

            <tr>
                <td class="border-1 border-dark padding-cust text-center" rowspan="2"> 1 </td>
                <td class="border-1 border-dark padding-cust" rowspan="2">
                    Pendidikan Agama dan Budi Pekerti
                </td>
                <td class="border-1 border-dark padding-cust text-center" rowspan="2">
                    81
                </td>
                <td class="border-1 border-dark padding-cust">Penguasaan materi baik dalam memahami berbagai sifat dan sikap Yesus Kristus yang patut diteladani sebagai orang beriman sehingga tergerak mewujudkannya dalam perilaku sehari-hari.</td>
            </tr>
            <tr>
                <td class="border-1 border-dark padding-cust">Penguasaan materi cukup dalam memahami nilai-nilai dasar hidup bersama yang diajarkan Yesus sehingga mereka tergerak mewujudkannya dalam perilaku hidup sehari-hari.</td>
            </tr>

            <tr>
                <td class="border-1 border-dark padding-cust text-center" rowspan="2"> 1 </td>
                <td class="border-1 border-dark padding-cust" rowspan="2">
                    Pendidikan Agama dan Budi Pekerti
                </td>
                <td class="border-1 border-dark padding-cust text-center" rowspan="2">
                    81
                </td>
                <td class="border-1 border-dark padding-cust">Penguasaan materi baik dalam memahami berbagai sifat dan sikap Yesus Kristus yang patut diteladani sebagai orang beriman sehingga tergerak mewujudkannya dalam perilaku sehari-hari.</td>
            </tr>
            <tr>
                <td class="border-1 border-dark padding-cust">Penguasaan materi cukup dalam memahami nilai-nilai dasar hidup bersama yang diajarkan Yesus sehingga mereka tergerak mewujudkannya dalam perilaku hidup sehari-hari.</td>
            </tr>
        </tbody>
    </table>
    <p style="page-break-before: always;"></p>
    <div id="ekskul">
        <div style="font-size: 20px;" class="fw-bold">EKSTRAKULIKULER</div>
        <table class="table table-bordered mt-3">
            <thead class="align-middle fw-bold custCol">
                <tr class="">
                    <th class="text-center border-1 border-dark" width="5%">NO</th>
                    <th class="text-center border-1 border-dark" width="45%">KEGIATAN EKSTRAKULIKULER</th>
                    <th class="text-center border-1 border-dark" width="50%">DESKRIPSI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="fw-bold text-center border-1 border-dark padding-cust" width="5%">1</td>
                    <td class="border-1 border-dark padding-cust" width="45%">KEGIATAN EKSTRAKULIKULER</td>
                    <td class="border-1 border-dark padding-cust" width="50%">DESKRIPSI</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="note" class="mt-5">
        <div style="font-size: 20px;" class="fw-bold">CATATAN WALI KELAS</div>
        <table class="table table-bordered mt-3">
            <thead class="align-middle fw-bold custCol">
                <tr class="">
                    <th class="text-center border-1 border-dark">CATATAN</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border-1 border-dark padding-cust">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore rerum, cumque dolores aut ducimus impedit magni modi maiores dicta commodi obcaecati explicabo perspiciatis aspernatur, non voluptatum autem, quia blanditiis. Velit.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="absence" class="mt-5">
        <table class="w-100">
            <tr>
                <td width="40%" rowspan="5">
                    <div style="font-size: 20px;" class="fw-bold">KETIDAKHADIRAN</div>
                    <table class="table table-bordered mt-3">
                        <tbody class="align-middle">
                            <tr class="border-1 border-dark">
                                <td width="45%" class="text-left padding-cust">Sakit</td>
                                <td width="5%" class="text-left padding-cust">:</td>
                                <td width="20%" class="text-end padding-cust">1</td>
                                <td width="30%" class="text-left padding-cust">Hari</td>
                            </tr>
                            <tr class="border-1 border-dark">
                                <td class="text-left padding-cust">Izin</td>
                                <td class="text-left padding-cust">:</td>
                                <td class="text-end padding-cust">1</td>
                                <td class="text-left padding-cust">Hari</td>
                            </tr>
                            <tr class="border-1 border-dark">
                                <td class="text-left padding-cust">Tanpa Keterangan</td>
                                <td class="text-left padding-cust">:</td>
                                <td class="text-end padding-cust">1</td>
                                <td class="text-left padding-cust">Hari</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td width="5%"></td>
                <td rowspan="4" class="border-1 align-top border-dark border-bottom padding-cust-2 mt-4" width="55%">
                    <p>Keputusan</p>
                    <p>Berdasarkan pencapaian kompetensi pada semester ke-1 dan ke-2</p>
                    <p>Peserta didik ditetapkan:</p>
                    <p>Naik ke kelas : VIII(Delapan)</p>
                    <p style="margin-bottom: 1px!important;" class="text-decoration-line-through">Tinggal di kelas</p>
                </td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
        </table>
    </div>
    <table class="w-100">
        <tr>
            <td width="70%"></td>
            <td width="30%">Malang, 07 Oktober 2023</td>
        </tr>
        <tr>
            <td width="70%">Orang Tua / Wali Murid</td>
            <td width="30%">Wali Kelas,</td>
        </tr>
        <tr>
            <td width="70%" height="50px"> </td>
            <td width="30%" height="50px"> </td>
        </tr>
        <tr>
            <td width="70%">
                <hr>
                </hr>
            </td>
            <td class="text-decoration-underline" width="30%">Dionisius Widyatmoko, S.Pd.</td>
        </tr>
        <tr>
            <td width="70%"></td>
            <td width="30%">NIPY. 031312015297</td>
        </tr>
    </table>
    <table class="w-100 text-center">
        <tr>
            <td width="100%">Mengetahui,</td>
        </tr>
        <tr>
            <td width="100%">Kepala Sekolah,</td>
        </tr>
        <tr>
            <td width="100%" height="50px"> </td>
        </tr>
        <tr>
            <td class="text-decoration-underline" width="30%">Sr. Dafrosa Noni, OSU</td>
        </tr>
        <tr>
            <td width="100%">NIPY. 031341999171</td>
        </tr>
    </table>
</main>

<script src="./bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</html>