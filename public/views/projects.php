<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/projects.css">

    <script src="https://kit.fontawesome.com/02ddf7bdad.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <title>PROJECTS</title>
</head>

<body>
    <div class="base-container">
        <nav>
            <img src="public/img/logo.png">
            <ul>
                <li>
                    <a href="login" class="button">home</a>
                </li>
                <li>
                    <a href="addProject" class="button">add blog entry</a>
                </li>
                <li>
                    <a href="projects" class="button">entries!</a>
                </li>
                <li>
                    <a href="#" class="button">log out</a>
                </li>
            </ul>
        </nav>
        <main>
        <header style="background-color: #008080">
                <div class="search-bar">
                        <input placeholder="Search for specific blog entry!">
                </div>
            </header>
            <section class="projects">
                <?php foreach ($projects as $project): ?>
                <div id="project-1">
                    <img src="public/uploads/<?= $project->getImage() ?>">
                    <div>
                        <h2><?= $project->getTitle() ?></h2>
                        <p><?= $project->getDescription() ?></p>
                        <div class="social-section">
                            <i class="fas fa-heart"> 600</i>
                            <i class="fas fa-minus-square"> 121</i>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </section>
        </main>
    </div>
</body>

<template id="project-template">
<div id="">
                    <img src="">
                    <div>
                        <h2>title</h2>
                        <p>description</p>
                        <div class="social-section">
                            <i class="fas fa-heart"> 0</i>
                            <i class="fas fa-minus-square"> 0</i>
                        </div>
                    </div>
                </div>
</template>
