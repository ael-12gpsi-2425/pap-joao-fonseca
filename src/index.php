<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php include("header.php"); ?>
    </div>
    <div>
        <?php include("form_login.php"); ?>
    </div>
<!--
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuButton = document.querySelector('.lg\\:hidden button'); // Botão de abrir menu (mobile)
            const closeButton = document.querySelector('.lg\\:hidden [aria-modal="true"] button'); // Botão de fechar menu
            const menu = document.querySelector('.lg\\:hidden[role="dialog"]'); // Menu

            // Abrir o menu
            menuButton.addEventListener('click', () => {
                menu.classList.remove('hidden');
                menu.classList.add('block');
            });

            // Fechar o menu
            closeButton.addEventListener('click', () => {
                menu.classList.remove('block');
                menu.classList.add('hidden');
            });
        });
    </script>
-->
</body>

</html>