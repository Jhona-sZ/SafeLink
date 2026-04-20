<?php
    $mensaje = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data     = trim($_POST['data'] ?? '');
        $email    = trim($_POST['email'] ?? '');
        $password = trim($_POST['password'] ?? '');

        if (empty($data)) {
            $mensaje = 'El campo de información es obligatorio.';
        } else {
            header('Location: enlace.php');
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafeLink - Formulario</title>
    <link rel="shortcut icon" href="../assets/images/secut.ico" type="image/x-icon">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/form/formulario.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- FONT-POPPINS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- HEADER -->
    <header class="header">
        <div class="header__cont">
            <section class="shield">
                <i class="fa-solid fa-shield shield__icon"></i>
                <h1 class="header__title">SafeLink</h1>
            </section>
            <nav class="header__nav">
                <ul class="header__list">
                    <!-- HOME -->
                    <li class="header__item header-fondo">
                        <a href="../index.html" class="header__link"><i class="fa-solid fa-house header__icon"></i>Inicio</a>
                    </li>
                    <!-- SEARCH -->
                    <li class="header__item">
                        <a href="#" class="header__link"><i class="fa-solid fa-magnifying-glass header__icon"></i>Buscar</a>
                    </li>
                    <!-- CONTACT -->
                    <li class="header__item">
                        <a href="#" class="header__link"><i class="fa-solid fa-phone header__icon"></i>Contacto</a>
                    </li>
                    <!-- ACCOUNT -->
                    <li class="header__item">
                        <a href="#" class="header__link"><i class="fa-solid fa-user header__icon"></i>Cuenta</a>
                    </li>
                </ul>
            </nav>
            
            <button class="header__button"><a href="./formulario.php">Crear nuevo enlace</a></button>
            <!-- Hamburguesa -->
            <button id="menubtn" class="button-burger">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
        <nav id="mobilemenu" class="mobile-menu mobile-menu--hidden">
            <a href="./index.html" class="mobile-menu__link">Inicio</a>
            <a href="./formulario.php" class="mobile-menu__link">Crear Enlace</a>
            <a href="#" class="mobile-menu__link">Acerca de</a>
            <a href="#" class="mobile-menu__link">Contacto</a>
        </nav>
    </header>
    
    <!-- MAIN -->
    <main class="main-form">
        <section class="formulario">
            <h2 class="formulario__title">Crear Enlace</h2>
            <p class="formulario__description">Introduce tu información y configura las opciones de seguridad para tu enlace encriptado</p>

            <?php if ($mensaje): ?>
                <p class="formulario__info"><?php echo htmlspecialchars($mensaje); ?></p>
            <?php endif; ?>

            <form action="formulario.php" method="POST" class="formulario__form">
                <!-- TEXTAREA-INFO -->
                <textarea id="data" name="data" class="formulario__textarea" placeholder="Introduce aquí la información sensible..."></textarea>
                <!-- EMAIL -->
                <label for="email" class="formulario__label">Email:</label>
                <input type="email" id="email" name="email" class="formulario__input" placeholder="Introduce tu correo electrónico..." />

                <!-- CONTRASEÑA -->
                <label for="password" class="formulario__label">Contraseña (Opcional):</label>
                <input type="password" id="password" name="password" class="formulario__input" placeholder="Introduce tu contraseña..." />

                <button type="submit" class="create__button">Generar Enlace</button>
            </form>
            <p class="formulario__message">Tu información es encriptada de extremo a extremo y tu anonimato está garantizado. Nadie puede acceder a tu contenido.</p>
        </section>
    </main>
    
    <!-- FOOTER -->
    <footer class="footer">
        <!-- FOOTER-TOP -->
        <section class="footer-top">
            <article class="top__card top-mod">
                <div class="shield">
                    <i class="fa-solid fa-shield shield__icon"></i>
                    <h3 class="footer__title">SafeLink</h3>
                </div>
                <p class="top__text">SafeLink ofrece enlaces seguros y autodestructibles para compartir información sensible de forma anónima.</p>
            </article>
            <!-- PRODUCTO -->
            <article class="top__card">
                <h3 class="top__title">Producto</h3>
                <ul class="footer__list">
                    <li class="footer__item"><a class="footer__link" href="#">Crear Enlace</a></li>
                    <li class="footer__item"><a class="footer__link" href="#">Panel de Gestión</a></li>
                </ul>
            </article>
            <!-- ACERCA DE -->
            <article class="top__card">
                <h3 class="top__title">Acerca de</h3>
                <ul class="footer__list">
                    <li class="footer__item"><a class="footer__link" href="#">Sobre Nosotros</a></li>
                    <li class="footer__item"><a class="footer__link" href="#">Contacto</a></li>
                </ul>
            </article>
            <!-- LEGAL -->
            <article class="top__card">
                <h3 class="top__title">Legal</h3>
                <ul class="footer__list">
                    <li class="footer__item"><a class="footer__link" href="#">Política de Privacidad</a></li>
                    <li class="footer__item"><a class="footer__link" href="#">Términos de Servicio</a></li>
                </ul>
            </article>
        </section>

        <!-- FOOTER-BOTTOM -->
        <section class="footer-bottom">
            <p class="bottom__text">© 2026 SafeLink. Todos los derechos reservados.</p>
        </section>
    </footer>
    <script src="../js/script.js"></script>
</body>
</html>