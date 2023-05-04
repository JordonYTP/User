<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="jquery.maskedinput.js"></script>
</head>
<body>
    <form action="">
        <input type="tel" oninput="tel()" >
        <input type="submit">
    </form>

</body>
<script>
    function tel(){
        let number = document.querySelector('input[type="tel"]').value;
        number= number.replace(/[A-Za-zА-Яа-яЁё]/,'');
        if(number.length == 1){
            number = "+"+number
        }
        console.log(number.length)
    }
    $(function(){
        $("input[type='tel']").mask("8(999) 999-9999");
    }); 
</script>

</html>