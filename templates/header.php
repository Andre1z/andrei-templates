<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- Se usa la variable 'pageTitle'; si no se definió, se utiliza un valor por defecto -->
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Blog Simple'; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <!-- Reemplaza el h1 con la variable 'pageHeader' -->
        <h1><?php echo isset($pageHeader) ? htmlspecialchars($pageHeader) : 'Bienvenido a Mi Blog'; ?></h1>
    </header>