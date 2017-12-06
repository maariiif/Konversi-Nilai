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
                    <a href="SC1.txt">
                    <button>Source Code</button>
                    </a>
                </td>
            </tr>
        </table>
        
        <h1 align="center"><strong>DEMO PERPINDAHAN</strong></h1>
        <form action="page2.php" method="post">
            <table align="center">
                <tr>
                    <td>
                        <?php
                                $var1 = 0;
                                $var2 = 10;
                                echo "Tampilkan angka dari $var1 sampai $var2";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        Lakukan
                        <input type="radio" name="pilih" value="continue"> continue
                        <input type="radio" name="pilih" value="break"> break
                        <input type="radio" name="pilih" value="return"> return
                        <input type="radio" name="pilih" value="exit"> exit
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        Pada hitungan ke - 
                        <select name="nilai">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit">Select</button>
                    </td>
                </tr>
            </table>
        </form>
        <h6 align="center">editor By. Ma'arif  |  2110151046  |  <i>maarif46@it.student.pens.ac.id</i></h6>
    </body>
</html>