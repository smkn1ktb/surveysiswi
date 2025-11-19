<?php
$password = "Sigam2013";
session_start();

if (isset($_POST['pass'])) {
    if ($_POST['pass'] === $password) {
        $_SESSION['admin'] = true;
    } else {
        $error = "Password salah!";
    }
}

if (!isset($_SESSION['admin'])) {
    echo '<!DOCTYPE html><html><head><title>Admin Login</title>
          <link rel="stylesheet" href="assets/style.css"></head><body class="login">
          <div class="container"><div class="card">
          <h1>Admin Area 🔐</h1>
          <form method="post">
            <input type="password" name="pass" placeholder="Password" required autofocus>
            <button type="submit">Login</button>
          </form>';
    if (isset($error)) echo "<p style='color:#ff6b6b;margin-top:10px;'>$error</p>";
    echo '</div></div></body></html>';
    exit;
}

// Baca semua data
$entries = [];
if (file_exists('log.txt')) {
    $lines = file('log.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $entries[] = json_decode($line, true);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rekap Lengkap Survey</title>
  <link rel="stylesheet" href="assets/style.css">
  <style>
    table { font-size: 13px; }
    th { background: #764ba2; color:white; position:sticky; top:0; z-index:10; }
    .level-1a { background:#d5f4e6; font-weight:bold; }
    .level-1b { background:#a2f1c0; font-weight:bold; }
    .level-2  { background:#ffe8a3; font-weight:bold; }
    .level-3  { background:#ffd3a3; font-weight:bold; }
    .level-4  { background:#ff9a9a; font-weight:bold; color:white; }
    .level-5  { background:#ff6b6b; font-weight:bold; color:white; }
    .level-6a { background:#c0392b; font-weight:bold; color:white; }
    .level-6b { background:#2c3e50; font-weight:bold; color:white; }
  </style>
</head>
<body>
  <div class="container">
    <h1>Rekap Survey Remaja Perempuan</h1>
    <p><strong>Total Responden: <?= count($entries) ?></strong> orang</p>

    <div style="overflow-x:auto;">
      <table class="rekap-table">
        <thead>
          <tr>
            <th>No</th>
            <th>Waktu Submit</th>
            <th>Umur</th>
            <th>Kelas/Smt</th>
            <th>Q21 (Batas Terjauh)</th>
            <th>Q15 (Fantasi)</th>
            <th>Q14 (Pengaman)</th>
            <th>Q23 (Jumlah Pasangan)</th>
            <th style="min-width:180px;"><strong>KESIMPULAN LEVEL</strong></th>
            <!-- Kita tampilkan semua jawaban di baris detail nanti -->
          </tr>
        </thead>
        <tbody>
          <?php foreach ($entries as $i => $e): 
            // === LOGIKA PENENTUAN LEVEL (sesuai kriteria kamu) ===
            $level = "1.a Normal Murni";
            $q21 = $e['q21'] ?? '';
            $q15 = $e['q15'] ?? '';
            $q14 = $e['q14'] ?? 'belum pernah';
            $q23 = $e['q23'] ?? '0';

            if ($q21 === '1a' && $q15 === 'tidak pernah') {
                $level = "1.a Normal Murni (aman/suci)";
            } elseif ($q21 === '1a' && $q15 !== 'tidak pernah') {
                $level = "1.b Normal + Ada Dorongan";
            } elseif ($q21 === '2') {
                $level = "2. Aktivitas Sangat Ringan";
            } elseif ($q21 === '3') {
                $level = "3. Aktivitas Ringan (Ciuman Bibir)";
            } elseif ($q21 === '4') {
                $level = "4. Aktivitas Sedang (Sentuh Payudara)";
            } elseif ($q21 === '5') {
                $level = "5. Aktivitas Berat (Petting)";
            } elseif ($q21 === '6a' || ($q21 === '6a' && in_array('selalu',$e['q14'] ?? []))) {
                $level = "6.a Maksimal Aman (pakai pengaman)";
            } else {
                $level = "6.b Maksimal Tidak Aman";
            }
            $levelClass = str_replace('.', '', str_replace(' ', '-', $level));
          ?>
          <tr>
            <td><?= $i+1 ?></td>
            <td><?= $e['timestamp'] ?? '-' ?></td>
            <td><?= $e['q1'] ?? '-' ?></td>
            <td><?= $e['q2'] ?? '-' ?></td>
            <td><?= $q21 ?></td>
            <td><?= $q15 ?></td>
            <td><?= is_array($e['q14'] ?? null) ? implode(', ',$e['q14']) : ($e['q14'] ?? '-') ?></td>
            <td><?= $q23 ?></td>
            <td class="level-<?= $levelClass ?>"><?= $level ?></td>
          </tr>

          <!-- Baris detail semua jawaban (bisa diklik buka/tutup kalau mau, tapi ini langsung kelihatan semua) -->
          <tr style="background:#f9f9f9; font-size:12px;">
            <td colspan="9" style="padding:15px; text-align:left;">
              <strong>Semua Jawaban Lengkap:</strong><br>
              <?php
              $display = [];
              foreach ($e as $k => $v) {
                  if ($k === 'timestamp') continue;
                  if (is_array($v)) $v = implode(', ', $v);
                  $no = str_replace('q','',$k);
                  $display[] = "<strong>Q$no:</strong> " . htmlspecialchars($v);
              }
              echo implode(' • ', $display);
              ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <br><br>
    <a href="?logout" class="submit-btn" style="background:#e74c3c; display:inline-block;">Logout</a>
  </div>
</body>
</html>

<?php
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: admin.php');
    exit;
}
?>