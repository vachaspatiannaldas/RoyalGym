<?php
            
                $id=$_GET['id'];
                $con=mysqli_connect("localhost","root","","gym");
                $sql12="delete from payment where id=$id";
                if(mysqli_query($con,$sql12))
                {
                    header ("location:pay_dis.php");
                }
                else
                echo "error".$con;
?>