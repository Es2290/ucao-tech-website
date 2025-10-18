<?php
// includes/upload_document.php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Vérification admin basique (à adapter avec votre système d'authentification)
session_start();
$is_admin = isset($_SESSION['is_admin']) && $_SESSION['is_admin'];

// Pour tester, vous pouvez décommenter la ligne suivante :
 $is_admin = true;

if (!$is_admin) {
    echo json_encode([
        'success' => false,
        'error' => 'Accès non autorisé. Fonction réservée aux administrateurs.'
    ]);
    exit;
}

// Dossier de destination
$upload_dir = '..media/documents/';
if (!is_dir($upload_dir)) {
    if (!mkdir($upload_dir, 0755, true)) {
        echo json_encode([
            'success' => false,
            'error' => 'Impossible de créer le dossier de destination'
        ]);
        exit;
    }
}

// Vérifier si un fichier a été uploadé
if (!isset($_FILES['doc-file']) || $_FILES['doc-file']['error'] !== UPLOAD_ERR_OK) {
    $error_message = 'Aucun fichier uploadé';
    switch ($_FILES['doc-file']['error'] ?? 4) {
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            $error_message = 'Fichier trop volumineux';
            break;
        case UPLOAD_ERR_PARTIAL:
            $error_message = 'Upload partiel';
            break;
        case UPLOAD_ERR_NO_FILE:
            $error_message = 'Aucun fichier sélectionné';
            break;
        case UPLOAD_ERR_NO_TMP_DIR:
            $error_message = 'Dossier temporaire manquant';
            break;
        case UPLOAD_ERR_CANT_WRITE:
            $error_message = 'Erreur d\'écriture';
            break;
        case UPLOAD_ERR_EXTENSION:
            $error_message = 'Extension PHP a arrêté l\'upload';
            break;
    }
    
    echo json_encode([
        'success' => false,
        'error' => $error_message
    ]);
    exit;
}

$file = $_FILES['doc-file'];
$title = $_POST['doc-title'] ?? '';
$category = $_POST['doc-category'] ?? '';
$description = $_POST['doc-description'] ?? '';

// Validation
if (empty($title)) {
    echo json_encode([
        'success' => false,
        'error' => 'Le titre du document est obligatoire'
    ]);
    exit;
}

if (empty($category)) {
    echo json_encode([
        'success' => false,
        'error' => 'La catégorie est obligatoire'
    ]);
    exit;
}

// Types de fichiers autorisés
$allowed_types = ['pdf', 'docx', 'xlsx', 'pptx', 'zip', 'doc', 'xls', 'ppt'];
$file_extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

if (!in_array($file_extension, $allowed_types)) {
    echo json_encode([
        'success' => false,
        'error' => 'Type de fichier non autorisé. Types acceptés: ' . implode(', ', $allowed_types)
    ]);
    exit;
}

// Taille maximale (10MB)
// $max_size = 10 * 1024 * 1024;
//if ($file['size'] > $max_size) {
 //   echo json_encode([
  //      'success' => false,
    //    'error' => 'Fichier trop volumineux. Taille maximale: 10MB'
 //   ]);
 //   exit;
//}

// Générer un nom de fichier sécurisé
$safe_title = preg_replace('/[^a-zA-Z0-9-_]/', '_', $title);
$filename = $safe_title . '_' . time() . '.' . $file_extension;
$filepath = $upload_dir . $filename;

// Déplacer le fichier uploadé
if (move_uploaded_file($file['tmp_name'], $filepath)) {
    // Log de l'upload
    $log_message = date('Y-m-d H:i:s') . " - Document uploadé: {$title} - {$filename}" . PHP_EOL;
    file_put_contents('uploads.log', $log_message, FILE_APPEND | LOCK_EX);
    
    echo json_encode([
        'success' => true,
        'message' => 'Document publié avec succès',
        'filename' => $filename,
        'filepath' => $filepath,
        'title' => $title,
        'category' => $category
     //   'size' => round($file['size'] / 1024 / 1024, 2) . ' MB'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'error' => 'Erreur lors du déplacement du fichier vers le serveur'
    ]);
}
?>
