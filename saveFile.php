
<html>
    <body>
        <?php
            if(isset($_POST['submit']))
            {
                $file=fopen("savedInfo.txt",'a') or die("ERROR: Can't Open File");

                $firstName=$_POST['firstName'];
                fwrite($file,"First Name: ");
                fwrite($file,$firstName ."\n");
                $lastName=$_POST['lastName'];
                fwrite($file,"Last Name: ");
                fwrite($file,$lastName ."\n");
                $address=$_POST['address'];
                fwrite($file,"Address: ");
                fwrite($file,$address ."\n");
                $state=$_POST['state-choice'];
                fwrite($file,"State: ");
                fwrite($file,$state ."\n");
                $zip=$_POST['zip'];
                fwrite($file,"Zip Code: ");
                fwrite($file,$zip."\n");
                $phone=$_POST['phone'];
                fwrite($file,"Phone Number: ");
                fwrite($file,$phone ."\n");
                $email=$_POST['email'];
                fwrite($file,"E-Mail: ");
                fwrite($file,$email ."\n");

                fclose($file);

            }
        ?>

    </body>
</html>