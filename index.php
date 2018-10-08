<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Категории</title>
</head>
<body>

<?php //require_once "rest_service.php";?>
<?php
//$response = json_decode(numbers(20), true); // преобразование строки в формате json в ассоциативный массив
// // ваш искомый id?>
<!---->
<?php //print_r($response);?>



<p class="result"</p>


<form method="post" action="rest_service.php">
    <table>
        <tr>
        </tr>

            <td>Название:</td>

            <td><input type="text" name="name" value="" size='30' /></td>

            <td><input type="submit" name="submit" value="Россчитать" /></td>

            <td><input type="reset" name="earse" value="Сброс" /></td>

        </tr>
    </table>
</form>
<br/>
</body>
</html>

<script>
    $(document).ready(function() {
        $(document).on('click','input[name=submit]',function (e) {
            e.preventDefault();
            var name = $("input[name=name]").val();
            $.ajax({
                url: "/ajax.php?func=numbers",
                method: "POST",
                data: {name:name},
                success: function (data) {
                    var result = $.parseJSON(data);
                    var html = "";
                    $.each(result,function (key,val) {
                        html = html + val;
                    });
                    $(".result").html(html);
                }
            })
        })
    });
</script>