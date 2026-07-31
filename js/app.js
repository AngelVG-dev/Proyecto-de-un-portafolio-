$(document).ready(function() {
    
    // ==========================================================
    // 0. FUNCIÓN PARA SINCRONIZAR EL MENÚ
    // ==========================================================
    function sincronizarMenu(rutaLimpia) {
        $('.btn-nav').removeClass('activo');
        // Si no es la vista de detalle, marcamos el botón correspondiente
        if (rutaLimpia && !rutaLimpia.includes('detalle')) {
            $('.btn-nav[data-url="' + rutaLimpia + '"]').addClass('activo');
        } else {
            $('.btn-nav[data-url="trabajo"]').addClass('activo');
        }
    }

    // ==========================================================
    // 1. CONFIGURACIÓN INICIAL
    // ==========================================================
    const contenedorDinamico = $('#contenedor-dinamico');
    if (contenedorDinamico.length > 0) {
        // Detectamos la ruta actual desde el navegador (ej. "/trabajo")
        let path = window.location.pathname;
        let rutaLimpia = path.substring(path.lastIndexOf('/') + 1);
        
        // Si trae parámetros extras como el id del proyecto (?id=1)
        if (window.location.search && !window.location.search.includes('vista=')) {
            rutaLimpia += window.location.search;
        }

        // Si la ruta está vacía (entró a la raíz de la web), asignamos 'trabajo'
        if (!rutaLimpia || rutaLimpia === 'index.php') {
            rutaLimpia = 'trabajo';
        }

        // Si por alguna razón entró con el enlace viejo (?vista=...), lo limpiamos
        const urlParams = new URLSearchParams(window.location.search);
        const vistaGuardada = urlParams.get('vista');
        if (vistaGuardada) {
            rutaLimpia = vistaGuardada.replace('pages/', '').replace('.php', '');
        }

        sincronizarMenu(rutaLimpia);
        // Actualizamos la URL visualmente sin recargar
        history.replaceState({ path: rutaLimpia }, "", rutaLimpia);
        cargarVista(rutaLimpia, false);
    }

    // ==========================================================
    // 2. FUNCIÓN MAESTRA DE CARGA
    // ==========================================================
    function cargarVista(ruta, guardarEnHistorial = true) {
        // Armamos la ruta real para que el AJAX (.load) encuentre el archivo .php
        let urlArchivo = "";
        if (ruta.includes('detalle')) {
            // Si es detalle?id=1 -> pages/detalle.php?id=1
            let partes = ruta.split('?');
            urlArchivo = 'pages/' + partes[0] + '.php?' + partes[1];
        } else {
            // Si es trabajo -> pages/trabajo.php
            urlArchivo = 'pages/' + ruta + '.php';
        }

        contenedorDinamico.fadeOut(250, function() {
            $(this).load(urlArchivo, function(response, status, xhr) {
                if (status === "error") {
                    $(this).html(`<div style="padding: 2rem; text-align: center; color: var(--error);">Error de carga.</div>`);
                }
                $(this).fadeIn(250);
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        });

        // Escribimos la URL súper limpia en la barra de direcciones del navegador
        if (guardarEnHistorial) {
            history.pushState({ path: ruta }, "", ruta);
        }
    }

    // ==========================================================
    // 3 y 4. NAVEGACIÓN
    // ==========================================================
    $(document).on('click', '.btn-nav', function(e) {
        e.preventDefault();
        // urlDestino ahora lee rutas limpias (ej. "trabajo") desde data-url
        let urlDestino = $(this).data('url'); 
        if (!urlDestino) return;
        
        sincronizarMenu(urlDestino);
        
        if ($(window).width() <= 900 && $('#nav-menu').is(':visible')) {
            $('#nav-menu').slideUp(300);
        }
        cargarVista(urlDestino, true); 
    });

    $(document).on('click', '.btn-detalle', function(e) {
        e.preventDefault();
        let idProyecto = $(this).data('id');
        let urlDestino = 'detalle?id=' + idProyecto; // URL limpia para detalles
        
        sincronizarMenu(urlDestino); 
        cargarVista(urlDestino, true); 
    });

    // ==========================================================
    // 5 y 6. HISTORIAL Y MENÚ MÓVIL
    // ==========================================================
    window.addEventListener('popstate', function(e) {
        if (e.state && e.state.path) {
            sincronizarMenu(e.state.path);
            cargarVista(e.state.path, false); 
        } else {
            sincronizarMenu('trabajo');
            cargarVista('trabajo', false);
        }
    });

    $('#btn-menu').on('click', function() { $('#nav-menu').slideToggle(300); });
    $(window).resize(function() {
        if ($(window).width() > 900) { $('#nav-menu').show(); } 
        else { if (!$('#nav-menu').is(':visible')) { $('#nav-menu').hide(); } }
    });

    // ==========================================================
    // 8. LÓGICA DEL TEMA OSCURO/CLARO
    // ==========================================================
    const themeToggleBtn = $('#theme-toggle');
    const darkIcon = $('#theme-toggle-dark-icon');
    const lightIcon = $('#theme-toggle-light-icon');
    const temaGuardado = localStorage.getItem('tema');

    if (temaGuardado === 'claro') {
        $('body').addClass('tema-claro').removeClass('tema-oscuro');
        lightIcon.addClass('oculto');
        darkIcon.removeClass('oculto');
    }

    themeToggleBtn.on('click', function() {
        $('body').toggleClass('tema-claro tema-oscuro');
        if ($('body').hasClass('tema-claro')) {
            localStorage.setItem('tema', 'claro');
            lightIcon.addClass('oculto');
            darkIcon.removeClass('oculto');
        } else {
            localStorage.setItem('tema', 'oscuro');
            darkIcon.addClass('oculto');
            lightIcon.removeClass('oculto');
        }
    });

    // ==========================================================
    // 9. MOTOR CMS: GUARDADO AUTOMÁTICO DE TEXTOS
    // ==========================================================
    document.addEventListener('focusout', function(e) {
        if (e.target && e.target.hasAttribute('contenteditable')) {
            let elemento = e.target;
            let nuevoTexto = elemento.innerText.trim();
            let tabla = elemento.getAttribute('data-tabla');
            let columna = elemento.getAttribute('data-columna');
            let id = elemento.getAttribute('data-id');

            if(tabla && columna && id) {
                elemento.style.opacity = '0.5';
                fetch('backend/save_text.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ tabla: tabla, columna: columna, id: id, nuevo_texto: nuevoTexto })
                })
                .then(res => res.json())
                .then(data => {
                    elemento.style.opacity = '1';
                    if(data.status === 'success') {
                        let bgOriginal = elemento.style.backgroundColor;
                        elemento.style.backgroundColor = 'rgba(39, 201, 63, 0.2)';
                        setTimeout(() => { elemento.style.backgroundColor = bgOriginal || 'transparent'; }, 600);
                    } else { alert("Error al guardar: " + data.mensaje); }
                }).catch(err => { elemento.style.opacity = '1'; });
            }
        }
    });

    // ==========================================================
    // 10. MOTOR CMS: ELIMINAR (Botón ❌)
    // ==========================================================
    $(document).on('click', '.btn-eliminar', function(e) {
        e.preventDefault(); 
        e.stopPropagation();
        
        let boton = $(this);
        let id = boton.data('id');
        let tabla = boton.data('tabla');
        // Subimos dos niveles en el HTML para encontrar la caja principal de la imagen
        let contenedor = boton.parent().parent(); 
        
        if(confirm('¿Estás seguro de que deseas eliminar este elemento PERMANENTEMENTE?')) {
            boton.text('⏳');
            
            fetch('backend/delete.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ id: id, tabla: tabla })
            })
            .then(res => res.json())
            .then(data => {
                if(data.status === 'success') {
                    // Animación suave para desaparecer la caja
                    contenedor.fadeOut(300, function() { $(this).remove(); });
                } else {
                    boton.text('❌');
                    alert("Error: " + data.mensaje);
                }
            }).catch(err => { boton.text('❌'); });
        }
    });

    // ==========================================================
    // 11. MOTOR CMS: REEMPLAZAR (Botón ✏️)
    // ==========================================================
    $(document).on('click', '.btn-reemplazar', function(e) {
        e.preventDefault(); 
        e.stopPropagation(); 
        
        if(!confirm('¿Estás seguro de que deseas reemplazar este archivo? Se sobreescribirá permanentemente el anterior.')) return;

        let boton = $(this);
        let rutaVieja = boton.data('ruta'); // Sacamos la ruta directamente del atributo del botón
        
        // Subimos dos niveles para encontrar el contenedor (Aplica para Imágenes y PDFs)
        let contenedorPrincipal = boton.parent().parent(); 
        let imagenHtml = contenedorPrincipal.find('img').first(); // Buscamos si hay una etiqueta <img>

        // ¡AQUÍ ESTÁ LA CLAVE! Permitimos subir PDFs además de imágenes
        let inputArchivo = $('<input type="file" accept="image/png, image/jpeg, application/pdf" style="display:none;">');
        $('body').append(inputArchivo);
        
        // Abrimos la ventana de Windows
        inputArchivo.click(); 

        inputArchivo.on('change', function() {
            let file = this.files[0];
            if (file) {
                let textoOriginal = boton.text();
                boton.text('⏳');
                
                let formData = new FormData();
                formData.append('archivo', file);
                formData.append('accion', 'reemplazar');
                formData.append('ruta_vieja', rutaVieja);

                fetch('backend/upload_master.php', {
                    method: 'POST',
                    body: formData
                })
                .then(res => res.json())
                .then(data => {
                    boton.text(textoOriginal);
                    if(data.status === 'success') {
                        // Verificamos si lo que reemplazaste fue una imagen o el PDF
                        if(imagenHtml.length > 0) {
                            // Cambia la foto en vivo
                            imagenHtml.attr('src', data.nueva_ruta);
                            imagenHtml.css('outline', '4px solid #27c93f');
                            setTimeout(() => { imagenHtml.css('outline', 'none'); }, 1000);
                        } else {
                            // Si era el PDF, recargamos la página suavemente para mostrar el nuevo archivo
                            window.location.reload();
                        }
                    } else { alert("Error: " + data.mensaje); }
                }).catch(err => { 
                    boton.text(textoOriginal); 
                    alert("Error de red al intentar subir el archivo.");
                });
            }
            inputArchivo.remove(); 
        });
    });

    // ==========================================================
    // 12. MODAL DE IMÁGENES (LIGHTBOX)
    // ==========================================================
    
    $(document).on('click', '.imagen-ampliable', function(){
        let ruta = $(this).attr('src'); 
        $('#imagen-ampliada').attr('src', ruta); 
        $('#modal-imagen').fadeIn(300); 
    });

    $(document).on('click', '.cerrar-modal, .modal', function(){
        $('#modal-imagen').fadeOut(300); 
    });

    $(document).on('click', '#imagen-ampliada', function(event){
        event.stopPropagation();
    });


});