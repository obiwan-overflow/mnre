<?php require_once('../inc/header.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">เรื่องร้องเรียน</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
              <li class="breadcrumb-item active">เรื่องร้องเรียน</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <a href="complaint_add.php" class="btn btn-primary"><i class="fas fa-folder-plus"></i> แบบฟอร์มเรื่องร้องเรียน</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <h5>ค้นหา</h5>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="">วันที่เรื่องร้องเรียนเข้าระบบ</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">ถึงวันที่</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">รหัส Ticket ID</label>
                                    <input type="text" class="form-control" placeholder="Ticket ID">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <button class="btn btn-success"><i class="fas fa-search"></i> ค้นหา</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ลำดับ</th>
                                                <th>Ticket ID</th>
                                                <th>ชื่อผู้ร้องเรียน</th>
                                                <th>หัวข้อร้องเรียน</th>
                                                <th>วันที่ร้องเรียน</th>
                                                <th class="text-center">สถานะ</th>
                                                <th class="text-center">การจัดการ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for($i=1; $i<=10; $i++){ ?>
                                            <tr>
                                                <td class="text-center"><?php echo $i; ?></td>
                                                <td>0000<?php echo $i; ?></td>
                                                <td>นายสมชาย</td>
                                                <td>แจ้งเรื่อง</td>
                                                <td>12/10/2021</td>
                                                <td class="text-center"><i class="fas fa-circle text-success"></i></td>
                                                <td class="text-center">
                                                    <a href="complaint_detail.php" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="รายละเอียด"><i class="fas fa-eye"></i></a>
                                                    <a href="" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="แก้ไขข้อมูล"><i class="fas fa-edit"></i></a>
                                                    <a href="" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="ลบข้อมูล"><i class="far fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>

<?php require_once('../inc/footer.php'); ?>
<script>
    $('#complaint').addClass('active');
</script>
