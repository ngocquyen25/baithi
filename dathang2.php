<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='php2.css'>
    <script type="text/javascript" src="php1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
    
        <form method="post" action="muahang.php">
            <div class='content'>
                <div id='col_left'>
                        <h2>Maxxshop</h2>
                        <p id="font">Thông tin nhận hàng</p>
                </div>    
                <p id='đn'><i class='fa-solid fa-user'></i>Đăng nhập</p>
                <input type=text placeholder='Email' name='txtMail'><br>
                <input type=text placeholder='Họ và Tên' name='txtTen'><br>
                <input type=text placeholder='Số Điện thoại' name='txtĐt'><br>
                <input type=text placeholder='Ghi chú'>
            </div>
            <div class='content'>
                <div id='col_left'>
                    <h2 id='vc'>Vận Chuyển</h2> 
                </div>
                <div class='clear'></div>     
                <div id='infor'><p>Vui lòng nhập thông tin giao  hàng</p></div>
            </div>
            <div class='content'>
                    <h2  id="col_left">Đơn Hàng</h2> <input id="null" type="text" readonly> Sản phẩm
                <div class='clear'></div> 
                <?php   
                $name=$_POST["txtten"];
                $pri=$_POST["txtp"];
                echo "<p id='namesp'>Tên:<input id='name'type='text' value='$name'name='txtname' readonly></p>";
                echo "<p id='opri'>Giá:<input id='pri' type='text' value='$pri'name='txtP' readonly></p>";
                ?>
                <input id="sl" type="text" placeholder='Số Lượng' name='txtSL'>
                <input id="tt" type="button" value="Thành tiền"  onclick="thanhtien()" readonly><div class='clear'></div>
                <div class="sum">
                    <p id="sum">Tổng cộng</p>
                    <input id="null1" name='txtTT' type='text' readonly>
                </div>
                <div class='clear'></div>    
                <p id="back"><a href="/PHP/baithi/template.html">Quay về giỏ  hàng</a></p>
                <input id="tt" type="submit" value="Đặt hàng" onclick="muahang.php" onclick="dathang()">
            </div>  
        </form>
</body>
</html>