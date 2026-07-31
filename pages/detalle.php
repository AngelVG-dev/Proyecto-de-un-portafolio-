<?php
$id_proyecto = isset($_GET['id']) ? (int)$_GET['id'] : 1;

$proyectos = [
    1 => [
        "titulo" => "Robot Limpiador: Ingeniería y Ergonomía",
        "descripcion" => "Proyecto de diseño industrial enfocado en la automatización del hogar. El desarrollo destaca por su ingeniería interna, incluyendo análisis de componentes electrónicos, ergonomía de usuario y un ciclo de uso optimizado. La documentación técnica incluye planos de detalle y vistas de ensamble.",
        "imagenes" => [
            "uploads/imgs/imagenes limpiador/PERSPECTIVA AMBIENTADA.png",
            "uploads/imgs/imagenes limpiador/FRONTAL.png",
            "uploads/imgs/imagenes limpiador/SUPERIOR.png",
            "uploads/imgs/imagenes limpiador/LATERAL.png",
            "uploads/imgs/imagenes limpiador/COCINA.jpg",
            "uploads/imgs/imagenes limpiador/Imagen Shapr-2024-11-19 181427.png",
            "uploads/imgs/imagenes limpiador/Imagen Shapr-2024-11-19 181542.png",
            "uploads/imgs/imagenes limpiador/Imagen Shapr-2024-11-19 181556.png",
            "uploads/imgs/imagenes limpiador/Imagen Shapr-2024-11-19 181711.png",
            "uploads/imgs/imagenes limpiador/Imagen Shapr-2024-11-19 181818.png",
            "uploads/imgs/imagenes limpiador/Imagen Shapr-2024-11-19 231926.png",
            "uploads/imgs/imagenes limpiador/BOTON.png",
            "uploads/imgs/imagenes limpiador/ESPONJA.png",
            "uploads/imgs/imagenes limpiador/poniendo la tela.png",
            "uploads/imgs/imagenes limpiador/telita con fondo.png",
            "uploads/imgs/imagenes limpiador/telita limpiadora.png"
        ],
        "pdfs" => ["uploads/files/PLANOS LIMPIADOR.pdf"]
    ],
    2 => [
        "titulo" => "Ingeniería y Manufactura: Mobiliario Escolar",
        "descripcion" => "Proyecto enfocado en la ingeniería de producto y manufactura de mobiliario educativo. Demuestra un nivel de detalle excepcional que abarca desde la planimetría técnica hasta renders fotorrealistas con acercamientos micrométricos a las uniones por soldadura y tornillería de fijación. Destaca su diseño modular, pensado para crear configuraciones colaborativas en el aula, y un análisis exhaustivo de la interacción del usuario mediante infografías del ciclo de uso. El trabajo evidencia un dominio avanzado en modelado 3D y una visión integral que prioriza la ergonomía, la durabilidad estructural de los perfiles PTR y la viabilidad industrial.",
        "imagenes" => [
            "uploads/imgs/CAPTURAS MESA/BANCO Y MESA JUNTOS.png",
            "uploads/imgs/CAPTURAS MESA/FONDO CLARO.png",
            "uploads/imgs/CAPTURAS MESA/acomodo de bancos.png",
            "uploads/imgs/CAPTURAS MESA/MicrosoftTeams-image.png",
            "uploads/imgs/CAPTURAS MESA/TORNILLERIA.png",
            "uploads/imgs/CAPTURAS MESA/soldadura pupitre.png",
            "uploads/imgs/CAPTURAS MESA/reja banco.png"
        ],
        "pdfs" => ["uploads/files/PLANOS FINALES.pdf"]
    ],
    3 => [
        "titulo" => "Branding y Diseño Gráfico Estratégico",
        "descripcion" => "DISCLAIMER: Proyecto conceptual de diseño no oficial. Creado exclusivamente con fines de demostración académica y de portafolio. Sin fines de lucro ni afiliación comercial con las marcas mostradas. -- Creación de identidad visual corporativa profunda mediante manuales de marca para 'Alebrijes' y 'Flores Eternas'. Este portafolio gráfico demuestra capacidad analítica para traducir los valores de una marca en elementos visuales tangibles. Incluye la geometrización precisa de isotipos basada en retículas, delimitación de áreas de aislamiento, selección de colores Pantone y aplicación del diseño en mockups de indumentaria, empaques y papelería institucional.",
        "imagenes" => [
            "uploads/imgs/Manuales/1.png",
            "uploads/imgs/Manuales/2.png",
            "uploads/imgs/Manuales/3.png" 
        ],
        "pdfs" => [
            "uploads/files/MANUAL DE IDENTIDAD ALEBRIJES MONTERREY.pdf",
            "uploads/files/Manual de Identidad Visual – El Mejor Equipo, Flores Eternas.pdf"
        ]
    ],
    4 => [
        "titulo" => "Escenografía y Arquitectura Efímera: Bebidas x Dulces",
        "descripcion" => "Proyecto conceptual de diseño. Conceptualización, diseño espacial y visualización inmersiva para un evento temático de bebidas y dulces. Este proyecto de urbanismo efímero abarca la zonificación estratégica de un recinto a gran escala, resolviendo la logística de áreas clave: escenarios principales con estructuras truss, zonas VIP en niveles elevados, carpas de sonido, flujos peatonales y áreas de servicios. A través de renders fotorrealistas, se demuestra la capacidad para fusionar el diseño industrial con el marketing experiencial.",
        "imagenes" => [
            "uploads/imgs/ELEMENTOS GRAFICOS/render 1.png",
            "uploads/imgs/ELEMENTOS GRAFICOS/render 2.png",
            "uploads/imgs/ELEMENTOS GRAFICOS/render 3.png",
            "uploads/imgs/ELEMENTOS GRAFICOS/render 4.png",
            "uploads/imgs/ELEMENTOS GRAFICOS/render 5.png",
            "uploads/imgs/ELEMENTOS GRAFICOS/render 6.png",
            "uploads/imgs/ELEMENTOS GRAFICOS/1.png",
            "uploads/imgs/ELEMENTOS GRAFICOS/2.png",
            "uploads/imgs/ELEMENTOS GRAFICOS/3.png",
            "uploads/imgs/ELEMENTOS GRAFICOS/4.png",
            "uploads/imgs/ELEMENTOS GRAFICOS/5.png",
            "uploads/imgs/ELEMENTOS GRAFICOS/6.png",
            "uploads/imgs/ELEMENTOS GRAFICOS/7.png",
            "uploads/imgs/ELEMENTOS GRAFICOS/Captura de pantalla 2026-04-19 151812.png",
            "uploads/imgs/ELEMENTOS GRAFICOS/Captura de pantalla 2026-05-27 020510.png",
            "uploads/imgs/ELEMENTOS GRAFICOS/Captura de pantalla 2026-05-27 020539.png",
            "uploads/imgs/ELEMENTOS GRAFICOS/Captura de pantalla 2026-05-28 202529.png",
            "uploads/imgs/ELEMENTOS GRAFICOS/Captura de pantalla 2026-05-28 202635.png",
            "uploads/imgs/ELEMENTOS GRAFICOS/Captura de pantalla 2026-05-28 202750.png",
            "uploads/imgs/ELEMENTOS GRAFICOS/Captura de pantalla 2026-05-28 203056.png"
        ],
        "pdfs" => ["uploads/files/ELEMENTOS GRAFICOS Y PLANOS DESCRIPTIVOS.pdf"]
    ],
    5 => [
        "titulo" => "Modelado Paramétrico y Prototipado Industrial",
        "descripcion" => "Sección dedicada al dominio de software CAD (SolidWorks) enfocado en la ingeniería de detalle. Este portafolio incluye el diseño técnico de moldes industriales, donde se analiza la partición y geometría para procesos de manufactura. Además, se integra el modelado paramétrico de piezas con patrones geométricos complejos y la exploración de formas orgánicas, demostrando versatilidad en el uso de herramientas 3D para la resolución de problemas técnicos, desde la estructura urbana (paradas de autobús) hasta objetos de uso cotidiano.",
        "imagenes" => [
            "uploads/imgs/modelados/PERSPECTIVA 1.png",
            "uploads/imgs/modelados/Captura de pantalla 2025-09-28 214539.png",
            "uploads/imgs/modelados/creación de moldes.png",
            "uploads/imgs/modelados/Captura de pantalla 2024-11-27 143841.png",
            "uploads/imgs/modelados/Captura de pantalla 2025-08-17 162224.png",
            "uploads/imgs/modelados/Captura de pantalla 2025-09-28 214335.png"
        ],
        "pdfs" => [] 
    ],
    6 => [
        "titulo" => "Urban Hub: Parada Inteligente",
        "descripcion" => "Propuesta de infraestructura urbana sostenible y segura. Este 'Urban Hub' destaca por su diseño modular con techumbres fotovoltaicas, iluminación LED de bajo consumo y la integración de sistemas de seguridad (botón de pánico) y paneles informativos digitales. El desarrollo técnico incluye una planimetría rigurosa con cotas, alzados, secciones y diagramas isométricos que definen la estructura metálica y la disposición de los módulos. Este proyecto refleja la capacidad de llevar un concepto arquitectónico desde la visualización creativa y el renderizado nocturno hasta la documentación técnica necesaria para su manufactura.",
        "imagenes" => [
            "uploads/imgs/Renders/perspectiva ambientada 1.png",
            "uploads/imgs/Renders/perspectiva ambientada 2.png",
            "uploads/imgs/Renders/perspectiva ambientada 3.png",
            "uploads/imgs/Renders/noche.png",
            "uploads/imgs/Renders/isometria.png",
            "uploads/imgs/Renders/FRONTAL.png",
            "uploads/imgs/Renders/LATERAL.png",
            "uploads/imgs/Renders/SUPERIOR.png",
            "uploads/imgs/Renders/perspectiva de atras.png",
            "uploads/imgs/Renders/perspectiva lateral.png",
            "uploads/imgs/Renders/pantalla.png",
            "uploads/imgs/Renders/foto de pantalla.png",
            "uploads/imgs/Renders/boton de panico.png",
            "uploads/imgs/Renders/png de boton de panico.png",
            "uploads/imgs/Renders/Planos Descriptivos.png"
        ],
        "pdfs" => [] 
    ],
    7 => [
        "titulo" => "Visualización 3D y Prototipado Conceptual",
        "descripcion" => "Un portafolio dinámico que refleja una total versatilidad y apertura hacia diversas ramas del diseño 3D. Esta sección demuestra la capacidad de conceptualizar productos comerciales robustos (como asadores industriales) respaldados por su respectiva planimetría de ensamble, garantizando su viabilidad técnica. A la par, se integran ejercicios de modelado abstracto y estudios avanzados de iluminación (diurna, nocturna y vistas explotadas) aplicados a galardones y análisis de texturas. Este compendio visual evidencia una gran destreza para adaptarse a cualquier requerimiento, llevando ideas abstractas o funcionales a la realidad digital con la más alta calidad fotorrealista.",
        "imagenes" => [
            "uploads/imgs/Renders/descriptivos/asador.png",
            "uploads/imgs/Renders/descriptivos/asador png.png",
            "uploads/imgs/Renders/descriptivos/Captura de pantalla 2024-11-27 070824.png",
            "uploads/imgs/Renders/descriptivos/PRESEA.png",
            "uploads/imgs/Renders/descriptivos/PRESEA NOCHE.png",
            "uploads/imgs/Renders/descriptivos/FINAL PRESEA.png",
            "uploads/imgs/Renders/descriptivos/PRESEA MOVIDA.png",
            "uploads/imgs/Renders/descriptivos/PANEL.png"
        ],
        "pdfs" => [] 
    ]
];

$proyectoActual = isset($proyectos[$id_proyecto]) ? $proyectos[$id_proyecto] : $proyectos[1];
?>

<div class="anim-deslizar" style="padding-bottom: 4rem; position: relative;">
    
    <button class="btn-nav" data-url="pages/trabajo.php" style="margin-bottom: 2rem; font-size: 1rem; color: var(--acento); cursor: pointer; background: none; border: none; padding: 0;">
        ← Volver a Proyectos
    </button>

    <h2 class="titulo-proyecto" style="font-size: 2.8rem; margin-bottom: 1rem; line-height: 1.2; transition: 0.3s;">
        <?php echo htmlspecialchars($proyectoActual['titulo']); ?>
    </h2>
    
    <p class="descripcion-proyecto" style="color: var(--texto-secundario); font-size: 1.1rem; margin-bottom: 3rem; max-width: 800px; line-height: 1.6; transition: 0.3s;">
        <?php echo htmlspecialchars($proyectoActual['descripcion']); ?>
    </p>

    <h3 style="margin-bottom: 1.5rem; letter-spacing: 2px; font-weight: 600; font-size: 0.9rem; text-transform: uppercase; color: var(--texto-secundario);">Galería Visual</h3>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-bottom: 4rem;">
        
        <?php if (count($proyectoActual['imagenes']) > 0): ?>
            <?php foreach($proyectoActual['imagenes'] as $img): ?>
                <div style="position: relative; border-radius: 8px; overflow: hidden; border: 1px solid var(--borde); background: var(--fondo-tarjetas); box-shadow: 0 4px 15px var(--sombra); height: 280px;">
                    <img src="<?php echo htmlspecialchars($img); ?>" style="width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                    
                    <div style="position: absolute; bottom: 10px; right: 10px; background: rgba(0,0,0,0.7); color: rgba(255,255,255,0.7); padding: 5px 10px; font-size: 0.75rem; border-radius: 4px; z-index: 10; pointer-events: none; text-transform: uppercase; letter-spacing: 1px; font-weight: bold;">
                        Concepto No Comercial
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <?php if (count($proyectoActual['pdfs']) > 0): ?>
        <h3 style="margin-bottom: 1.5rem; letter-spacing: 2px; font-weight: 600; font-size: 0.9rem; text-transform: uppercase; color: var(--texto-secundario);">Documentos Técnicos</h3>
        <div style="display: flex; flex-direction: column; gap: 3rem;">
            <?php foreach($proyectoActual['pdfs'] as $pdf): 
                $urlPdf = str_replace(' ', '%20', $pdf);
            ?>
                <div>
                    <div style="width: 100%; border: 1px solid var(--borde); border-radius: 12px; overflow: hidden; background: #fff; box-shadow: 0 10px 30px var(--sombra); margin-bottom: 1rem;">
                        <iframe src="<?php echo htmlspecialchars($urlPdf); ?>#toolbar=0" width="100%" height="700px" style="border: none; display: block;"></iframe>
                    </div>
                    
                    <div style="text-align: right; display: flex; justify-content: flex-end; gap: 10px;">
                        <a href="<?php echo htmlspecialchars($urlPdf); ?>" download="<?php echo htmlspecialchars(basename($pdf)); ?>" class="btn-descarga" style="font-size: 0.85rem; padding: 10px 20px; background-color: var(--fondo-tarjetas); text-decoration: none; color: var(--texto-principal); border: 1px solid var(--borde); border-radius: 5px;">
                            Descargar Documento ↓
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>