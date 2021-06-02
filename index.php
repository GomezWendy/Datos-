<?php 
  require_once 'vendor/autoload.php';
  
  use Illuminate\Database\Capsule\Manager as Capsule;
  use App\Models\Projects;

  $capsule = new Capsule;

  $capsule->addConnection([
      'driver'    => 'mysql',
      'host'      => '127.0.0.1:3306',
      'database'  => 'ejemplotarea1',
      'username'  => 'root',
      'password'  => '',
      'charset'   => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'prefix'    => '',
  ]);

  // Make this Capsule instance available globally via static methods... (optional)
  $capsule->setAsGlobal();

  // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
  $capsule->bootEloquent();
   $var = 1;
   $nombre = "Wendy Gomez";
   $boolean = false;
   //var_dump($nombre);

   require_once('jobs.php');
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/style.css">
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <title>Blog</title>
</head>
<body>


     
    <!--Datos personales-->
    <div class="container"> 
      <div class="row section">
        <div class="col s4">
          <img src="https://i.pinimg.com/236x/08/6b/df/086bdf679f8cfbfb37c2b871c0993b19.jpg" >
        </div>
        <div class="col s7">
          <h4><?php echo $nombre ?></h4>
          <h5>Programadora</h5>
          <ul>
            <li>Correo: wgomeze@ifp.mx</li>
            <li>Teléfono: 55-55-55-55-55</li>
            <li>Dirección: CDMX</li>
            <li>Edad: 17 años</li>
          </ul>
        </div>
      </div>
    </div> 

    <!--Descripcion-->

  <section class="section">
    <div class="container">
      <h4>Descripción</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt commodi dolore impedit aperiam inventore, fugit odit quos distinctio natus! Laboriosam adipisci ab perferendis eum deserunt quam minima maiores ducimus esse.</p>
    </div>
  </section>   

  <!--Experiencia laboral-->

  <section class="section">
    <div class="container">
      <h4>Experiencia Laboral</h4>
      <?php 
        $valor = 0;
        $totalMeses = 0;
        for($valor = 0; $valor < count($jobs); $valor++){
         Myfunction($jobs[$valor]);

        }
      ?>

    </div>
  </section>

<!--Proyecto-->
<div class="container"> 
      <h4>Proyectos</h4>
      <?php 
        $valor = 0;
        for($valor = 0; $valor < count($projects); $valor++){
         Myfunction($projects[$valor]);

        }
      ?>
      
      <h4>Proyectos</h4>
      <?php 
        $p = 0;
        for($p = 0; $p < count($proyectos); $p++){
         Proyecto($proyectos[$p]);

        }
      ?>
    </div>

</body>
</html>