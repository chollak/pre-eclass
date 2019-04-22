<?php 
use yii\bootstrap\Html;
?>
<?php if($students): ?>
    <ul class="list-group">
        <?php foreach($students as $student): ?>
            <li class="list-group-item"><?php echo Html::encode($student->getFullname()); ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <ul class="list-group">
        <li class="list-group-item">No students yet</li>
    </ul>
<?php endif; ?>