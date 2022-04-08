
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">User Table</h4>
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
                                <th>Birthday</th>
                                <th>Identity card</th>
                                <th>Address</th>
                                <th>Number phone</th>
                                <th>Email</th>
                                <th>Sex</th>
                                <th>Create At</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($listU as $key => $user) {
                            ?>
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td><?php echo $user->name; ?></td>
                                <td><?php echo $user->date; ?></td>
                                <td><?php echo $user->identity_card; ?></td>
                                <td><?php echo $user->adress; ?></td>
                                <td><?php echo $user->numberphone; ?></td>
                                <td><?php echo $user->email; ?></td>
                                <td><?php echo $user->sex; ?></td>
                                <td><?php echo $user->date_create; ?></td>
                                <td><span class="badge badge-pill badge-<?php if($user->status==1)
                                    {
                                        echo "danger";
                                    }
                                    else
                                    {
                                        echo "info";
                                    }

                                    ?>
                                         float-right"><?php if($user->status==0)
                                        {
                                            echo "Active";
                                        }
                                        else
                                        {
                                            echo "inactive";
                                        }?></span>
                                </td>
                                <?php if($user->status==0){ ?>
                                <td>
                                    <a class="btn bg-danger" href="javascript:question_confirm_User(<?php echo $user->id;?>)" title="delete">
                                        <i class=" fas fa-trash" ></i>
                                    </a>
                                </td>
                                <?php } ?>
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