<?php include_once'navbar.php'; ?>
<body>
    <div class="row">
        <div class="col">
            <div class="container p-4 my-4 mx-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <form action="add-criteria.php" method="post">
                        <div class="row">
                            <div class="col">
                                    <input type="text" class="form-control" placeholder="Criteria" name="criteria"><br>
                                    <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="container p-4 my-4 mx-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <form action="add-question.php" method="post">
                        <div class="row">
                            <div class="col">
                                
                                <select class="form-select" name="criteriaid" id="">
                                <?php include_once'koneksyon.php'; 
                                    $view = "SELECT * FROM criteria";
                                    $res = mysqli_query($koneksyon, $view);
                                    while($row = mysqli_fetch_array($res)){
                                ?>
                                    <option value="<?php echo $row['id']; ?>"> <?php echo $row['criteria']; ?> </option>
                                    <?php } ?>
                                </select><br>
                                
                                    <input type="text" class="form-control" placeholder="Question" name="question"><br>
                                    <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <div class="container bg-primary">
        <form action="" method="post">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <!-- Button trigger modal -->
                <a type="button" class="btn btn-success" href="eval-instructor.php">
                Choose Intructor
                </a>
                <button type="submit" class="btn btn-success">SAVE</button>
            </div>  
                    <div class="card my-5">
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
                                            <form>
                                                <td><input type="radio" name="group1" value="1" ></td>
                                                <td><input type="radio" name="group1" value="2" ></td>
                                                <td><input type="radio" name="group1" value="3" ></td>
                                                <td><input type="radio" name="group1" value="4" ></td>
                                                <td><input type="radio" name="group1" value="5" checked></td>
                                            </form>
                                    </tr>
                                    <?php } ?>
                            </tbody> 
                        </table>
                        <?php } ?> 
                    </div>
        </form>
    </div>
</body>