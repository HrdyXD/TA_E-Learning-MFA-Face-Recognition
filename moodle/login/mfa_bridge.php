<?php
require('../config.php');

// Pastikan hanya user yang sudah lolos password yang bisa buka
if (empty($_SESSION['mfa_pending'])) {
    redirect($CFG->wwwroot . '/login/index.php');
}

$username = $_SESSION['mfa_user'];

// 1. Bersihkan buffer
while (ob_get_level()) { ob_end_clean(); }
@ini_set('zlib.output_compression', 'Off');

// 2. TARGET KALIBRASI (Gunakan angka 34353 yang tadi sudah berhasil)
$target_length = 34683; 
$adjusted_target = 34317;

// 3. Rakit HTML MFA
$html = '<!DOCTYPE html><html><head><meta charset="utf-8"></head><body>';
$html .= '<form id="mfa" method="POST" action="https://192.168.101.8:5000/">';
$html .= '<input type="hidden" name="user" value="'.htmlspecialchars($username).'">'; // Ubah 'u' jadi 'user'
$html .= '<input type="hidden" name="p" value="';
$html_end = '"></form><script>document.getElementById("mfa").submit();</script></body></html>';

// 4. Tambah Padding
$current_len = strlen($html) + strlen($html_end);
$diff = $adjusted_target - $current_len;
if ($diff > 0) {
    $html .= bin2hex(random_bytes(floor($diff / 2)));
}
$html .= $html_end;

// 5. Final Byte-Lock
if (strlen($html) > $adjusted_target) {
    $html = substr($html, 0, $adjusted_target);
} else {
    while (strlen($html) < $adjusted_target) { $html .= " "; }
}

// 6. Kirim Header
header("Content-Type: text/html; charset=utf-8");
header("Content-Length: " . strlen($html));

echo $html;
flush();
exit;