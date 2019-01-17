<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/ChangePass.php';?>

<?php
    $admin = new ChangePass();
    $error = '';
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        $error = $admin->changePassword($_REQUEST['oldPassword'], $_REQUEST['newPassword']);
    }
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Change Password</h2>
        <?php
            if($error){
                echo $error;
            }
        ?>
        <div class="block">               
         <form action="" method="POST">
            <table class="form">					
                <tr>
                    <td>
                        <label>Old Password</label>
                    </td>
                    <td>
                        <input type="password" placeholder="Enter Old Password..."  name="oldPassword" class="medium" />
                    </td>
                </tr>
				 <tr>
                    <td>
                        <label>New Password</label>
                    </td>
                    <td>
                        <input type="password" placeholder="Enter New Password..." name="newPassword" class="medium" />
                    </td>
                </tr>
				 
				
				 <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" name="submit" Value="Update" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<?php include 'inc/footer.php';?>