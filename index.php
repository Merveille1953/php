<head>
    <title>Daten speichern</title>
</head>
<body>
    <h2>Daten speichern</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <textarea name="textarea_data" rows="5" cols="40"></textarea><br><br>
        <input type="submit" value="Daten speichern">
    </form>

<?php
// Überprüfen, ob das Formular gesendet wurde und die Textarea-Daten vorhanden sind
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["textarea_data"])) {
    // Pfad zur Textdatei, in der die Daten gespeichert werden sollen
    $file_path = "gespeicherte_daten.txt";
    
    // Daten aus der Textarea erhalten
    $textarea_data = $_POST["textarea_data"];
    
    // Daten in die Textdatei schreiben (neue Daten werden an die vorhandenen Daten angehängt)
    file_put_contents($file_path, $textarea_data, FILE_APPEND);
    
    // Erfolgsmeldung anzeigen
    echo "Die Daten wurden erfolgreich gespeichert.";
}
?>

</body>
</html>