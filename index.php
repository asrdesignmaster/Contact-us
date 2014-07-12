<?php
/*
 * phpacady tutorial link
 * http://www.youtube.com/watch?v=FtWD_ZH9lnE&feature=em-uploademail
 */
session_start();
function e($string){
    return htmlentities($string,ENT_QUOTES,'UTF-8', false);
}
$errors = isset($_SESSION['errors'])? $_SESSION['errors'] : '';
$fields = isset($_SESSION['fields'])? $_SESSION['fields'] : '';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact Form</title>
        <style>
            .contact{width:200px;}
            .er-panel{background-color: #cccccc; padding:10px; margin-bottom: 20px;}
            label{float:left;}
        </style>
    </head>
    <body>
        <div class="contact">
            <?php  if(!empty($errors)): ?>
            <div class="er-panel">
                <ul><li><?php echo implode('</li><li>',$errors); ?></li></ul>
            </div>
            <?php endif; ?>
        <form action="contact.php" method="POST">
            <label> 
                Name
                <input type="text" name="name" <?php echo isset($fields['Name'])? 'value="'. e($fields['Name']) .'"':'' ?>>
            </label>
            <label> 
                Email
                <input type="email" name="email" <?php echo isset($fields['Email'])? 'value="'. e($fields['Email']) .'"':'' ?>>
            </label>
            <label> 
                Message
                <textarea name="message" rows="8"></textarea>
            </label>
             <input type="submit" value="Send">
        </form>
            </div>
    </body>
</html>
<?php 
unset($_SESSION['errors']);
unset($_SESSION['fields']);
?>