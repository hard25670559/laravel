@extends('heard')

@section('script')
    <script>
        var sex = 1;

        function sex_check(e) {
            alert(e.id);
            switch (e.id) {
                case 'boy':
                        sex = 1;
                    break;
                case 'girl':
                        sex = 0;
                    break;
            }
        }

        function register() {
            if (check()) {
                $.ajax({
                    url: 'login_register',
                    type: 'post',
                    data: {
                        name: $('#name').val(),
                        acc: $('#acc').val(),
                        pass: $('#pass').val(),
                        email: $('#email').val(),
                        sex: sex
                    },
                    success: function(data) {
                        if (data)
                            document.location.href='/';
                        else
                            alert('帳號已註冊過');
                    }
                });
            }
        }

        function check() {
            var check = true;

            var add = function(witch) {
                $(witch).remove('欄位請勿為空');
                $(witch + '_div').append('欄位請勿為空');
            };

            var comparison = function(witch) {
                return ($(witch).val() == '');
            };

            var allotype = function(witch) {
                if (comparison(witch)) {
                    add(witch);
                    check = false;
                }
            }

            allotype('#name');
            allotype('#acc');
            allotype('#pass');
            allotype('#pass_check');
            allotype('#email');

            if ($('#pass').val() != $('#pass_check').val()) {
                $('#pass_check').remove('密碼確認不正確');
                $('#pass_check').remove('欄位請勿為空');
                $('#pass_check_div').append('密碼確認不正確');
                check = false;
            }

            return check;
        }
    </script>
@endsection

@section('content')
    <div>
        <div id="name_div">
            <label>名稱</label>
            <input type="text" id="name" name="name">
        </div>
        <div id="acc_div">
            <label>帳號</label>
            <input type="text" id="acc" name="acc">
        </div>
        <div id="pass_div">
            <label>密碼</label>
            <input type="password" id="pass" name="pass">
        </div>
        <div id="pass_check_div">
            <label>密碼確認</label>
            <input type="password" id="pass_check" name="pass_check">
        </div>
        <div id="email_div">
            <label>信箱</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label>性別</label>
            <input type="radio" id="boy" name="sex" value="1" checked="true" onclick="sex_check(this)">男
            <input type="radio" id="girl" name="sex" value="0" onclick="sex_check(this)">女
        </div>
        <div>
            <input type="button" value="確定註冊" onclick="register()">
            <input type="button" value="取消" onclick="location.href='/'">
        </div>
    </div>
@endsection