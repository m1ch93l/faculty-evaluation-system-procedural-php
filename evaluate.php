<style>
   .thspace{
    padding: 0 50px;
   }
</style>
<body>
<?php include'navbar.php'; ?>
    <div class="main-body">
        <div>
            <h1>HELLO, <?=$_SESSION['name']?></h1>
            <div align="center" style="background: #f2f2f2; padding: 50px;">
                <div>
                    <fieldset>
                       <legend>Rating Legend</legend>
                       <p>5 = Strongly Agree, 4 = Agree, 3 = Uncertain, 2 = Disagree, 1 = Strongly Disagree</p>
                    </fieldset>

                    <?php include'koneksyon.php';

                            $qryview = "SELECT * FROM criteria_list";
                            $result = mysqli_query($koneksyon, $qryview);
                            while($row = $result->fetch_assoc()) { ?>
                        <form action="insert-data.php" method="post">
                            

                            <table border="1">
                                <thead>
                                    <tr>
                                        <th class="thspace"><?php echo $row['criteria']; ?></th>
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                        <th>4</th>
                                        <th>5</th>
                                    </tr>
                            
                                    <tbody>
                                        <tr>
                                            <td>
                                                
                                            </td>
                                            <?php for($c=1;$c<=5;$c++){ ?>
                                            <td>
                                                <input type="radio" value="<?php echo $c; ?>" <?php echo $c == 5 ? "checked" : '' ?>>
                                            </td>
                                            <?php } ?>
                                        </tr>
                                    </tbody>
                                </thead>
                            </table>
                            <?php } ?>
                        <input type="submit" name="submit">
                        </form>
                </div>
            </div>
        </div>
   </div>
</body>