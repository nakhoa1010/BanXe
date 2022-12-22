<?php
require_once ('../db/dbhelper.php');

?>

<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> MOWO - MOTO WORLD </title>
        <link href="../CSS/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../JS/scripts.js"></script>
        
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">CHI TIẾT ĐƠN HÀNG</h3></div>
                                    <div class="card-body">
                                        <form method="post" onsubmit="return dathang()">
                                            <div class="form-row">
                                               <div class="col-md-6">
                                                    
                                                    <img src = 'thanks.png' width = 80%% height = 70%/>
                                               </div>
                                               <div class="col-md-6">
                                                    <div class="form-group">
                                                    <?php
                                                    $sql = "SELECT * FROM donhang order by id desc limit 1  ";   
                                                    $categoryList = executeResult($sql);
                                                    foreach ($categoryList as $item){
                                                    //$tensp = $_GET['tensp'];
                                                    echo '<h6>Khách hàng:&emsp;&nbsp; </h6>';
                                                    echo '<h2 style="color: firebrick;">  '.$item['tenkh'].' </h2> <br>';
                                                    echo '<h6>Sản phẩm đặt mua:&emsp;&nbsp;</h6>';
                                                    echo '<h2 style="color: firebrick;">  '.$item['tensp'].' </h2> <br>'; 
                                                    echo '<h6>Số lượng đặt: &emsp;  '.$item['soluongdat'].' </h6>'; 
                                                    echo '<h6>Tổng tiền:&emsp;&nbsp; '.$item['tongtien'].'$ </h6>'; 
                                                    echo "Ngày đặt hàng: " . date("d/m/Y") . "<br>";                                                 
                                                    }
                                                    ?> 
                                                    </div>
                                               </div>
                                               <div>
                                                    <h5 class="text-center font-weight-light my-4"> MOWO - MOTO WORLD xin chân thành cảm ơn Quý khách!</h5>

                                               </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; MOWO - MOTO WORLD 2020</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>       
    </body>
</html>
