<?php

    $items = [
        [
            'label' => 'Dashboard',
            'icon'  => 'fa-home',
            'pages' => ['dashboard.php']
        ],
        [
            'label' => 'Faculty',
            'icon'  => 'fa-chalkboard-teacher',
            'pages' => ['faculty_list.php', 'viewedit_faculty.php', 'update-faculty.php']
        ],
        [
            'label' => 'Subject',
            'icon'  => 'fa-book',
            'pages' => ['subject_list.php', 'viewedit_subjectlist.php', 'update_subject_list.php']
        ],
        [
            'label' => 'Department',
            'icon'  => 'fa-list-ul',
            'pages' => ['department.php', 'viewedit_classlist.php', 'update_classlist.php']
        ],
        [
            'label' => 'Academic Year',
            'icon'  => 'fa-layer-group',
            'pages' => ['academic_list.php', 'viewedit_acad.php', 'update-acad.php']
        ],
        [
            'label' => 'Questionaire',
            'icon'  => 'fa-question-circle',
            'pages' => ['question-list.php']
        ],
        [
            'label' => 'Student',
            'icon'  => 'fa-user-graduate',
            'pages' => ['student_list.php', 'viewedit.php', 'update.php', 'student_info.php']
        ],
        [
            'label' => 'Evaluation Report',
            'icon'  => 'fa-fw fa-flag',
            'pages' => ['report.php']
        ],
        [
            'label' => 'Users',
            'icon'  => 'fa-users',
            'pages' => ['user_list.php']
        ],
    ]

?>
