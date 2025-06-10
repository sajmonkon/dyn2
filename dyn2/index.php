<?php require_once 'db.php'; $moods = getMoods(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Mood Journal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <h1>Můj deník nálad</h1>
        <form method="POST" action="add.php">
            <label for="mood">Nálada:</label>
            <select name="mood" required>
                <option value="Happy">Šťastný</option>
                <option value="Sad">Smutný</option>
                <option value="Neutral">Neutrální</option>
            </select>
            <label for="note">Poznámka:</label>
            <textarea name="note" rows="4" required></textarea>
            <button type="submit">Přidat záznam</button>
        </form>
        <hr>
        <h2>Historie záznamů</h2>
        <div class="moods">
            <?php foreach ($moods as $m): // Cyklus 1 ?>
                <div class="mood-entry" style="background-color: <?= getMoodColor($m['mood']) ?>;">
                    <strong><?= htmlspecialchars($m['mood']) ?></strong><br>
                    <?= htmlspecialchars($m['note']) ?><br>
                    <em><?= $m['created_at'] ?></em>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>