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
                    <a href="SC2.txt">
                    <button>Source Code</button>
                    </a>
                </td>
            </tr>
        </table>
        <h1 align="center"><strong>DEMO PERPINDAHAN</strong></h1>
        <form>
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
                    <td>
                        <?php
                                $temp = $_POST["pilih"];
                                $var1 = $_POST["nilai"];
                                echo "Dengan melakukan perintah $temp pada bilangan ke- $var1 ";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Bilangan deretnya</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
$max = 10;
if ($temp == "continue")
{
    for($i = 0; $i < $max; $i++)
    {
        if($i == $var1)
            continue;
        echo "$i ";
    }
    echo " looping selesai.";
}

else if ($temp == "break")
{
    for($i = 0; $i < $max; $i++)
    {
        if($i == $var1)
            break;
        echo "$i ";
    }
    echo " looping selesai.";
}

else if ($temp == "return")
{
    function f_return()
    {
        $max = 10;
        $var1 = $_POST["nilai"];
        for($i = 0; $i < $max; $i++)
        {
            if($i == $var1)
                return;
            echo "$i ";
        }
        echo "looping selesai.";
    }
    
    f_return();
    echo "<br> Fungsi Selesai.";
}

else if ($temp == "exit")
{
    function f_exit()
    {
        $max = 10;
        $var1 = $_POST["nilai"];
        for($i = 0; $i < $max; $i++)
        {
            if($i == $var1)
                exit;
            echo "$i ";
        }
        echo "looping selesai.";
    }
    
    f_exit();
    echo "<br> Fungsi Selesai.";
}
                        ?>
                    </td>
                </tr>
            </table>
        </form>
        <h6 align="center">editor By. Ma'arif  |  2110151046  |  <i>maarif46@it.student.pens.ac.id</i></h6>
    </body>
</html>