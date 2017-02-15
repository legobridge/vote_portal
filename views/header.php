<!DOCTYPE html>

<html>

    <head>

        <!-- http://getbootstrap.com/ -->
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>

        <link href="/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>The General Elections : <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>The General Elections</title>
        <?php endif ?>

        <!-- http://getbootstrap.com/ -->
        <script src="/js/bootstrap.min.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <div>
                    <a href="/"><img alt="BITS Pilani, Hyderabad Campus" src="/img/bphc_logo.png"/></a>
                    <a href="/"><img alt="The Election Commission" src="/img/ec_logo.png"/></a>
                </div>
                <?php if (!empty($_SESSION["id"])): ?>
                    <ul class="nav nav-pills">
                        <li><a href="president.php">President</a></li>
                        <li><a href="gensec.php">Gen-Sec</a></li>
                        <li><a href="cultsec.php">Cult-Sec</a></li>
                        <li><a href="sportssec.php">Sports-Sec</a></li>
                        <li><a href="smc.php">SMC</a></li>
                        <li><a href="hrep.php">H-Rep</a></li>
                        <li><a href="logout.php"><strong>Log Out</strong></a></li>
                    </ul>
                <?php endif ?>
            </div>

            <div id="middle">
