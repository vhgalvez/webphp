
<!DOCTYPE html>

<html lang="es">

<head>
<title>Clientes LLanosTour </title>
<meta charset="utf-8" />
<link rel="stylesheet" href="estilos.css" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="alternate" title="Pozolería RSS" type="application/rss+xml" href="/feed.rss" />
</head>

<body>

    <header>
       <h1>Clientes LLanosTour</h1>
       <p>Consultar</p>

      <form action="clientes.php" method="post">
         <div class="form-group">
           <label for="email">Cedula</label>
           <input type="number" name="cedula" id="cedula" maxlength="4" size="4" placeholder="Cedula">

         </div>

         <button type="submit" class="btn btn-default">Consultar Cliente</button>
       </form>

    </header>


</body>
</html>
