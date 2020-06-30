<html>
<head>
<title>File Handling </title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2>File Handling using OOP in PHP </h2>
<?php 
require_once('file.php');
if(isset($_POST['submit']) && $_POST['submit'] == 'Write'){
    $file = new File;
    if($file-> write($_POST['data'])){
        echo"Data saved...";
    }
    else{
        echo"Something went wrong...";
    }
}
if(isset($_POST['submit']) && $_POST['submit'] == 'Delete'){
    $file = new File;
    $fname = $_FILES['file']['name'];
    if($file-> delete($fname)){
        echo"File Deleted...";
    }
    else{
        echo"Something went wrong...";
    }
}
?>
<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
<fieldset>
<div class="form-group">
<div class="col-md-8">
<label>Enter Text / Load File</label> 
<textarea rows="10" class="form-control" id="data" name="data"></textarea>
</div> 
</div>
<div class="row">
<div class="col-md-1">
<button id="write" name="submit" value="Write" class="btn btn-primary">Write</button>
</div>
<div class="col-md-4">
<input type="file" id="file" name="file" class="btn btn-info">
</div>
<div class="col-md-1">
<button id="read" name="submit" value="Read" class="btn btn-success">Read</button>
</div>
<div class="col-md-2">
<button id="delete" name="submit" value="Delete" class="btn btn-danger">Delete File</button>
</div>
</div>
</fieldset>
</form>
<?php 
if(isset($_POST['submit']) && $_POST['submit'] == 'Read'){
    $file = new File;
    $fname = $_FILES['file']['name'];
    $data = $file-> read($fname);
    echo "<script>
        document.getElementById('data').innerHTML = '$data';
    </script>";
}
?>
</div>
</body>
</html>