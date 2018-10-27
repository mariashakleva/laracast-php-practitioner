
<?php require('partials/head.php') ?>
<h2>HOME</h2>
<h3>Some Tasks</h3>
<form action="/users" method="POST">
    <textarea name="description" id="task-desc" cols="30" rows="10" placeholder="Task Description"></textarea><p style="color: #fb0000; font-weight:bold;"><?= isset($errors['description']) ? $errors['description'] : ''; ?></p>
    <input type="checkbox" value="0" id="status" name="completed"> Task Completed <p></p>
    <button type="submit" name="submit">Submit</button>
</form>
<ul>
<?php foreach($tasks as $task) :
    if($task->completed) : ?>
    <strike><?= $task->description ?></strike><br>
<?php else: ?>
    <?= $task->description ?><br>
<?php endif; endforeach;?>
</ul>

<?php require('partials/footer.php') ?>
