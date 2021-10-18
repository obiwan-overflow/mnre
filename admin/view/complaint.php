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
                        <div class="card-body">
                            <form action="complaint.php" method="post">
                            <div class="row mb-3">
                                <div class="col-md-4 mb-2">
                                    <label for="">วันที่เรื่องร้องเรียนเข้าระบบ</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="">ถึงวันที่</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="">รหัส Ticket ID</label>
                                    <input type="text" class="form-control" placeholder="Ticket ID">
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="">สถาน</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">เลือก</option>
                                        <option value="">อยู่ระหว่างการดำเนินการ</option>
                                        <option value="">อยู่ระหว่างการดำเนินการเหลืออีก 7 วันครบกำหนด</option>
                                        <option value="">ดำเนินการล่าช้ากว่ากำหนดโดยเกิน 45 วันที่กำหนด</option>
                                        <option value="">ดำเนินการแล้วเสร็จ</option>
                                        <option value="">กระทรวงฯ ส่งเรื่องร้องเรียนให้หน่วยงานแล้ว แต่หน่วยงานยังไม่รับเรื่อง</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label for="">หน่วยงาน</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">เลือก</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    <button class="btn btn-success btn-block" type="submit"><i class="fas fa-search"></i> ค้นหา</button>
                                </div>
                            </div>
                            </form>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <a href="" class="btn btn-theme">เรื่องร้องเรียนที่ได้โดยตรง <span class="badge badge-light">4</span></a>
                                    <a href="" class="btn btn-primary">เรื่องร้องเรียนที่ได้รับจาก สปน. <span class="badge badge-light">20</span></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right mb-3">
                                    <a href="complaint_add.php" class="btn btn-primary"><i class="fas fa-folder-plus"></i> แบบฟอร์มเรื่องร้องเรียน</a>
                                </div>
                                <div class="col-md-12">
                                    <table class="table table-bordered table-striped">
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
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>00001</td>
                                                <td>นายสมชาย</td>
                                                <td>แจ้งเรื่อง</td>
                                                <td>12/10/2021</td>
                                                <td class="text-center"><i class="fas fa-circle text-success"></i></td>
                                                <td class="text-center">
                                                    <a href="complaint_detail.php" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="รายละเอียด"><i class="fas fa-eye"></i></a>
                                                    <a href="complaint_status.php" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="รับเรื่องร้องเรียน"><i class="far fa-check-square"></i></a>
                                                    <a href="complaint_edit.php" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="แก้ไขข้อมูล"><i class="fas fa-edit"></i></a>
                                                    <a href="" class="btn btn-theme btn-sm" data-toggle="tooltip" data-placement="top" title="จบงาน"><i class="fas fa-file"></i></a>
                                                    <a href="" class="btn btn-danger btn-sm btn-del" data-toggle="tooltip" data-placement="top" title="ลบข้อมูล"><i class="far fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td>00002</td>
                                                <td>นายสมชาย</td>
                                                <td>แจ้งเรื่อง</td>
                                                <td>12/10/2021</td>
                                                <td class="text-center"><i class="fas fa-circle text-danger"></i></td>
                                                <td class="text-center">
                                                    <a href="complaint_detail.php" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="รายละเอียด"><i class="fas fa-eye"></i></a>
                                                    <a href="complaint_status.php" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="รับเรื่องร้องเรียน"><i class="far fa-check-square"></i></a>
                                                    <a href="complaint_edit.php" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="แก้ไขข้อมูล"><i class="fas fa-edit"></i></a>
                                                    <a href="" class="btn btn-theme btn-sm" data-toggle="tooltip" data-placement="top" title="จบงาน"><i class="fas fa-file"></i></a>
                                                    <a href="" class="btn btn-danger btn-sm btn-del" data-toggle="tooltip" data-placement="top" title="ลบข้อมูล"><i class="far fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td>00003</td>
                                                <td>นายสมชาย</td>
                                                <td>แจ้งเรื่อง</td>
                                                <td>12/10/2021</td>
                                                <td class="text-center"><i class="fas fa-circle text-warning"></i></td>
                                                <td class="text-center">
                                                    <a href="complaint_detail.php" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="รายละเอียด"><i class="fas fa-eye"></i></a>
                                                    <a href="complaint_status.php" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="รับเรื่องร้องเรียน"><i class="far fa-check-square"></i></a>
                                                    <a href="complaint_edit.php" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="แก้ไขข้อมูล"><i class="fas fa-edit"></i></a>
                                                    <a href="" class="btn btn-theme btn-sm" data-toggle="tooltip" data-placement="top" title="จบงาน"><i class="fas fa-file"></i></a>
                                                    <a href="" class="btn btn-danger btn-sm btn-del" data-toggle="tooltip" data-placement="top" title="ลบข้อมูล"><i class="far fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4</td>
                                                <td>00004</td>
                                                <td>นายสมชาย</td>
                                                <td>แจ้งเรื่อง</td>
                                                <td>12/10/2021</td>
                                                <td class="text-center"><i class="fas fa-circle text-warning"></i></td>
                                                <td class="text-center">
                                                    <a href="complaint_detail.php" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="รายละเอียด"><i class="fas fa-eye"></i></a>
                                                    <a href="complaint_status.php" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="รับเรื่องร้องเรียน"><i class="far fa-check-square"></i></a>
                                                    <a href="complaint_edit.php" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="แก้ไขข้อมูล"><i class="fas fa-edit"></i></a>
                                                    <a href="" class="btn btn-theme btn-sm" data-toggle="tooltip" data-placement="top" title="จบงาน"><i class="fas fa-file"></i></a>
                                                    <a href="" class="btn btn-danger btn-sm btn-del" data-toggle="tooltip" data-placement="top" title="ลบข้อมูล"><i class="far fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">5</td>
                                                <td>00005</td>
                                                <td>นายสมชาย</td>
                                                <td>แจ้งเรื่อง</td>
                                                <td>12/10/2021</td>
                                                <td class="text-center"><i class="fas fa-circle text-success"></i></td>
                                                <td class="text-center">
                                                    <a href="complaint_detail.php" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="รายละเอียด"><i class="fas fa-eye"></i></a>
                                                    <a href="complaint_status.php" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="รับเรื่องร้องเรียน"><i class="far fa-check-square"></i></a>
                                                    <a href="complaint_edit.php" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="แก้ไขข้อมูล"><i class="fas fa-edit"></i></a>
                                                    <a href="" class="btn btn-theme btn-sm" data-toggle="tooltip" data-placement="top" title="จบงาน"><i class="fas fa-file"></i></a>
                                                    <a href="" class="btn btn-danger btn-sm btn-del" data-toggle="tooltip" data-placement="top" title="ลบข้อมูล"><i class="far fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <p>สถานะ</p>
                                            <ul class="list-unstyled">
                                                <li><p><i class="fas fa-circle text-warning"></i> อยู่ระหว่างการดำเนินการ</p></li>
                                                <li><p><i class="fas fa-circle text-info"></i> อยู่ระหว่างการดำเนินการเหลืออีก 7 วันครบกำหนด</p></li>
                                                <li><p><i class="fas fa-circle text-danger"></i> ดำเนินการล่าช้ากว่ากำหนดโดยเกิน 45 วันที่กำหนด</p></li>
                                                <li><p><i class="fas fa-circle text-success"></i> ดำเนินการแล้วเสร็จ</p></li>
                                                <li><p><i class="fas fa-circle text-secondary"></i> กระทรวงฯ ส่งเรื่องร้องเรียนให้หน่วยงานแล้ว แต่หน่วยงานยังไม่รับเรื่อง</p></li>
                                            </ul>
                                        </div>
                                    </div>
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
    $('.btn-del').click(function(){
        if(confirm('ยืนยันการลบข้อมูล')==true){

        }else{
            event.preventdefault();
        }
    });
</script>
