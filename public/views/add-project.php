<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/projects.css">
    

    <script src="https://kit.fontawesome.com/02ddf7bdad.js" crossorigin="anonymous"></script>
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
        
            <div class="blogging">
    <section class="project-form" style="width: 100%; background-color: #f8ebd8; padding: 20px; border-radius: 10px; box-shadow: 0px 6px 6px rgba(0, 0, 0, 0.29); text-align: center;">
        <h1 style="font-size: 24px; color: #333; margin-bottom: 20px;">Wpisz się do Nas na blog!</h1>
        <form action="addProject" method="POST" enctype="multipart/form-data">
            <div class="messages" style="color: red; margin-bottom: 10px;">
                <?php
                    if(isset($messages)){
                        foreach($messages as $message) {
                            echo $message;
                        }
                    }
                ?>
            </div>
            <input name="title" type="text" placeholder="Wpisz tutaj temat swojego wpisu" style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px;">

            <textarea name="description" rows=5 placeholder="Napisz co ciekawego się wydarzyło oraz dodaj jakieś ciekawe zdjęcie z wyjazdu" style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px; height: 150px;"></textarea>

            <input type="file" name="file" style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px;"><br/>
            
            <button type="submit" style="background-color: greenyellow; border: none; border-radius: 5px; color: white; padding: 10px 20px; font-size: 16px; cursor: pointer; transition: background-color 0.3s;">send</button>
        </form>
    </section>
</div>
        </main>
    </div>
</body>