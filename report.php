<!DOCTYPE html>
<html>
    <head>
        <style>
            table {
              border-collapse: collapse;
            }

            table, td, th {
                text-align: center;
              border: 1px solid black;
            }

            th {
                border-color: blue;
                background-color: aqua;
            }
        </style>
    </head>
    <body>
        
            <?php 
            extract($_POST);
            if (isset($employee)) { ?>
                <p>Employee Report</p>
                <p>Date: <?php echo date('Y-m-d'); ?></p>
                <p>Time Stamp <?php echo date("h:i:sa"); ?></p>
                <div align="Center">
                <form method="POST" action="managerpage.php">
                
                

                <table align="Center" style="width: 750;">
                    <tr>
                        <th>Employee ID</th>
                        <th>Employee name</th>
                        <th>Job</th>
                        <th>Salary</th>
                        <th>Contact</th>
                        <th>No. of Properties</th>
                        <th>Commsion earned</th>
                        <th>Joined on</th>
                        <th>Contarct untill</th>
                    </tr>
                    <?php 
                        require 'dbh.php';
                        $sql="SELECT * FROM users where type!='customer';";
                        $result= mysqli_query($conn, $sql);
                        while ($row= mysqli_fetch_assoc($result)) {
                            $name = $row['fullname'];
                            $id=$row['u_id'];
                            $contact = $row['number'];


                             #employeetable
                            $sql3 = "SELECT * FROM employee where u_id='$id';";
                            $result3 = mysqli_query($conn, $sql3);
                            $row3 = mysqli_fetch_assoc($result3);

                            $joined= $row3['joined'];
                            $untill = $row3['untill'];
                            $eid=$row3['id'];


                            #sales table
                            $sql2 = "SELECT * FROM sales where aid = '$id';";
                            $result2 = mysqli_query($conn, $sql2);
                            $resultcheck = mysqli_num_rows($result2);
                            
                            if ($resultcheck>0) {
                                $commision=0.0;
                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                   $commision = $row2['commision']+$commision;
                                }
                            }
                            else{

                                $commision=0;
                            }

                            #property table
                            $sql4 = "SELECT * FROM property where u_id='$id';";
                            $result4=mysqli_query($conn,$sql4);
                            $resultcheck2 = mysqli_num_rows($result4);
                            if ($resultcheck2>0) {
                                $property = $resultcheck2;
                            }
                            else{
                                $property=0;
                            }


                            if ($row['type']=='seller') {
                                echo "<tr>";
                                echo "<td>".$eid."</td>";
                                echo "<td>".$name."</td>";
                                echo "<td>agent</td>";
                                echo "<td>".$row3['salary']."</td>";
                                echo "<td>".$contact."</td>";
                                echo "<td>".$property."</td>";
                                echo "<td>".$commision." BD</td>";
                                echo "<td>".$joined."</td>";
                                echo "<td>".$untill."</td>";
                                echo "</tr>";
                                
                            }
                            else{
                                echo "<tr>";
                                echo "<td>".$eid."</td>";
                                echo "<td>".$name."</td>";
                                echo "<td>".$row['type']."</td>";
                                echo "<td>".$row3['salary']."</td>";
                                echo "<td>".$contact."</td>";
                                echo "<td>---</td>";
                                echo "<td>---</td>";
                                echo "<td>".$joined."</td>";
                                echo "<td>".$untill."</td>";
                                echo "</tr>";
                            }



                           

                        }
                    ?>
                    
                   
                </table>
                <input type="submit" name="cancel" value="Cancel" style="margin-top: 10px;"><input type="submit" name="print" Value="Print" style="margin-top: 10px;margin-left: 7px;">
            </form>
            <?php }
            elseif (isset($city)) { ?>
                <p>City Report</p>
                <p>Date: <?php echo date('Y-m-d'); ?></p>
                <p>Time Stamp <?php echo date("h:i:sa"); ?></p>
                <div align="Center">
                <form method="POST" action="managerpage.php">
                
                

                <table align="Center" style="width: 750;">
                    <tr>
                        <th>City ID</th>
                        <th>City name</th>
                        <th>Current Properties</th>
                        <th>Sold Properties</th>
                        <th>Income</th>
                        
                    </tr>
                    <?php 
                        require 'dbh.php';
                        $sql="SELECT * FROM city";
                        $result= mysqli_query($conn, $sql);
                        while ($row= mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                           $city = $row['city'];


                            


                            #property table
                            $sql2 = "SELECT * FROM property where city = '$city';";
                            $result2 = mysqli_query($conn, $sql2);
                            $resultcheck = mysqli_num_rows($result2);
                            
                            if ($resultcheck>0) {
                                $property=$resultcheck;
                            }
                            else{

                                $property=0;
                            }

                            #sales table
                            $sql4 = "SELECT * FROM sales where city='$city';";
                            $result4=mysqli_query($conn,$sql4);
                            $resultcheck2 = mysqli_num_rows($result4);
                            if ($resultcheck2>0) {
                                $sold = $resultcheck2;
                                $sales=0.0;
                                while ($row4 = mysqli_fetch_assoc($result4)) {
                                   $sales = $sales + $row4['commision'];
                                }
                            }
                            else{
                                $sales=0;
                                $sold=0;
                            }


                           
                                echo "<tr>";
                                echo "<td>".$id."</td>";
                                echo "<td>".$city."</td>";                               
                                echo "<td>".$property."</td>";
                                echo "<td>".$sold."</td>";
                                echo "<td>".$sales." BD</td>";
                                echo "</tr>";

                        }
                    ?>
                    
                   
                </table>
                <input type="submit" name="cancel" value="Cancel" style="margin-top: 10px;"><input type="submit" name="print" Value="Print" style="margin-top: 10px;margin-left: 7px;">
            </form>
            <?php }
            elseif ($property) { ?>
                                <p>Property Report</p>
                <p>Date: <?php echo date('Y-m-d'); ?></p>
                <p>Time Stamp <?php echo date("h:i:sa"); ?></p>
                <div align="Center">
                <form method="POST" action="managerpage.php">
                
                

                <table align="Center" style="width: 750;">
                    <tr>
                        <th>Property ID</th>
                        <th>Property name</th>
                        <th>Type</th>
                        <th>Agent</th>
                        <th>Located in</th>
                        <th>Road No.</th>
                        <th>Bldg no.</th>
                        <th>Income type:</th>
                        <th>Price</th>
                        <th>Status</th>

                        
                    </tr>
                    <?php 
                        require 'dbh.php';
                        $sql="SELECT * FROM property;";
                        $result= mysqli_query($conn, $sql);
                        while ($row= mysqli_fetch_assoc($result)) {
                            $id = $row['p_id'];
                            $agentid=$row['u_id'];
                            $name = $row['name'];
                            $city=$row['city'];
                            $road = $row['road'];
                            $bldg = $row['bldg'];
                            $type = $row['type'];
                            $income = $row['income'];
                            $price = $row['price'];





                            


                            #sales table
                            $sql2 = "SELECT * FROM sales where pid = '$id';";
                            $result2 = mysqli_query($conn, $sql2);
                            $resultcheck = mysqli_num_rows($result2);
                            
                            if ($resultcheck>0) {
                                $sold=1;
                            }
                            else{

                                $sold=0;
                            }

                            #sales table
                            $sql4 = "SELECT * FROM reservation where p_id='$id';";
                            $result4=mysqli_query($conn,$sql4);
                            $resultcheck2 = mysqli_num_rows($result4);
                            if ($resultcheck2>0) {
                                $reserved=1;
                            }
                            else{
                                $reserved=0;
                            }

                            if ($reserved==0 && $sold==0) {
                                $available=1;
                            }

                            #agent
                            $sql3 = "SELECT * FROM users where u_id='$agentid';";
                            $result3 = mysqli_query($conn, $sql3);
                            $row3 = mysqli_fetch_assoc($result3);

                            $agent=$row3['fullname'];

                            ?>
                            <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $name; ?></td>
                            <td><?php echo $type; ?></td>
                            <td><?php echo $agent; ?></td>
                            <td><?php echo $city; ?></td>
                            <td><?php echo $road; ?></td>
                            <td><?php echo $bldg; ?></td>
                            <td><?php echo $income; ?></td>
                            <td><?php echo $price; ?> BD</td>

                            <?php
                                if ($reserved==1) {
                                    echo "<td style='background-color:tomato;'>Reserved</td>";
                                }
                                elseif ($sold==1) {
                                    echo "<td style='background-color:orange;'>Sold</td>";
                                }
                                else{
                                    echo "<td style='background-color:green;'>Available</td>";
                                }
                             ?>
                         </tr>

                      <?php  }

                    ?>
                    
                   
                </table>
                <input type="submit" name="cancel" value="Cancel" style="margin-top: 10px;"><input type="submit" name="print" Value="Print" style="margin-top: 10px;margin-left: 7px;">
            </form>
           <?php }
            else{

            }
            ?>
            
        </div>
        
    </body>
</html>