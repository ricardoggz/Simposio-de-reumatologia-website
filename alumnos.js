function exportToExcel(data) {
    // Crear un libro de Excel
    var workbook = XLSX.utils.book_new();
    
    // Crear una hoja de cálculo
    var worksheet = XLSX.utils.json_to_sheet(data);
    
    // Agregar la hoja de cálculo al libro
    XLSX.utils.book_append_sheet(workbook, worksheet, 'Sheet1');
    
    // Convertir el libro de Excel a un archivo Blob
    var blob = XLSX.write(workbook, { bookType: 'blob', type: 'blob' });
    
    // Utilizar FileSaver.js para descargar el archivo Blob como un archivo Excel
    saveAs(blob, 'datos.xlsx');
}



// Hacer una solicitud AJAX para obtener los datos JSON desde el archivo PHP
fetch('./server/alumnos.php') // Reemplaza 'tudatos.php' con la ruta correcta a tu archivo PHP
    .then(response => {
        if (!response.ok) {
            throw new Error('La solicitud no fue exitosa.');
        }
        return response.json(); // Parsear la respuesta como JSON
    })
    .then(data => {
        // Los datos JSON están disponibles en la variable 'data'
        console.log(data);
        exportToExcel(data);
        // Puedes procesar los datos aquí (por ejemplo, renderizarlos en una tabla HTML)
    })
    .catch(error => {
        console.error('Hubo un error:', error);
    });

exportToExcel()