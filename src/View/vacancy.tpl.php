<?php
/**
 *  @var array $data - массив входящих переменных
 *  @var object $author
 */
?>

<?php include 'header.php'; ?>

<h2><a href="/vacancy/view/<?= $data->id; ?>"><?= $data->title ?></a><br>
    (id #<?= $data->id; ?>)</h2>
<h5>Created: <?= $data->created_at; ?></h5>
<p>
    <b>Зарплата:</b> <?= $data->price; ?><br>
    <b>Организация:</b> <?= $data->organization; ?><br>
    <b>Адрес: </b> <?= $data->address; ?><br>
    <b>Телефон:</b> <?= $data->telephone; ?><br>
    <b>Требуемый опыт:</b> <?= $data->experience; ?><br>
    <b>Технологии:</b> <?= $data->technology; ?><br>
    <b>Требуемые навыки:</b> <?= $data->sills; ?><br>
    <b>Условия:</b> <?= $data->conditions; ?><br><br>

    <br>

<?php include 'footer.php'; ?>
