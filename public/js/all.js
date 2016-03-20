/**
 * Created by Anonymous on 2016/3/11.
 */
function login() {
    $.ajax({
        url: 'check_login',
        type: 'post',
        data: {
            acc: $('#acc').val(),
            pass: $('#pass').val()
        },
        success: function(data) {
            if (data)
		location.href = "login";
	    else
		alert('帳密錯誤');
        }
    });

}
