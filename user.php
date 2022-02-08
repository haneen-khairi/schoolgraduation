<?php include('head.php') ?>


<div class="page-content-wrapper py-0">

<!-- Admin Tab Menu Start -->
<div class="nav flex-column admin-tab-menu">
    <a href="admin.php">Home</a>
    <a href="addteacher.php">Add Teacher</a>
    <a href="addstudent.php"> Add Student</a>
    <a href="addclass.php"> Add Class</a>
    <a href="user.php"> User</a>
</div>
<!-- Admin Tab Menu End -->

<!-- Admin Tab Menu End -->
<div class="main-content-wrapper">
    <div class="container-fluid">
        <h4 class="widget-title text-center p-h">New User Account</h4>
        <div class="col-xxl-12">

        </div>
        <form>
            <label>Name :</label>
            <input type="text" class="input-group" name="" id="">
            <label> UserName : </label>
            <input type="text" class="input-group" name="" id="">
            <label> Password : </label>
            <input type="password" class="input-group" name="" id="">

            <label>Contact :</label>
            <input type="text" class="input-group" name="" id="">
            <br>

            <select class="select2-dropdown" name="admition :" id="">
                <option value=""> Teacher</option>
                <option value=""> Student</option>
                <option value=""> Admin</option>
                <option value=""> Class</option>
            </select>
            <br>
            <br>

        </form>
        <button type="submit" class="btn btn-primary add-author" name="formBtn">
            Add item
          </button>
        <button type="submit" class="btn btn-primary " name="formBtn">
            Remove item
          </button>
        <br>
        <br>
        <br>
        <!-- Page Pagination End -->

        <!-- Page Pagination End -->
    </div>
    <!-- Student's Widget End -->
</div>
<!-- Student Top Start -->


</div>

<?php include('foot.php') ?> 