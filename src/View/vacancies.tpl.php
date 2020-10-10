<?php

/**
 *  @var array $data - массив входящих переменных
 */
?>
<?php include 'header.php'; ?>
<?php foreach ($data as $vacancy): ?>
    <h2><a href="/vacancy/view/<?= $vacancy->id; ?>"><?= $vacancy->title ?></a><br>
        (id #<?= $vacancy->id; ?>)</h2>
    <h5>Created: <?= $vacancy->created_at; ?></h5>
    <p>
        <b>Зарплата:</b> <?= $vacancy->price; ?><br>
        <b>Организация:</b> <?= $vacancy->organization; ?><br>
        <b>Адрес: </b> <?= $vacancy->address; ?><br>
        <b>Телефон:</b> <?= $vacancy->telephone; ?><br>
        <b>Требуемый опыт:</b> <?= $vacancy->experience; ?><br>
        <b>Технологии:</b> <?= $vacancy->technology; ?><br>
        <b>Требуемые навыки:</b> <?= $vacancy->sills; ?><br>
        <b>Условия:</b> <?= $vacancy->conditions; ?><br><br>
    </p>
    <hr>
<?php endforeach; ?>
<?php include 'footer.php'; ?>
