<?php
declare(strict_types=1);

header('Content-Type: text/html; charset=utf-8');

$extensions = ['pdo_mysql', 'mbstring', 'curl', 'intl', 'zip', 'opcache'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP 8.4 Starter — GadoHost Cloud</title>
  <style>
    body { font-family: system-ui, sans-serif; background: #07060d; color: #f8fafc; margin: 0; padding: 40px 20px; }
    .box { max-width: 600px; margin: 0 auto; background: #100f1c; border: 1px solid rgba(255,255,255,0.1); border-radius: 16px; padding: 32px; }
    h1 { margin: 0 0 8px; font-size: 24px; }
    p { color: #94a3b8; font-size: 14px; }
    ul { list-style: none; padding: 0; margin: 24px 0 0; }
    li { display: flex; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid rgba(255,255,255,0.06); font-size: 14px; }
    .ok { color: #34d399; font-weight: 700; }
    .no { color: #f87171; font-weight: 700; }
  </style>
</head>
<body>
  <div class="box">
    <h1>PHP <?php echo htmlspecialchars(PHP_VERSION); ?> Ready</h1>
    <p>Running on isolated PHP-FPM FastCGI — <a href="https://gadohost.com" style="color:#38bdf8;">GadoHost Cloud</a></p>
    <ul>
      <?php foreach ($extensions as $ext): ?>
        <li>
          <span><?php echo htmlspecialchars($ext); ?></span>
          <span class="<?php echo extension_loaded($ext) ? 'ok' : 'no'; ?>">
            <?php echo extension_loaded($ext) ? 'Loaded' : 'Missing'; ?>
          </span>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</body>
</html>
