<?php
// 1. VERIFICAMOS SESIÓN DESDE LA LÍNEA 1
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// 2. CREAMOS LA VARIABLE $esAdmin PARA TODO EL PORTAFOLIO
$esAdmin = isset($_SESSION['admin_id']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ETIQUETA DE SEGURIDAD PARA BLOQUEAR A GOOGLE Y PROTEGER TU PORTAFOLIO -->
    <meta name="robots" content="noindex, nofollow">
    
    <title>Daniel Sánchez | Diseño Industrial</title>
    
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <script src="js/jquery.js"></script>
</head>
<body class="tema-oscuro">

    <?php
    // MAGIA PHP: Detectamos en qué página estamos
    $vistaActual = isset($_GET['vista']) ? $_GET['vista'] : 'pages/trabajo.php';
    ?>

    <button id="theme-toggle" class="btn-flotante-tema" aria-label="Cambiar Tema">
        <svg id="theme-toggle-light-icon" class="icono-tema" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4.22 3.22a1 1 0 011.415 0l.708.708a1 1 0 01-1.414 1.414l-.708-.708a1 1 0 010-1.414zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM14.22 15.78a1 1 0 010 1.415l-.708.708a1 1 0 01-1.414-1.414l.708-.708a1 1 0 011.414 0zM10 16a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zm-4.22-1.22a1 1 0 010-1.415l-.708-.708a1 1 0 01-1.414 1.414l.708.708a1 1 0 011.414 0zM4 10a1 1 0 01-1 1H2a1 1 0 110-2h1a1 1 0 011 1zM5.78 6.636a1 1 0 010-1.415l-.708-.708a1 1 0 01-1.414 1.414l.708.708a1 1 0 011.414 0zM10 5a5 5 0 100 10 5 5 0 000-10z"></path>
        </svg>
        <svg id="theme-toggle-dark-icon" class="icono-tema oculto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
        </svg>
    </button>

    <aside class="panel-lateral">
        <div class="cabecera-lateral">
            <div>
                <h1>DANIEL<br>SÁNCHEZ</h1>
                <p>Diseñador Industrial</p>
            </div>
            
            <button class="menu-hamburguesa" id="btn-menu" aria-label="Abrir menú">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

        <div class="contenedor-inferior-lateral" style="margin-top: auto; display: flex; flex-direction: column; gap: 2.5rem;">
            <nav class="navegacion-principal" id="nav-menu">
                <button class="btn-nav <?php echo ($vistaActual === 'pages/trabajo.php' || strpos($vistaActual, 'detalle.php') !== false) ? 'activo' : ''; ?>" data-url="trabajo">
                    <span class="linea-indicadora"></span> Trabajo
                </button>
                
                <button class="btn-nav <?php echo ($vistaActual === 'pages/perfil.php') ? 'activo' : ''; ?>" data-url="perfil">
                    <span class="linea-indicadora"></span> Perfil
                </button>
                
                <button class="btn-nav <?php echo ($vistaActual === 'pages/dibujos.php') ? 'activo' : ''; ?>" data-url="dibujos">
                    <span class="linea-indicadora"></span> Dibujos
                </button>
                
                <button class="btn-nav <?php echo ($vistaActual === 'pages/contacto.php') ? 'activo' : ''; ?>" data-url="contacto">
                    <span class="linea-indicadora"></span> Contacto
                </button>
                
                <a href="uploads/files/curriculum%202026.pdf" download="CV_Daniel_Sanchez.pdf" class="btn-descarga">Descargar CV ↓</a>
            </nav>
        </div>
    </aside>

    <main class="panel-contenido" style="display: flex; flex-direction: column; min-height: 100vh;">
        <div id="contenedor-dinamico" style="flex: 1;">
            <div style="text-align: center; color: var(--texto-secundario); padding-top: 5rem;">
                Cargando interfaz...
            </div>
        </div>
        
        <!-- FOOTER GLOBAL DE PROTECCIÓN LEGAL PARA TODO EL PORTAFOLIO -->
        <footer style="margin-top: 4rem; padding: 2rem; text-align: center; border-top: 1px dashed rgba(255,255,255,0.1); color: var(--texto-secundario); font-size: 0.75rem; line-height: 1.6; opacity: 0.7;">
            <p style="margin-bottom: 0.5rem;"><strong style="color: var(--texto-principal);">Aviso Legal y de Propiedad Intelectual:</strong></p>
            <p>
                Este es un portafolio estrictamente académico y profesional creado para la demostración de habilidades en diseño industrial, modelado 3D y visualización arquitectónica. Todos los proyectos de branding, escenografía e identidad visual mostrados en este sitio web (incluyendo conceptos que hacen referencia a marcas como <strong>BuzzBallz, Skittles, Alebrijes, Flores Eternas</strong>, entre otras) son ejercicios conceptuales no oficiales. <strong>No existe ninguna afiliación, patrocinio, vínculo comercial ni intención de lucro con dichas marcas registradas.</strong>
            </p>
        </footer>
    </main>

    <script src="js/app.js?v=<?php echo time(); ?>"></script>
</body>
</html>