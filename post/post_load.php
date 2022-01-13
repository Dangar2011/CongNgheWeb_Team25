<?php
    //b1 Import đoạn cấu hình bước 1
    require 'post_connect.php';
    $statusMsg = '';//tạo 1 biến để lưu lại trạng thái upload nhằm mục tiêu phản hồi lại cho người dùng
    //những động tác về thiết lập cho việc chuẩn bị upload
    $targetDir = "../photo/";//thư mục chỉ định nằm trong cùng project để lưu trữ tập tin tải lên
    $fileName = basename($_FILES["txtImage"]["name"]); //$_files là 1 biến siêu toàn cục lưu trữ toàn bộ phần tử file trên FORM

    $targetFilePath = $targetDir . $fileName;//Đây là tên đầy đủ+đường dẫn tệp tin sau khi hoàn thành
    //nó là giá trị cần truyền vào hàm movie_uploaded_file
    $title = $_POST['txtTitle'];
    $content = $_POST['txtContent'];
    $openday=$_POST['txtOpenday'];
    $address=$_POST['txtAddress'];
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);//bắt định dạng tệp tin

    //b2 kiểmtra xem người dùng đã nhấn submit chưa và file đã được chọn chưa
    if(isset($_POST["btn_Upload"]) && !empty($_FILES["txtImage"]["name"])){
    
        //check file tồn tại
        // if (file_exists($targetFilePath)) {
        //   $statusMsg= "Sorry, file already exists.";
        // }
        // else{
        
            // Khai báo biến mảng để lưu trữ định dạng mà bạn cho phép up lên
        $allowTypes = array('jpg','png','jpeg');// phương thức in_array kiểm tra 1 giá trị có thuộc mảng không
        //thì xử lý upload cái tệp tin đang lưu ở thư mục tạmC:\xampp\tmp_name\($_FILES["myFile"]["name"])
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            if(move_uploaded_file($_FILES["txtImage"]["tmp_name"], $targetFilePath)){//lấy từ nơi tạm vào nơi chính
                // lưu đường dẫn vào CSDL
                //$insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
                $sql="INSERT into posts ( title ,content,images,address,openday,created ) VALUES ('".$title."', '".$content."', '".$fileName."','".$address."','".$openday."', NOW())";
                $insert=mysqli_query($conn,$sql);
            
            if($insert){//kiểm tra việc query thành công
                    $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                    //header("location:show.php");
                    // echo "<pre>";
                    // echo print_r($_FILES['myFile']);
                    // echo "<pre>";
                    }else{
                    $statusMsg = "File upload failed, please try again.";
                
                    } 
                }else{
                $statusMsg = "Sorry, there was an error uploading your file.";
                }
            }else{
            $statusMsg = 'Sorry, only JPG, JPEG, PNG are allowed to upload.';
            }
        //}

    }else{
        $statusMsg = 'Please select a file to upload.';
    }
    // Display status message
//     <script type="text/javascript">
//   var alertMsg = '<?php echo $statusMsg;>';
//   alert(alertMsg);
// </script>
echo "$statusMsg";
    //header ("location:../events.php");
?>