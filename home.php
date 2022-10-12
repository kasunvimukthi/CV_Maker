<?php
session_reset();
// ===================================================================================
//                                      HEADER
// ===================================================================================

    include ('Includes/header.php');

    include ('Includes/top_bar2.php');
// ===================================================================================
//                                      BODY
// ===================================================================================
require_once 'Database/DB_Connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Maker</title>
</head>
<body>
 <div class="row ">
     <div class="col-md-12 row ms-1 mt-3 justify-content-center">

     <?php
        $query = "SELECT * FROM template ";
        $result = mysqli_query($conn, $query);
        while($row1 = mysqli_fetch_array($result))
        {
            $T_ID = $row1['ID'];
     ?>
        <div class="grid mt-3">
            <div class="card">
                <a href="template.php?T_ID=<?php echo $row1['ID'];?>" class="template_btn">
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($row1["Image"])?>" height="300px" width="100%" title="<?php echo $row1["Name"]; ?>">
                </a>
            </div>
        </div>
    <?php } ?>

    </div>
 </div>
</body>
</html>
<?php
    // include ('Includes/body.php');
    include ('Includes/L_modal.php');


// ===================================================================================
//                                      FOOTER
// ===================================================================================

    include ('Includes/footer.php');

    include ('Includes/script.php');

?>

<style>
@media (min-width: 100px) {
  .grid{
    width: 225px;
  }
}
</style>
