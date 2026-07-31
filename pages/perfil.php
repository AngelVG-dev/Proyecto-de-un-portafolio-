<?php
// 1. VERIFICAR SESIÓN DE ADMINISTRADOR
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$esAdmin = isset($_SESSION['admin_id']);
?>
<style>
/* Estilo para los textos editables al pasar el mouse */
[contenteditable="true"]:hover { background: rgba(255,255,255,0.05); cursor: text; border-radius: 4px; }
</style>

<div class="anim-deslizar" style="padding-bottom: 4rem; display: flex; flex-wrap: wrap; gap: 4rem; align-items: flex-start;">
    
    <!-- Columna Izquierda: Biografía (EDITABLE PARA EL ADMINISTRADOR) -->
    <div style="flex: 1; min-width: 300px;">
        
        <h2 <?php if($esAdmin) echo 'contenteditable="true" data-tabla="perfil" data-columna="titulo" data-id="1" style="border-bottom: 2px dashed rgba(255,255,255,0.2); outline: none; transition: 0.3s;"'; ?> style="font-size: 2.8rem; margin-bottom: 1.5rem; letter-spacing: 1px;">
            SOBRE MÍ
        </h2>
        
        <p <?php if($esAdmin) echo 'contenteditable="true" data-tabla="perfil" data-columna="parrafo_1" data-id="1" style="border-bottom: 1px dashed rgba(255,255,255,0.2); outline: none; transition: 0.3s;"'; ?> style="font-size: 1.1rem; line-height: 1.8; text-align: justify; color: var(--texto-principal); font-weight: 300; margin-bottom: 1.5rem;">
            Soy estudiante de <strong style="color: var(--acento); font-weight: 600;">Diseño Industrial</strong> cursando el 8º semestre, apasionado por el desarrollo de productos, el modelado 3D y la identidad visual.
        </p>
        
        <p <?php if($esAdmin) echo 'contenteditable="true" data-tabla="perfil" data-columna="parrafo_2" data-id="1" style="border-bottom: 1px dashed rgba(255,255,255,0.2); outline: none; transition: 0.3s;"'; ?> style="font-size: 1.1rem; line-height: 1.8; text-align: justify; color: var(--texto-secundario); font-weight: 300; margin-bottom: 1.5rem;">
            Tengo experiencia sólida en logística y coordinación de eventos deportivos de gran escala. He colaborado con "AS Deporte" en eventos internacionales como el <strong>Triatlón Panamericano</strong> y el <strong>Ironman</strong>, lo que me ha forjado habilidades cruciales de organización, trabajo bajo presión, liderazgo de equipos y resolución rápida de problemas.
        </p>
        
        <p <?php if($esAdmin) echo 'contenteditable="true" data-tabla="perfil" data-columna="parrafo_3" data-id="1" style="border-bottom: 1px dashed rgba(255,255,255,0.2); outline: none; transition: 0.3s;"'; ?> style="font-size: 1.1rem; line-height: 1.8; text-align: justify; color: var(--texto-secundario); font-weight: 300;">
            Destaco por mi creatividad estructurada, mi alto sentido de la responsabilidad y mi capacidad de autoaprendizaje constante para dominar nuevas metodologías de diseño.
        </p>

    </div>

    <!-- Columna Derecha: Habilidades con Logotipos (INTOCABLE - SOLO LECTURA) -->
    <div style="flex: 1; min-width: 300px;">
        <h3 style="font-size: 1.5rem; margin-bottom: 2rem; letter-spacing: 1px; text-transform: uppercase; border-bottom: 1px solid var(--borde); padding-bottom: 1rem;">
            Software y Herramientas
        </h3>
        
        <!-- Cuadrícula de Logos -->
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(130px, 1fr)); gap: 15px; margin-bottom: 3rem;">
            
            <style>
                .tarjeta-software {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    padding: 15px 10px;
                    background-color: var(--fondo-tarjetas);
                    border: 1px solid var(--borde);
                    border-radius: 12px;
                    transition: transform 0.3s ease, border-color 0.3s ease;
                    text-align: center;
                    gap: 10px;
                }
                .tarjeta-software:hover {
                    transform: translateY(-5px);
                    border-color: var(--texto-secundario);
                }
                .icono-software {
                    width: 35px;
                    height: 35px;
                    /* La etiqueta filter adapta los logos al tema claro/oscuro automáticamente */
                    filter: invert(var(--icono-invert, 0.8)); 
                }
                /* Ajuste para el modo claro */
                @media (prefers-color-scheme: light) {
                    .tarjeta-software {
                        --icono-invert: 0.2; 
                    }
                }
                .nombre-software {
                    font-size: 0.85rem;
                    color: var(--texto-principal);
                    font-weight: 500;
                    letter-spacing: 0.5px;
                }
            </style>

            <div class="tarjeta-software">
                <img src="https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/adobephotoshop.svg" alt="Photoshop" class="icono-software">
                <span class="nombre-software">Photoshop</span>
            </div>
            
            <div class="tarjeta-software">
                <img src="https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/adobeillustrator.svg" alt="Illustrator" class="icono-software">
                <span class="nombre-software">Illustrator</span>
            </div>
            
            <div class="tarjeta-software">
                <img src="https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/autocad.svg" alt="AutoCAD" class="icono-software">
                <span class="nombre-software">AutoCAD</span>
            </div>
            
            <div class="tarjeta-software">
                <img src="https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/sketchup.svg" alt="SketchUp" class="icono-software">
                <span class="nombre-software">SketchUp</span>
            </div>
            
            <div class="tarjeta-software">
                <svg style="width: 35px; height: 35px; fill: var(--texto-principal); transition: transform 0.3s ease;" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                </svg>
                <span class="nombre-software">Procreate</span>
            </div>
            
            <div class="tarjeta-software">
                <img src="https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/dassaultsystemes.svg" alt="SolidWorks" class="icono-software">
                <span class="nombre-software">SolidWorks</span>
            </div>
            
            <div class="tarjeta-software">
                <img src="https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/blender.svg" alt="Render 3D" class="icono-software">
                <span class="nombre-software">Renderizado</span>
            </div>
            
            <div class="tarjeta-software">
                <img src="https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/microsoft.svg" alt="Office" class="icono-software">
                <span class="nombre-software">Office</span>
            </div>

        </div>

        <h3 style="font-size: 1.5rem; margin-bottom: 1.5rem; letter-spacing: 1px; text-transform: uppercase; border-bottom: 1px solid var(--borde); padding-bottom: 1rem;">
            Idiomas
        </h3>
        <div style="display: flex; align-items: center; gap: 15px;">
            <div style="width: 45px; height: 45px; border-radius: 50%; background: var(--fondo-tarjetas); border: 1px solid var(--borde); display: flex; justify-content: center; align-items: center; font-size: 1.2rem;">
                🇺🇸
            </div>
            <div>
                <h4 style="color: var(--texto-principal); font-size: 1.1rem; margin-bottom: 2px;">Inglés</h4>
                <p style="color: var(--texto-secundario); font-size: 0.9rem;">Nivel B1 (Intermedio)</p>
            </div>
        </div>
    </div>

</div>