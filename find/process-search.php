<?php
    //bấm button search chưa
    if(isset($_REQUEST['find'])){
        //gắn hàm chống sql injection
        $search = addslashes($_GET['seacrh'])
        //Nếu rỗng thì báo chưa nhập
        if(empty($search)){
            echo "yêu cầu nhập vào ô trống";
        }       
        else{
            //dùng lệnk LIKE để tìm thông tin
            $query ="SELECT * FROM tbl_post WHERE username LIKE '%$search%'";
            //ket noi sql
            include ("account/dbConfig.php")
            //Đếm số đong trả về trong sql
            $num =mysqli_num_row($sql);
            //nếu có kết quả thì hiển thị ko thì thông báo
            if ($num > 0 && $search !=""){
                echo"$num ket qua tra ve <b>$search</b>";
                //vòng lặp while &mysql_fetch_assoc dùng để lấy dữ liệu
                echo'<table border="1" cellspacing="0" cellpadding="0">';
                while($row = mysqli_fetch_assoc($sql)){
                    echo '<tr>';
                        echo "<td> {$row['images']}</td>";
                        echo "<td> {$row['created']}</td>";
                        echo "<td> {$row['content']}</td>";
                        echo "<td> {$row['images']}</td>";
                    echo'</tr>';
                }
                echo '</table>';
            }
            else{
                echo"Không tìm thấy kết quả";
            }
        }
    }

?>