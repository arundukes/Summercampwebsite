
<?php $__env->startSection('main-body'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Age 1-3</h3>

                <p>Activities</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="agethree" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Age 3-5<sup style="font-size: 20px"></sup></h3>

                <p>Activities</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Age 5-7</h3>

                <p>Activities</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Age 7-9</h3>

                <p>Activities</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->

      <Div class="container-sm">

<form method="post" action="/store" enctype="multipart/form-data">
<?php echo csrf_field(); ?>

<div class="form-group">
    <label  >Add activities</label>
   
  </div>

<div class="form-group">
    <label >Activity Name:</label>
    <input type="text" class="form-control" placeholder="Name of activity" 
    name="name" >
  </div>

  <div class="form-group">
      <label>Age group</label>
      <select name="age" class="form-control">
      <option value="1-3" >Age 1-3</option>
      <option value="3-5">Age 3-5</option>
      <option value="5-7">Age 5-7</option>
      <option value="7-9">Age 7-9</option>
    </select>
    </div>

    <div class="form-group">
    <Input type="file" class="form-control"
       placeholder="upload videos" name="files" ></td>
    </div>

 <input type="submit" name="Add" value="Add" > 

</form>

</div>


    </section>




</body>
</html>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admindash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\summercamp\resources\views/admin/activities.blade.php ENDPATH**/ ?>