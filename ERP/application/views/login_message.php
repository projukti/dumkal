<?php 
$login = $this->input->get('a');
switch ($login) {
    case "1":
        $title = "STUDENT MANAGEMENT";
        $class = "icon2-graduation";
        $action = "login";
        break;
    case "2":
        $title = "LIBRARY";
        $class = "icon2-book-open";
        $action = "login";
        break;
    case "3":
        $title = "MANAGE EMPLOYEE";
        $class = "icon2-users";
        $action = "login/employee";
        break;
    case "4":
        $title = "FINANCE";
        $class = "icon2-credit-card";
        $action = "login";
        break; 
    case "5":
        $title = "REPORTS";
        $class = "icon2-bar-chart";
        $action = "login";
        break;
    case "6":
        $title = "NOTICE & INSTITUTION SETTING";
        $class = "icon2-settings";
        $action = "login";
        break;            
    default:
       $title = "DUMKAL";
}
?>
<!DOCTYPE html>
<!-- DO NOT EDIT OR CUT THE FOLLOWING UPTO BODY -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dumkal College- ERP</title>

    <!-- Fonts: Archer, Sentinel, Verlag -->
    <link rel="stylesheet" href="<?php echo base_url();?>font/stylesheet.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>css/ui.css">
    <!-- Icons -->

    <link rel="stylesheet" href="<?php echo base_url();?>plugins/slicons/simple-line-icons.css">

    <!-- UI -->
    <link rel="stylesheet" href="<?php echo base_url();?>plugins/CSS3%20UI%20Kit/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>plugins/CSS3%20UI%20Kit/css/default-style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/login.css">

</head>
<body>
<img src="<?php echo base_url();?>img/logo.png" alt="" class="img-center login-logo">
<?php //foreach($result as $result) { ?>
<div class="login-panel">
    <header><span class="<?php echo $class;?><?php //echo $result->class;?>"></span>Login [<?php echo $title;?>]</header>
    <form action="login" method="post">
    <input type="hidden" name="a" value="<?php echo $this->input->get('a');?>" />
        <div class="input-group-stacked">
            <label for="username">Username</label>
            <input type="text" id="username" name="username">
            <?php echo form_error('username'); ?>
        </div>
        <div class="input-group-stacked">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <?php echo form_error('password'); ?>
        </div>
        <button>LOGIN</button>
    </form>
</div>
<?php //}?>

<!-- jQuery and Scripts -->
<script src="<?php echo base_url();?>plugins/jQuery/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url();?>plugins/CSS3%20UI%20Kit/js/jquery-ui-1.8.18.custom.min.js"></script>
</body>
</html>