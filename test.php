<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./createTest.css">
</head>
<body>
ура ты вошёл <?=$_COOKIE['name'];?>


<div class="testbox">
    <form action="createtest.php" method="post">
        <div class="banner">
            <h1><?=$_COOKIE['name']?></h1>
        </div>
        <br/>
        <p>Создайте тест</p>
        <br/>
        <div class="colums">
            <div class="item">
                <label for="name">Категория<span>*</span></label>
                <input id="name" type="text" name="category" required/>
            </div>
            <div class="item">
                <label for="name">Название<span>*</span></label>
                <input id="name" type="text" name="nametest" required/>
            </div>


            </div>
<section class="questionBlock">
    <div class="questionBlock">
        <div class="questionBtn">
        <div class="item ">
            <label for="name">Вопрос<span>*</span></label>
            <input id="name" type="text" name="question" required/>
        </div>
        <button>Создать тест</button>
        </div>
    </div>
<div class="answersBlock">
    <section class="itemRadio">
        <div class="item">
            <label for="ans1">Ответ 1<span>*</span></label>
            <input id="name" type="text" name="ans1" required/>
        </div>
        <div class="radioBtn">
        <input  type="checkbox" id="Rans1" name="ans" value="Правильный1">
            <label for="Rans1">Правильный ответ 1</label>
        </div>

    </section>
    <section class="itemRadio">
        <div class="item">
            <label for="ans1">Ответ 2<span>*</span></label>
            <input id="name" type="text" name="ans1" required/>
        </div>
        <div class="radioBtn">
            <input  type="checkbox" id="Rans2" name="ans" value="Правильный2">
            <label for="Rans2">Правильный ответ 2</label>
        </div>

    </section>

    <section class="itemRadio">
        <div class="item">
            <label for="ans1">Ответ 3<span>*</span></label>
            <input id="name" type="text" name="ans1" required/>
        </div>
        <div class="radioBtn">
            <input  type="checkbox" id="Rans3" name="ans" value="Правильный3">
            <label for="Rans3">Правильный ответ 3</label>
        </div>

    </section>

    <section class="itemRadio">
        <div class="item">
            <label for="ans1">Ответ 4<span>*</span></label>
            <input id="name" type="text" name="ans1" required/>
        </div>
        <div class="radioBtn">
            <input  type="checkbox" id="Rans4" name="ans" value="Правильный4">
            <label for="Rans4">Правильный ответ 4</label>
        </div>

    </section>
</div>


</section>


</body>
</html>