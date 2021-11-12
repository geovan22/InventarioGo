<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Framework/Materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      {if isset($title)}
        <title>{$title}</title>
      {else}
        <title>Home</title>
      {/if}
      
    </head>
    <body>
    <div class="row">
    
    {if isset($Nombre)}
          <nav class="col s12">
            <div class="nav-wrapper">
              <a href="#" class="brand-logo">Nombre: {$Nombre}</a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="">Salir</a></li>
              </ul>
            </div>
          </nav>
    {/if}
    