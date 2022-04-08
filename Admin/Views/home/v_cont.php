
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Review Table</h4>
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
                                <th>Email</th>
                                <th>Number phone</th>
                                <th>Address</th>
                                <th>Message</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($listContact as $key => $contact)
                            {
                                ?>
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td><?php echo $contact->name; ?></td>
                                    <td><?php echo $contact->email; ?></td>
                                    <td><?php echo $contact->numberphone; ?></td>
                                    <td><?php echo $contact->address; ?></td>
                                    <td><?php echo $contact->message; ?></td>
                                    <td><?php echo $contact->date; ?></td>

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