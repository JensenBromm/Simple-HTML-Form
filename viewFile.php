<html>
    <body>
        <?php
            //Counter for contact Number
            $i=1;

            //open file for reading
            $file=fopen("savedInfo.txt",'r') or die("ERROR: CANT OPEN FILE");

            //Read data to screen
            while(!feof($file))
            {
                //Read line
                $data=array(fgets($file),fgets($file),fgets($file),fgets($file),fgets($file),fgets($file),fgets($file));
                if($data[0] and $data[1] and $data[2] and $data[3] and $data[4] and $data[5] and $data[6])
                {
                    echo "<table align=\"center\" bgcolor=\"lightgrey\" border=\"3\">";
                        echo "<tr>
                            <th> Contact Number: ".$i."</th>
                          </tr>";
                        echo "<tr>
                            <td>
                                <p>
                                    ".$data[0]."
                                </p>
                                <p>
                                    ".$data[1]."
                                </p>
                                <p>
                                    ".$data[2]."
                                </p>
                                <p>
                                    ".$data[3]."
                                </p>
                                <p>
                                    ".$data[4]."
                                </p>
                                <p>
                                    ".$data[5]."
                                </p>
                                <p>
                                    ".$data[6]."
                                </p>
                            </td>
                      </tr>";
                      
                      $i++;
                }
            }

            fclose($file);
        ?>
    </body>
</html>