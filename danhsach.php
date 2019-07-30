<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>DanhSachKhachHang</title>
</head>
<style>
    table{
        border-collapse: collapse;
        width:100%;
    }
    th,td{
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #CCCCCC;
    }
</style>
<body>
<table border="0">
    <caption><h1>Danh Sach Khach Hang</h1></caption>
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>BirthDay</td>
        <td>Adress</td>
        <td>Image</td>
    </tr>
    <?php
    $customerlist=array(
        "1" =>array("ten"=>"Mai Van Hoan",
            "ngaysinh"=>"1983-20-12",
            "diachi"=>"HaNoi",
            "anh"=>"images/anhnen.png"),
        "2"=>array("ten"=>"Nguyen Van Nam",
            "ngaysinh"=>"1991-10-12",
            "diachi"=>"Ha Nam",
            "anh"=>"images/anhnen.png")
    );
    ?>
    <?php
    foreach ($customerlist as $key=>$value){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$value['ten']."</td>";
        echo "<td>".$value['ngaysinh']."</td>";
        echo "<td>".$value['diachi']."</td>";
        echo "<td><image src ='".$value['anh']."' width = '60px' height ='60px'/></td>";
        echo "</tr>";
    }
    ?>
</table>


</body>
</html>