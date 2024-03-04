<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id']; 
    $sql = "DELETE FROM tb_type_product WHERE id = '$id'";
                            
                            if(mysqli_query($connection, $sql)) {
                                $alert = '<script type = "text/javascript">';
                            $alert .= 'alert("ลบข้อมูลประเภทสินค้าสำเร็จ");';
                            
                            $alert .= 'window.location.href = "?page='.$_GET['page'].'";';
                            $alert .= '</script>';
                            echo $alert;
                                                        exit();
                                } else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
                                }

                                }

                            // Close the database connection
                            mysqli_close($connection);
                            ?>
