$(document).ready(function() {

    // !------------------------- Parte de Añadir -------------------------------
    $(document).on("click", "#BtnAñadir", function() {

        var url = $(this).attr("data-url");
        var tipo = $(this).attr("data-tipo")
        var titulo = "Insertar nuevo " + tipo;
        var colorTitulo = "bg-warning";

        $.ajax({
            url: url,
            success: function(datos) {
                $("#modalHeader").attr("class", "modal-header " + colorTitulo);
                $("#tituloModal").html(titulo);
                $("#content_Modal").html(datos);
                $("#parte_Modal").modal("show");
            }
        });
    });
    // !------------------------- Parte de Editar -------------------------------
    $(document).on("click", ".editarModal", function() {

        var url = $(this).attr("data-url");
        var id = $(this).attr("data-id");
        var tipo = $(this).attr("data-tipo")
        var titulo = "Editar " + tipo;
        var colorTitulo = "bg-info";

        $.ajax({
            url: url,
            data: "id=" + id,
            type: "POST",
            success: function(datos) {
                $("#modalHeader").attr("class", "modal-header " + colorTitulo);
                $("#tituloModal").html(titulo);
                $("#content_Modal").html(datos);
                $("#parte_Modal").modal("show");
            }
        });
    });

    // !------------------------- Parte de Cambiar Imagen -------------------------------
    $(document).on("click", "#cambioImagen", function() {
        var ruta_imagen = $("#imagen").attr("src");
        var name = $("#imagen").attr("data-name");

        $("#contenedorImagen").html("<input type='file' class='mx-auto' name='" + name + "' id='" + name + "'>");

    });

    // !------------------------- Parte de Eliminar -------------------------------
    $(document).on("click", ".eliminarModal", function() {

        var url = $(this).attr("data-url");
        var id = $(this).attr("data-id");
        var tipo = $(this).attr("data-tipo")
        var titulo = "Eliminar " + tipo;
        var colorTitulo = "bg-danger text-light";

        $.ajax({
            url: url,
            data: "id=" + id,
            type: "POST",
            success: function(datos) {
                $("#modalHeader").attr("class", "modal-header " + colorTitulo);
                $("#tituloModal").html(titulo);
                $("#content_Modal").html(datos);
                $("#parte_Modal").modal("show");
            }
        });
    });

    // !------------------------- Parte de Ocultar y Mostrar los Enlaces de Navegación Admin -------------------------------
    var Interruptor_Admin = true;

    $(document).on("click", "#admin_Boton_Ocultar", function() {

        if (Interruptor_Admin) {
            $(".admin_Navegacion").attr("class", "d-none admin_Navegacion");
            $(".admin_Navegacion_titulo").attr("class", "d-none admin_Navegacion_titulo");
            $("#admin_Navbar").attr("style", "height:100hw;width:56px !important");
            $("#admin_Icono_Ocultar").attr("class", "fas fa-angle-right text-light");
            Interruptor_Admin = false;
        } else {
            $(".admin_Navegacion").attr("class", "d-inline admin_Navegacion");
            $(".admin_Navegacion_titulo").attr("class", "sidebar-heading admin_Navegacion_titulo");
            $("#admin_Navbar").attr("style", "height:100hw;width:200px !important");
            $("#admin_Icono_Ocultar").attr("class", "fas fa-angle-left text-light");
            Interruptor_Admin = true;
        }
    });

    // !------------------------- Parte de Ocultar y Mostrar los Enlaces de Navegación Admin -------------------------------
    var Interruptor_Admin_VerMas = true;

    $(document).on("click", ".a_icono", function() {
        var id = $(this).attr("data-id");

        if (Interruptor_Admin_VerMas) {
            $("#" + id).attr("class", "iconoFlechas_Admin fas fa-chevron-down flecha-derecha align-middl");
            Interruptor_Admin_VerMas = false;
        } else {
            $("#" + id).attr("class", "iconoFlechas_Admin fas fa-chevron-right flecha-derecha align-middl");
            Interruptor_Admin_VerMas = true;
        }
    });

    // !------------------------- Parte de Ocultar y Mostrar los Enlaces de Navegación Admin -------------------------------

    // var Interruptor_Buscar = true;

    // $(document).on("click", "#buttonBuscar", function() {
    //     var contenido = "<div class='position-absolute card' style='width: 18rem;right: 0;z-index: 20;top: 80px;margin-top: 6rem;'> <div class='card-body'> <h5 class='card-title'>Special title treatment</h5> <p class='card-text'>With supporting text below as a natural lead-in to additional content.</p> <a href='#' class='btn btn-primary'>Go somewhere</a> <span id='cronometro'></span> <div class='progress'> <div class='progress-bar  bg-danger' role='progressbar' style='100%' aria-valuenow='100' aria-valuemin='0' aria-valuemax='100' id='progreso'></div> </div> </div> </div> </div>";

    //     if (Interruptor_Buscar) {
    //         $("#muestraE").html(contenido);
    //         Interruptor_Buscar = false;

    //         Num = 100;

    //         Time = setInterval(function() {

    //             $("#progreso").attr("style", "width:" + Num + "%");
    //             $("#progreso").attr("aria-valuenow", Num);

    //             if ((Num == 0)) {
    //                 clearInterval(Time);

    //                 $("#muestraE").html("");
    //                 Interruptor_Buscar = true;

    //             } else if (Num > 0) {
    //                 Num--;
    //             }

    //         }, 100);

    //     } else {
    //         clearInterval(Time);
    //         $("#muestraE").html("");
    //         Interruptor_Buscar = true;
    //     }

    // });

    // !------------------------- Duración del Carousel -------------------------------
    $('.carousel').carousel({
        interval: 6000
    });
});