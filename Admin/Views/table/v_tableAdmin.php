<?php
include ("Models/m_login.php");
include ("Models/m_adminPosition.php");
?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Admin Table</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- ./card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr style="background-color: rgb(236, 236, 236);">
                                <th>Name</th>
                                <th>Position</th>
                                <th>Email</th>
                                <th>Create At</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $m_login = new m_login();
                            $listA=$m_login->read_admin();
                            $m_position = new m_adminPosition();

                            foreach ($listA as $key => $admin) {
                            ?>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td><?php echo $admin->name_admin; ?></td>
                                <td><?php $ap = $m_position->read_position_by_id($admin->id_adminPosition);
                                    echo $ap->position;
                                    ?></td>
                                <td><?php echo $admin->email; ?></td>
                                <td><?php echo $admin->date_sign_up; ?></td>
                                <td><span class="badge badge-pill badge-<?php if($admin->status==1)
                                    {
                                        echo "danger";
                                    }
                                    else
                                    {
                                        echo "info";
                                    }

                                    ?>
                                         float-right"><?php if($admin->status==0)
                                        {
                                            echo "Active";
                                        }
                                        else
                                        {
                                            echo "inactive";
                                        }?></span>
                                </td>

                            </tr>
                            <?php
                            }
                            ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->

        <!-- /.row -->
    </div><!-- /.container-fluid -->
    <!-- /.content -->
    <footer class="footer text-center">
        All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
    </footer>
</div>
