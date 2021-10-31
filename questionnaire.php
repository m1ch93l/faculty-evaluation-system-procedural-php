<?php include'navbar.php'; ?>
<style>
    .f1{
      margin-top: 50px;
    }
    button{
     width: 100%;
      background-color: #6fbfe6;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover{
      background-color: #35afeb;
    }
    input[type=text]{
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      align-content: center;
    }

    input[type=submit]{
      width: 100%;
      background-color: #6fbfe6;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    input[type=submit]:hover{
      background-color: #35afeb;
    }
</style>
<body>
    <div class="main-body">
        <form action="#new_student.php">
            <button type="submit">Add New</button>
        </form>
        <?php include'view_questionnaire.php'; ?>
    </div>
</body>
