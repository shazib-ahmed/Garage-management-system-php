<?php include('./constant/layout/head.php'); ?>


<?php include('./constant/layout/header.php'); ?>

<?php //include('./constant/layout/sidebar.php');
?>

<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Add Categories Management</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Add Categories</li>
            </ol>
        </div>
    </div>



    <div class="container-fluid">

        <marquee direction="left" behavior="alternate" scrollamount="1">
            <h3 style="color:red"><b>Alert : Do not sell or publish this script with your name. But you can use it for academic learning purposes! The sole owner of this code is <a href="https://www.youtube.com/@codecampbdofficial" target="_blank">Code Camp BD</a>.</b></h3>
        </marquee>


        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card">
                    <div class="card-title">

                    </div>
                    <div id="add-brand-messages"></div>
                    <div class="card-body">
                        <div class="input-states">
                            <form class="form-horizontal" method="POST" id="submitBrandForm" action="php_action/createCategories.php" enctype="multipart/form-data">


                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Categories Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="categoriesName" placeholder="Categories Name" name="categoriesName" required="" pattern="^[a-z A-z]+$" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Status</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="categoriesStatus" name="categoriesStatus">
                                                <option value="">~~SELECT~~</option>
                                                <option value="1">Available</option>
                                                <option value="2">Not Available</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <button type="submit" name="create" id="createCategoriesBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>





        <?php include('./constant/layout/footer.php'); ?>