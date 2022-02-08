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
        <h4 class="widget-title text-center p-h"> List of Student </h4>
        <div class="col-xxl-12">
            <table width="75%" border="5" class="authors-list" cellpadding="40px" cellspacing="0" style="margin:auto;">
                <caption>
                    <h1> </h1>
                </caption>
                <tr>
                    <th><u>Select</u></th>
                    <th><u>Name </u></th>
                    <th><u>Id</u> </th>
                    <th><u>Class</u> </th>


                </tr>

                <tr>

                    <th>
                        <input type="checkbox" class="input-group" name=" " id=" "></th>
                    <th>lara abu odeeh</th>
                    <th>444</th>
                    <th>7/A</th>
                </tr>

                <tr>
                    <th>
                        <input type="checkbox" class="input-group" name=" " id=" "></th>
                    <th>yara abu odeeh</th>
                    <th>444</th>
                    <th>7/A</th>
                </tr>

                <tr>

                    <th>
                        <input type="checkbox" class="input-group" name=" " id=" "></th>
                    <th>mona abu odeeh</th>
                    <th>4124</th>
                    <th>7/A</th>
                </tr>

                <tr>

                    <th>
                        <input type="checkbox" class="input-group" name=" " id=" "></th>
                    <th>dena abu odeeh</th>
                    <th>324</th>
                    <th>9/a</th>
                </tr>
                <tr>

                    <th>
                        <input type="checkbox" class="input-group" name=" " id=" "></th>
                    <th>tala abu odeeh</th>
                    <th>454</th>
                    <th>7/c</th>
                </tr>



            </table>
        </div>
        <form>
            <label> Student Name</label>
            <input type="text" class="input-group" name="" id="">
            <label> Student Id </label>
            <input type="number" class="input-group" name="" id="">
            <label> Teacher Subject </label>
            <input type="text" class="input-group" name="" id="">
            <label> Student Class </label>
            <input type="text" class="input-group" name="" id="">
            <label> Student Image</label>
            <input type="file" accept="jpg" class="input-group" name="" id="">
            <br>
        </form>
        <button type="submit" class="btn btn-primary add-author" name="formBtn">
            Add item
          </button>
        <button type="submit" class="btn btn-primary " name="formBtn">
            Remove item
          </button>
        <!-- Page Pagination End -->

        <!-- Page Pagination End -->
    </div>
    <!-- Student's Widget End -->
</div>
<!-- Student Top Start -->


</div>

<?php include('foot.php') ?>