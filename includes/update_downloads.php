<?php
// includes/update_downloads.php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');


$doc_id = $_POST['doc_id'] ?? null;
$doc_title = $_POST['doc_title'] ?? '';

if ($doc_id) {
    // En production, vous pourriez stocker dans une base de données
    // Pour l'instant, on log simplement et on retourne le succès
    
    // Log dans un fichier (optionnel)
    $log_message = date('Y-m-d H:i:s') . " - Document téléchargé: ID {$doc_id} - {$doc_title}" . PHP_EOL;
    file_put_contents('downloads.log', $log_message, FILE_APPEND | LOCK_EX);
    
    echo json_encode([
        'success' => true,
        'message' => 'Téléchargement enregistré',
        'doc_id' => $doc_id,
        'doc_title' => $doc_title,
        'timestamp' => date('Y-m-d H:i:s')
    ]);
} else {
    echo json_encode([
        'success' => false,
        'error' => 'ID document manquant'
    ]);
}
?>