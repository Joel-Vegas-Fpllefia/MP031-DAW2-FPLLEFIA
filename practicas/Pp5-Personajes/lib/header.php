
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Document</title>
</head>
<body>

<header>
  <div class="container">
    <div class="logo">
      <img src="../img/itec.jfif" alt="Logo Empresa" />
    </div>
    
    <?php
        if(isset($_SESSION['usuario'])){
            echo '
                <div class="welcome">
                <span>Bienvenido,'.$_SESSION['usuario'].'</span>
                </div>
                <nav class="nav-links">
                  <a href="personaje.php">HOME</a> <!-- Link a Personaje -->
                  <a href="personaje.php">Personaje</a> <!-- Link a Personaje -->
                </nav>
                <form action="./lib/logout.php" method="post" enctype="multipart/form-data">
                  <button class="logout-btn"> Cerrar sesión</button>
                </form>
            ';
        }
    ?>
  </div>
</header>

<!-- a -->
<body>
        <?php
        if(isset($_SESSION['usuario'])){
            echo '
                <div class="main-container">
                  <div class="form-container">
                      <h2>Registro de Personaje:</h2>
                  <form action="home.php" method="post" enctype="multipart/form-data">
                      <label for="usuario">Personaje:</label>
                      <input type="text" id="usuario" name="usuario" required>

                      <label for="usuario">Poder:</label>
                      <input type="text" id="poder" name="poder" required>

                      <label for="foto">Foto de perfil Personaje:</label>
                      <input type="file" id="foto" name="foto" accept="image/*">

                      <button type="submit">Enviar</button>
                  </form>
                  </div>
              </div> 
            ';
        }
    ?>
    
</body>
</html>