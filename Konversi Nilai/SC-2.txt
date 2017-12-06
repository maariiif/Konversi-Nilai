<html>
    <head>
        <title>Percobaan 8.1 | 2110151046</title>
    </head>
    <style type="text/css" media="screen">
        h6{
            padding-bottom: 0;
            color: gray;
        }
    </style>
    <body>
        <table>
            <tr>
                <td>
                    <a href="SC-2.txt">
                    <button>Source Code</button>
                    </a>
                </td>
            </tr>
        </table>
        <h1 align="center"><strong>HASIL KONVERSI NILAI</strong></h1>
        <form>
            <table align="center">
                <tr>
                    <td>Nama </td>
                    <td> : </td>
                    <td>
                        <?php
                                echo $_POST["nama"];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>NRP </td>
                    <td> : </td>
                    <td>
                        <?php
                                echo $_POST["nrp"]
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Nilai Angka </td>
                    <td> : </td>
                    <td>
                        <?php
                                if ($_POST["nilai"] != '')
                                {
                                    echo $_POST["nilai"];
                                }
                                else
                                    echo "Nilai Harus Diisi!";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Nilai Huruf </td>
                    <td> : </td>
                    <td>
                        <?php
                                $vnil = round($_POST["nilai"]);
                                if ($vnil != '' && $vnil >= 0)
                                {
                                    if($vnil >= 0 && $vnil <= 40)
                                        echo "E";
                                    else if ($vnil >= 41 && $vnil <= 55)
                                        echo "D";
                                    else if ($vnil >= 56 && $vnil <= 60)
                                        echo "C";
                                    else if ($vnil >= 61 && $vnil <= 65)
                                        echo "BC";
                                    else if ($vnil >= 66 && $vnil <= 70)
                                        echo "B";
                                    else if ($vnil >= 71 && $vnil <= 80)
                                        echo "AB";
                                    else if ($vnil >= 81 && $vnil <= 100)
                                        echo "A";
                                    else
                                        echo "Error!!!";
                                }
                                else
                                {
                                    echo "Nilai Harus Diisi!";
                                }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Predikat </td>
                    <td> : </td>
                    <td>
                        <?php
                                $vnil = round($_POST["nilai"]);
                                if ($vnil != '' && $vnil >= 0)
                                {
                                    if($vnil >= 0 && $vnil <= 40)
                                        echo "Sangat Tidak Memuaskan";
                                    else if ($vnil >= 41 && $vnil <= 55)
                                        echo "Tidak Memuaskan";
                                    else if ($vnil >= 56 && $vnil <= 60)
                                        echo "Cukup";
                                    else if ($vnil >= 61 && $vnil <= 65)
                                        echo "Lebih Dari Cukup";
                                    else if ($vnil >= 66 && $vnil <= 70)
                                        echo "Baik";
                                    else if ($vnil >= 71 && $vnil <= 80)
                                        echo "Sangat Baik";
                                    else if ($vnil >= 81 && $vnil <= 100)
                                        echo "Sempurna";
                                    else
                                        echo "Error!!!";
                                }
                                else
                                {
                                    echo "Nilai Harus Diisi!";
                                }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit" formaction="index.html">Kembali</button>
                    </td>
                </tr>
            </table>
        </form>
        <h6 align="center">editor By. Ma'arif  |  2110151046  |  <i>maarif46@it.student.pens.ac.id</i></h6>
        
    </body>
</html>