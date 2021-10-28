<!DOCTYPE html>
<html>
<head>
<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

<?php
class messages {


    public function success($msg)
    {
       
        return "<div class='alert alert-success' role='alert'>$msg</div>";
    }
    
     public function error($msg)
    {
        return "<div class='alert alert-danger' role='alert'>$msg</div>";
    }
    
     public function warning($msg)
    {
        return "<div class='alert alert-warning' role='alert'>$msg</div>";
    }
}

$model = new messages();
echo $model->success('okay');
echo $model->error('Email not valid');
echo $model->warning('something is wrong');
 
?>

</body>
</html>
