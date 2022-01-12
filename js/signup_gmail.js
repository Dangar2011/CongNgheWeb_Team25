function abc(){
    var arr = document.getElementsByTagName('input');
    var name = arr[0].value;
    var email = arr[1].value;
    var password = arr[2].value;
    var location = arr[3].value;
    var check1 = arr[4].checked;
    // Kiểm tra nhập đầy đủ thông tin ở phần đăng ký bằng email
    if(name == "" || email == "" || password == "" || location == ""){
        alert('please fill all the fields');
        return;
    }
    // Kiểm tra xem bạn đã đủ 18 tuổi chưa
    if(check1){
        
    }
    else{
        alert('Not yet 18 years old');
        return;
    }
}
