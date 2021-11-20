<?php include_once'navbar.php'; ?>
<body>
    <div class="container p-4 my-5 mx-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <form action="">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Criteria" aria-label="First name"><br>
                        <label for="range">Range</label>
                        <input type="text" class="form-control" placeholder="5" aria-label="Range"><br>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
            <div class="container p-2 m-2">
                <div class="card">
                <?php
                    include_once'koneksyon.php';

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
                                    <td><input type="radio"></td>
                                </tr>
                                <?php } ?>
                        </tbody> 
                    </table>
                    <?php } ?> 
                </div>
            </div>
</body>