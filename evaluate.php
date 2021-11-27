
<body>
<?php include'navbar.php'; ?>
    <div class="main-body">
        <div>
            <h1>HELLO, <?=$_SESSION['username']?></h1>
                <div class="container">
                    <div class="card" style="width: 18rem;">
                        <div class="card-title text-center">
                            <form action="" method="post">
                            <?php include_once'koneksyon.php';
                                $evalid = "SELECT * FROM evaluation";
                                $result = mysqli_query($koneksyon, $evalid);
                                    while($row = mysqli_fetch_array($result)){
                            ?>
                                <button type="submit" class="btn btn-primary" value="<?php echo $row['evaluationid'];?>"><?php echo $row['evaluationid'];?></button>
                            <?php } ?>
                            </form>
                        </div>
                    </div>
                </div>

            <div style="background: skyblue; padding: 50px;">
                <div>
                    <fieldset>
                       <legend>Rating Legend</legend>
                       <p>5 = Strongly Agree, 4 = Agree, 3 = Uncertain, 2 = Disagree, 1 = Strongly Disagree</p>
                    </fieldset>

                    <div class="container bg-primary">
                <div class="card">
                <?php

                    $qryview = "SELECT * FROM criteria";
                    $result = mysqli_query($koneksyon, $qryview);
                        while($row = mysqli_fetch_array($result)) {
                    ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"><?php echo $row['criteria']; ?></th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $tanong = "SELECT * FROM questions where criteria_id = {$row['id']}";
                            $resulta = mysqli_query($koneksyon, $tanong);
                            while($row1 = mysqli_fetch_array($resulta)){
                                ?>
                                <tr>
                                    <td><?php echo $row1['question']; ?></td>
                                        <form name="form">
                                            <td><input type="radio" name="group1" value="1" checked></td>
                                            <td><input type="radio" name="group1" value="2" ></td>
                                            <td><input type="radio" name="group1" value="3" ></td>
                                            <td><input type="radio" name="group1" value="4" ></td>
                                            <td><input type="radio" name="group1" value="5" ></td>
                                        </form>
                                </tr>
                                <?php } ?>
                        </tbody> 
                    </table>
                    <?php } ?> 
                </div>
            </div>
                </div>
            </div>

        </div>
   </div>
</body>