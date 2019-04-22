<?php 
use yii\bootstrap\Html;
?>
<br>
<ul class="nav nav-custom nav-pills nav-pills-custom nav-justified">
    <li class="active">
        <a data-toggle="pill" href="#students-tab-block">Students list</a>
    </li>
    <li>
        <a data-toggle="pill" href="#attendance-tab-block">Attendance</a>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Homeworks <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li class=""><a href="#homework-list-content-block" data-toggle="pill">List of assignments</a></li>
            <li class=""><a href="#set-homework-content-block" data-toggle="pill">Assign</a></li>
        </ul>
    </li>
    <li><a data-toggle="pill" href="#assignment-marking-tab-block">Assignment marks</a></li>
    <li><a data-toggle="pill" href="#rating-tab-block">Rating</a></li>
</ul>
<br>
<!-- TABS MENU END -->

<!-- TABS CONTENT -->
<div class="tab-content">
    <!-- STUDENTS TAB BLOCK -->
    <div id="students-tab-block" class="tab-pane fade in active">
        <ul class="list-group">
            <?php if($students): ?>
                <?php foreach($students as $student): ?>
                    <li class="list-group-item"><?php echo Html::encode($student->getFullname()) ?></li>
                <?php endforeach; ?>
            <?php else: ?>
                <li class="list-group-item">No student yet</li>
            <?php endif; ?>
        </ul>
    </div>
    <!-- STUDENTS TAB BLOCK END -->

    <!-- ATTEDANCE TAB BLOCK -->
    <div id="attendance-tab-block" class="tab-pane fade">
        <!-- TABLE -->
        <?php echo $this->render('subject/_attendance'); ?>
        <!-- TABLE END -->
    </div>
    <!-- ATTEDANCE TAB BLOCK END-->

    <!-- SET HOMEWORK TAB BLOCK -->
    <div id="set-homework-content-block" class="tab-pane fade">
        <?php echo $this->render('subject/_set_assignment') ?>
    </div>
    <!-- SET HOMEWORK TAB BLOCK END-->

    <!-- LIST OF HOMEWORK TAB BLOCK -->
    <div id="homework-list-content-block" class="tab-pane fade">
        <?php echo $this->render('subject/_assignment_list') ?>
    </div>
    <!-- LIST OF HOMEWORK TAB BLOCK END -->

    <!-- RATING TAB BLOCK -->
    <div id="rating-tab-block" class="tab-pane fade">
        <?php echo $this->render('subject/_rating') ?>
    </div>

    <div id="assignment-marking-tab-block" class="tab-pane fade">
        <?php echo $this->render('subject/_assignment_marking') ?>
    </div>
    <!-- LIST OF HOMEWORK TAB BLOCK END -->
</div>

<?php echo $this->render('subject/_modal_assignment.php'); ?>