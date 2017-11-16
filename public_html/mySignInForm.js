function checkSubmit(){
    var student_id = $('.student_id');
    var password = $('.password');

    if(student_id.val() == ''){
        alert('아이디를 입력해 주세요.');
        return false;
    }
    if(password.val() == ''){
        alert('비밀번호를 입력해 주세요.');
        return false;
    }
    return true;

}
