<?php 

use yii\bootstrap\Html;

?>

<ul class="nav nav-custom nav-pills nav-pills-custom nav-justified">
    <li class="active">
        <a data-toggle="pill" href="#students-tab-block">Students list</a>
    </li>
    <li>
        <a data-toggle="pill" href="#attendance-tab-block">Attendance</a>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Assignments <span class="caret"></span></a>
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
        <?php echo $this->render('view/_students_list',[
            'dataProvider' => $studentsDataProvider,
        ]); ?>
    </div>
    <!-- STUDENTS TAB BLOCK END -->

    <!-- ATTEDANCE TAB BLOCK -->
    <div id="attendance-tab-block" class="tab-pane fade">
        <!-- TABLE -->
        <?php echo $this->render('view/_attendance', [
            'dataProvider' => $studentsDataProvider,
        ]); ?>
        <!-- TABLE END -->
    </div>
    <!-- ATTEDANCE TAB BLOCK END-->

    <!-- SET HOMEWORK TAB BLOCK -->
    <div id="set-homework-content-block" class="tab-pane fade">
        <?php echo $this->render('view/_set_assignment',[
            'model' => $assignmentModel,
        ]) ?>
    </div>
    <!-- SET HOMEWORK TAB BLOCK END-->

    <!-- LIST OF HOMEWORK TAB BLOCK -->
    <div id="homework-list-content-block" class="tab-pane fade">
        <?php echo $this->render('view/_assignment_list',[
            'dataProvider' => $assignmentsDataProvider
        ]) ?>
    </div>
    <!-- LIST OF HOMEWORK TAB BLOCK END -->

    <!-- RATING TAB BLOCK -->
    <div id="rating-tab-block" class="tab-pane fade">
        <?php echo $this->render('view/_rating') ?>
    </div>

    <div id="assignment-marking-tab-block" class="tab-pane fade">
        <?php echo $this->render('view/_assignment_marking') ?>
    </div>
    <!-- LIST OF HOMEWORK TAB BLOCK END -->
</div>

<?php echo $this->render('view/_modal_assignment.php'); ?>

<?php 

$js = <<<JS

    $('a[data-toggle=modal]').on('click',function(){
        let assignment_id = $(this).attr('data-assignment-id');
        $.ajax({
            type: "get",
            url: "/teacher/ajax/assignment",
            data:{
                assignment_id: assignment_id,
            },
            success: function(response){
                $('div.modal-content').html(response);
                $('#myModal').modal();
            }
        });
    });

JS;

$this->registerJs($js); ?>