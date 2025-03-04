<?php
// Curl es una libreria que nos permite hacer peticiones a servidores remotos

const API_URL = "https://whenisthenextmcufilm.com/api";
# Inicializaos una nueva sesion de Curl; ch = cURL handle
$ch = curl_init(API_URL);

// Indicar que queremos recibir el resultado de la peticion y NO MOSTRARLO EN PANTALLA
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Ejecutar la peticion y guardar el resultado
$resultado = curl_exec($ch);

# Una alternativa seria utilizar file_get_contents, que es mas sencillo si solo queremos un get. No se puede configurar para otros metodos de peticion
# $resultado = file_get_contents(API_URL); Directamente hacemos un get a la api y nos quedamos con el json

$data = json_decode($resultado, true); # Decodifica un string de JSON y lo guarda en un array asociativo
curl_close($ch);

?>


<head>
  <title>La próxima película de Marvel</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>


<main>

<!--
  <pre style="font-size: 10px; overflow: scroll; height: 250px;">
  <?php
    // var_dump($data); DE ESTA FORMA, PODEMOS VER EL JSON QUE NOS DEVUELVE LA API, Y ASI SABER QUE DATOS TENEMOS DISPONIBLES, Y COMO LLAMARLOS
  ?>
  </pre> PRE ES UNA ETIQUETA DE HTML QUE NOS PERMITE MOSTRAR TEXTO FORMATEADO, CON ESPACIOS Y SALTOS DE LINEA, Y ES UTIL PARA MOSTRAR JSONS
-->

  <section>
    <img src="<?php echo $data['poster_url']; ?>" width="300px" alt="Poster de <?php echo $data['title'];?>" style="border-radius: 16px;">
  </section>

  <hgroup>
    <h3> <?php echo $data["title"]; ?> se estrena en: <?php echo $data["days_until"]; ?> días </h3>
    <p>Fecha de estreno: <?php echo $data["release_date"]; ?> </p>
    <p>La siguiente película/serie a estrenar es: <?php echo $data["following_production"]["title"]; ?> </p>
  </hgroup>
</main>



<style>
  :root {
  color-scheme: light dark;
  }


  body {
  display: grid;
  place-content: center;
  }

  section {
    display: flex;
    justify-content: center;
    text-align: center;
  }

  hgroup {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
  }

  img {
    margin: 0 auto;
  }

</style>
