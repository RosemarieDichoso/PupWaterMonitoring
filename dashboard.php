<?php 
require_once __DIR__ . '/db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AquaMonitor - IoT Water Level System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>🌊 PUP AquaMonitor</h1>
            <p>Polytechnic University of the Philippines - IoT Water Level Monitoring System</p>
        </div>

        <!-- Navigation Tabs -->
        <div class="nav-tabs">
            <button class="tab-btn active" onclick="switchTab('monitoring', event)">Water Monitoring</button>
            <button class="tab-btn" onclick="switchTab('statistics')">Statistics</button>
        </div>

        <!-- Monitoring Tab Content -->
        <?php include 'monitoring_tab.php'; ?>

        <!-- Statistics Tab Content -->
        <?php include 'statistics_tab.php'; ?>
    </div>

    <!-- JavaScript file -->
    <script src="script.js"></script>
</body>
</html>
