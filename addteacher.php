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
        <h4 class="widget-title text-center p-h"> List of Teachers</h4>
        <div class="col-xxl-12">
            <table width="75%" border="5" class="authors-list" cellpadding="40px" cellspacing="0" style="margin:auto;">
                <caption>
                    <h1> </h1>
                </caption>
                <tr>
                    <th><u>Select</u></th>
                    <th><u>Name </u></th>
                    <th><u>Id</u> </th>
                    <th><u>Subject</u> </th>
                    <th><u>Class</u> </th>


                </tr>

                <tr>

                    <th>
                        <input type="checkbox" class="input-group" name=" " id=" "></th>
                    <th>Dana AL Broud</th>
                    <th> 46523</th>
                    <th>Arabic</th>
                    <th>7/A</th>
                </tr>

                <tr>
                    <th>
                        <input type="checkbox" class="input-group" name=" " id=" "></th>
                    <th>Roaa AL Broud</th>
                    <th> 11523</th>
                    <th>Math</th>
                    <th>8/C</th>
                </tr>

                <tr>

                    <th>
                        <input type="checkbox" class="input-group" name=" " id=" "></th>
                    <th>Dareen AL Broud</th>
                    <th> 231623</th>
                    <th>Islamic</th>
                    <th>7/A</th>
                </tr>

                <tr>

                    <th>
                        <input type="checkbox" class="input-group" name=" " id=" "></th>
                    <th>Eman AL Broud</th>
                    <th> 89893</th>
                    <th>History</th>
                    <th>6/C</th>
                </tr>
                <tr>

                    <th>
                        <input type="checkbox" class="input-group" name=" " id=" "></th>
                    <th>Lara AL Broud</th>
                    <th> 234523</th>
                    <th>English</th>
                    <th>5/B</th>
                </tr>



            </table>
        </div>
        <form>
            <label> Teacher Name</label>
            <input type="text" class="input-group" name="" id="">
            <label> Teacher Id </label>
            <input type="number" class="input-group" name="" id="">
            <label> Teacher Subject </label>
            <input type="text" class="input-group" name="" id="">
            <label> Teacher Class </label>
            <input type="text" class="input-group" name="" id="">
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