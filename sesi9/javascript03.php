<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body style="background-color:#BAD7E9">
    
    <div id="artikel1">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia perferendis odit ea quam suscipit nam. Qui quos saepe officiis dolore, vitae voluptates neque necessitatibus quisquam labore laboriosam fugiat, delectus ratione.
    </div>

    <br>

    <div class="artikel2">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ex alias, earum dolorem placeat eligendi. Placeat veniam tempora autem obcaecati in quia hic, sunt a minima, eos iure, vel tempore.
    </div>

    <script>
        document.getElementById('artikel1').style.color = "#FCFFE7";
        const obj = document.getElementsByClassName('artikel2');
        obj[0].style.color = "#2B3467";
    </script>
</body>
</html>