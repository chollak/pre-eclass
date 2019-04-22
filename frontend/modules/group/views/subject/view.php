<ul class="nav nav-custom nav-pills nav-pills-custom nav-justified">
    <li class="active"><a data-toggle="pill" href="#students-tab-block">Students list</a></li>
    <li><a data-toggle="pill" href="#attendance">Attendance</a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Homeworks <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="#homework-list-content-block" data-toggle="pill">List of homeworks</a></li>
            <li><a href="#checked-homework-content-block" data-toggle="pill">Checked homeworks</a></li>
        </ul>
    </li>
    <li><a data-toggle="pill" href="#rating">Rating</a></li>
</ul>
<br>
<!-- TABS MENU END -->

<!-- TABS CONTENT -->
<div class="tab-content">
    <!-- STUDENTS TAB BLOCK -->
    <div id="students-tab-block" class="tab-pane fade in active">
        <?php echo $this->render('view/_students', [
            'students' => $students
        ]); ?>
    </div>
    <!-- STUDENTS TAB BLOCK END -->

    <!-- ATTENDANCE TAB BLOCK -->
    <div id="attendance" class="tab-pane fade">
        <!-- TABLE -->
        <?php echo $this->render('view/_attendance'); ?>
        <!-- TABLE END -->
    </div>
    <!-- ATTENDANCE TAB BLOCK -->

    <!-- HOMEWORKS TAB BLOCK -->
    <!-- CHECKED HOMEWORK TAB BLOCK -->
    <div id="checked-homework-content-block" class="tab-pane fade">
        <!-- TABLE -->
        <?php echo $this->render('view/_checked_assignments'); ?>
        <!-- TABLE END -->
    </div>
    <!-- CHECKED HOMEWORK TAB BLOCK END -->

    <!-- LIST OF HOMEWORK TAB BLOCK -->
    <div id="homework-list-content-block" class="tab-pane fade">
        <?php echo $this->render('view/_assignments_list') ?>
    </div>
    <!-- LIST OF HOMEWORK TAB BLOCK END -->
    <!-- HOMEWORKS TAB BLOCK END -->

    <!-- RATING TAB BLOCK -->
    <div id="rating" class="tab-pane fade">
        <?php echo $this->render('view/_rating'); ?>
    </div>
    <!-- RATING TAB BLOCK END -->
</div>

<?php echo $this->render('view/_modal_assignment') ?>