<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contactos</title>
</head>
<body>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contactos</title>
    <link rel="stylesheet" href="assets/style.css">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="header">
        <h1>Agenda de Contactos</h1>
    </header>

    <main class="container">
        
        <section class="form-section">
            <h2>Agregar Contacto</h2>
            <br>
            <form id="contact-form">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ej: Homero" required>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="text" id="telefono" name="telefono" placeholder="Ej: 11-2345-6789" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo</label>
                    <input type="email" id="email" name="email" placeholder="Ej: homero@springfield.com" required>
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" id="direccion" name="direccion" placeholder="Ej: Av. Siempre Viva 742">
                </div>
                <button type="submit" class="btn-agregar">➕ Agregar</button>
            </form>
        </section>

        
        <section class="list-section">
            <h2>Mis Contactos</h2>
            <table class="contact-table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Dirección</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>Homero Simpson</td>
                        <td>11-2345-6789</td>
                        <td>homero@springfield.com</td>
                        <td>Av. Cabildo 123123</td>
                        <td>
                            <button class="btn-editar">✏️ Editar</button>
                            <button class="btn-eliminar">🗑️ Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Marge Simpson</td>
                        <td>11-8765-4321</td>
                        <td>marge@springfield.com</td>
                        <td>Av. Siempre Viva 742</td>
                        <td>
                            <button class="btn-editar">✏️ Editar</button>
                            <button class="btn-eliminar">🗑️ Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <footer class="footer">
        
        <div class="github-container">
            <a href="https://github.com/Pedrog1999/AGENDA-DE-CONTACTOS" target="_blank" class="github-button">
                <svg height="20" width="20" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="vertical-align: middle;">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 
                        6.53 5.47 7.59.4.07.55-.17.55-.38 
                        0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52
                        -.01-.53.63-.01 1.08.58 1.23.82.72 1.21 
                        1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78
                        -.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82
                        -2.15-.08-.2-.36-1.01.08-2.12 0 
                        0 .67-.21 2.2.82a7.7 7.7 0 012 0c1.53-1.04 
                        2.2-.82 2.2-.82.44 1.11.16 1.92.08 
                        2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 
                        3.75-3.65 3.95.29.25.54.73.54 
                        1.48 0 1.07-.01 1.93-.01 2.2 
                        0 .21.15.46.55.38A8.013 8.013 0 
                        0016 8c0-4.42-3.58-8-8-8z"/>
                </svg>
                Open in GitHub
            </a>
        </div>
    </footer>

</body>
</html>