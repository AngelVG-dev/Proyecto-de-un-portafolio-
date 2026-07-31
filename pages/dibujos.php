<?php
// 1. VERIFICAR SESIÓN DE ADMINISTRADOR
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$esAdmin = isset($_SESSION['admin_id']);

// Arreglo actualizado con TODAS las obras de arte digital, bocetos y logotipos de Daniel
$bocetos = [
    "12.jpeg" => [
        "titulo" => "Marca Personal - El Dany 23",
        "tecnica" => "Diseño de Logotipo / Vectorial"
    ],
    "9.jpeg" => [
        "titulo" => "Retrato Femenino",
        "tecnica" => "Ilustración Digital"
    ],
    "71.jpeg" => [
        "titulo" => "Retrato de Husky",
        "tecnica" => "Ilustración Digital / Estilo Cómic"
    ],
    "WhatsApp Image 2026-07-08 at 5.38.46 PM.jpeg" => [
        "titulo" => "Estudio de Ojo",
        "tecnica" => "Pintura Digital"
    ],
    "98.jpeg" => [
        "titulo" => "Mirada Oculta",
        "tecnica" => "Boceto a Lápiz Tradicional"
    ],
    "WhatsApp Image 2026-07-08 at 5.38.47 PM.jpeg" => [
        "titulo" => "Avatar - Expresión Indiferente",
        "tecnica" => "Diseño de Personajes"
    ],
    "54.jpeg" => [
        "titulo" => "Boceto de Proceso",
        "tecnica" => "Bocetaje a Tinta sobre papel"
    ],
    "3.jpeg" => [
        "titulo" => "Avatar - Personaje Principal",
        "tecnica" => "Ilustración Digital / Estilo Anime"
    ],
    "7.jpeg" => [
        "titulo" => "Avatar - Expresión de Risa",
        "tecnica" => "Diseño de Personajes"
    ],
    "5.jpeg" => [
        "titulo" => "Avatar - Expresión de Enojo",
        "tecnica" => "Diseño de Personajes"
    ],
    "6.jpeg" => [
        "titulo" => "Caprichi Snack & Bar",
        "tecnica" => "Diseño de Identidad y Logotipo"
    ],
    "2.jpeg" => [
        "titulo" => "Flores Eternas",
        "tecnica" => "Diseño de Logotipo"
    ],
    "4.jpeg" => [
        "titulo" => "Ilustración Botánica",
        "tecnica" => "Arte Digital"
    ],
    "1.jpeg" => [
        "titulo" => "Ilustración de Producto",
        "tecnica" => "Arte Digital"
    ]
];

$id_simulado = 1; // Esto simula el ID de la Base de Datos temporalmente
?>

<style>
/* Estilo para los textos editables al pasar el mouse */
[contenteditable="true"]:hover { background: rgba(255,255,255,0.05); cursor: text; border-radius: 4px; }
</style>

<div class="anim-enfoque" style="padding-bottom: 4rem;">
    
    <!-- ✏️ TÍTULOS EDITABLES EN VIVO -->
    <h2 <?php if($esAdmin) echo 'contenteditable="true" data-tabla="perfil" data-columna="titulo_dibujos" data-id="1" style="border-bottom: 2px dashed rgba(255,255,255,0.2); outline: none; transition: 0.3s;"'; ?> style="font-size: 2.8rem; margin-bottom: 0.5rem; letter-spacing: 1px;">
        IDEACIÓN & ILUSTRACIÓN
    </h2>
    
    <p <?php if($esAdmin) echo 'contenteditable="true" data-tabla="perfil" data-columna="subtitulo_dibujos" data-id="1" style="border-bottom: 1px dashed rgba(255,255,255,0.2); outline: none; transition: 0.3s;"'; ?> style="color: var(--texto-secundario); font-size: 1rem; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 3rem;">
        Bocetos tradicionales, arte digital y diseño de personajes
    </p>

    <div class="grid-galeria">
        <?php foreach($bocetos as $archivo => $datos): ?>
            <!-- La clase 'item-editable' ayuda al JavaScript a encontrar la tarjeta al borrar -->
            <article class="item-galeria item-editable" style="cursor: crosshair; position: relative;">
                
                <div style="background-color: #fff; display: flex; justify-content: center; align-items: center; border-bottom: 1px solid var(--borde); position: relative; overflow: hidden;">
                    
                <img src="uploads/imgs/DIBUJOS/<?php echo htmlspecialchars($archivo); ?>" 
                    alt="<?php echo htmlspecialchars($datos['titulo']); ?>" 
                    class="imagen-ampliable"
                    style="height: 320px; width: 100%; object-fit: cover; transition: transform 0.4s ease; cursor: zoom-in;" 
                    onmouseover="this.style.transform='scale(1.08)'" 
                    onmouseout="this.style.transform='scale(1)'">
                    
                    <!-- ⚠️ BOTONES DE EDICIÓN FLOTANTES (Solo Admin) -->
                    <?php if($esAdmin): ?>
                        <div style="position: absolute; top: 10px; right: 10px; z-index: 20; display: flex; gap: 5px;">
                            <button class="btn-reemplazar" data-id="<?php echo $id_simulado; ?>" data-tabla="dibujos" onclick="event.stopPropagation(); alert('Próximamente: Motor de subida de imágenes');" style="background: rgba(0,0,0,0.8); color: white; border: 1px solid #fff; padding: 6px 10px; border-radius: 5px; cursor: pointer; font-size: 0.8rem;" title="Reemplazar Imagen">✏️</button>
                            
                            <!-- Botón de Eliminar (Ya está conectado a tu script delete.php) -->
                            <button class="btn-eliminar" data-id="<?php echo $id_simulado; ?>" data-tabla="dibujos" onclick="event.stopPropagation();" style="background: rgba(255,74,74,0.9); color: white; border: 1px solid #fff; padding: 6px 10px; border-radius: 5px; cursor: pointer; font-size: 0.8rem;" title="Eliminar Obra">❌</button>
                        </div>
                    <?php endif; ?>

                </div>
                
                <div class="item-info" style="padding: 1.2rem; background: var(--fondo-tarjetas); z-index: 2; position: relative;">
                    <!-- Textos Editables de la Obra -->
                    <h3 <?php if($esAdmin) echo 'contenteditable="true" data-tabla="dibujos" data-columna="titulo" data-id="'.$id_simulado.'" style="border-bottom: 1px dashed rgba(255,255,255,0.2); outline: none;"'; ?> style="font-size: 1.15rem; color: var(--texto-principal); margin-bottom: 4px; font-weight: 600; transition: 0.3s;">
                        <?php echo htmlspecialchars($datos['titulo']); ?>
                    </h3>
                    
                    <p <?php if($esAdmin) echo 'contenteditable="true" data-tabla="dibujos" data-columna="tecnica" data-id="'.$id_simulado.'" style="border-bottom: 1px dashed rgba(255,255,255,0.2); outline: none;"'; ?> style="font-size: 0.85rem; color: var(--texto-secundario); text-transform: uppercase; letter-spacing: 1px; transition: 0.3s;">
                        <?php echo htmlspecialchars($datos['tecnica']); ?>
                    </p>
                </div>

                
            </article>
            <?php $id_simulado++; ?>
        <?php endforeach; ?>

        <!-- ⚠️ BOTÓN MAESTRO PARA AÑADIR NUEVO DIBUJO (Solo Admin) -->
        <?php if($esAdmin): ?>
            <article class="item-galeria" onclick="alert('Próximamente: Motor de subida de imágenes');" style="cursor: pointer; display: flex; flex-direction: column; align-items: center; justify-content: center; background: rgba(255,255,255,0.02); border: 2px dashed var(--exito); min-height: 400px; transition: 0.3s;" onmouseover="this.style.background='rgba(39, 201, 63, 0.05)'" onmouseout="this.style.background='rgba(255,255,255,0.02)'">
                <span style="font-size: 4rem; color: var(--exito); margin-bottom: 15px; font-weight: 300;">+</span>
                <h3 style="color: var(--texto-principal); font-size: 1.3rem; margin-bottom: 5px;">Añadir Obra</h3>
                <p style="color: var(--texto-secundario); font-size: 0.85rem;">Soporta JPG y PNG</p>
            </article>
        <?php endif; ?>


        <div id="modal-imagen" class="modal">
    <span class="cerrar-modal">&times;</span>
    <img class="modal-contenido" id="imagen-ampliada">
</div>

    </div>
</div>