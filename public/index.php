<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<?php

    $todos = [
        'Clean the bathroom',
        'Wash the car',
        'Do the homework',
        'Do the dishes'
    ];

?>

<body>
    <main class="todolist__container">
        <div class="todolist todolist__wrapper">
            <h1>To Do List <span><img src="/img/todolist-icon.png" alt="To Do List Icon" class="icon__todolist"></span></h1>
            <form action="#">
                <input type="text" name="newTask" id="inputNewTask">
                <button type="submit">Add</button>
            </form>
            <ul class="todolist__items">
                <?php foreach ($todos as $todo) { ?>
                    <li class="todolist__item">
                        <p><?= $todo ?></p>
                        <form class="todolist__item__form-delete" action="#">
                            <button type="submit">
                                <img src="/img/trash-icon.png" alt="trash icon" class="icon__trash">
                            </button>
                        </form>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </main>
</body>
</html>
