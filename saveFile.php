
<html>
    <body>
        <?php
            //Open the file and write all the information to that file
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


            //Create the page that shows the contact information for the submission
            //Use echo command for html code
            echo "<table align=\"center\" bgcolor=\"lightgrey\" border=\"3\">";
                echo "<tr>
                            <th> Your information:</th>
                      </tr>";
                echo "<tr>
                            <td>
                                <p>
                                    First Name: ".$firstName."
                                </p>
                                <p>
                                    Last Name: ".$lastName."
                                </p>
                                <p>
                                    Address: ".$address."
                                </p>
                                <p>
                                    State: ".$state."
                                </p>
                                <p>
                                    Zip Code: ".$zip."
                                </p>
                                <p>
                                    Phone Number: ".$phone."
                                </p>
                                <p>
                                    Email: ".$email."
                                </p>
                            </td>
                      </tr>";

                //Create a go back link
                echo "<tr>
                            <td align=\"center\">
                                <a href=\"https://web-students-viewer.georgiasouthern.edu/~jb54322@ad.georgiasouthern.edu/\">
                                    Return to the Main Page
                                </a>
                            </td>
                      </tr>";
            echo "</table>";
        ?>

    </body>
</html>