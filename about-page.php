<?php 
/*
    Template Name: About
*/
get_header();
?>

<main class="container">
    <div class="row about-description">
        <div class="col-md-12">
            <p>Provincia es un estudio creativo independiente ubicado en Arequipa, Perú. Desarrollamos identidad de marca, campañas, diseño editorial, sitios webs y cualquier otra pieza que nuestro cliente necesite. Exploramos la riqueza regional y la transformamos para llevarla a un nivel global y actual.
Tenemos experiencia en materializar nuestras propuestas porque trabajamos en sociedad con La Trastienda, taller de producción publicitaria y arquitectura comercial.</p>
        </div>
        <div class="line-about"></div>
        <p class="title title_about" ><strong>Lo que hacemos</strong></p>
        <div class="col-md-12">
            <div class="row">

                <div class="col-md-3">
                    <ul class="list-inline"> 
                    <li >Gestion</li>
                    <li >Estrategia</li>
                    <li >Operaciones</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="list-inline">
                    <li >Finanzas</li>
                    <li >Marketing</li>
                    <li >Recursos Humanos</li>
                    </ul> 
                </div>
                <div class="col-md-3">
                    <ul class="list-inline">
                    <li >Tecnología</li>
                    <li >Innovación</li>
                    <li >Desarrollo</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="list-inline">
                    <li >Diseño</li>
                    <li >Publicidad</li>
                    <li >Producción</li>
                    </ul>
            </div>
        </div>
        <div class="line-about"></div>
    </div> 
    <div class="row">
        <div class="col-md-12">
            <p class="title title_team"><strong>Nuestro Equipo</strong></p>
            <div class="row equipo">
                <?php 
                // Número de empleados que has configurado
                $num_empleados = 3; // Cambia este número según la cantidad de empleados que hayas configurado en el ACF
                for($i = 1; $i <= $num_empleados; $i++){
                    $image = get_field('empleado_imagen_'.$i, '132');
                    $name = get_field('empleado_nombre_'.$i, '132');
                    $description = get_field('empleado_funcion_'.$i, '132');
                    $url = $image['url'];
                    $nombre = $name;
                    $funcion = $description;
                    if($url && $nombre && $funcion){?>
                        <div class="col-sm-6">
                                <img src="<?php echo $url ?>" alt="Foto de empleado">
                                <p><strong><?php echo $nombre?></strong> </p>
                                <p><?php echo $funcion ?></p>
                        </div>
                    <?php }else{
                        echo "<h2>Datos Borrados del empleado</h2>";
                    }?>
                 <?php }?>


              
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>