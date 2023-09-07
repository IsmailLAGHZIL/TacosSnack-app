<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
        
        <title> Resturation </title>
    </head>
<body>
<script type="text/javascript">
        window.addEventListener('scroll', function(){
            const header =document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 0 );
        });
   
        function toggleMenu(){
            const tmenuToggle = document.querySelector('.menuToggle');
            const navbar = document.querySelector('.navbar');
            navbar.classList.toggle('active');
            menuToggle.classList.toggle('active');
        }
    </script>
</body>
</html>