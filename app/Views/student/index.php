<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Important CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Data Table CSS-->
    <link href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Alertify CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.css" integrity="sha512-MpdEaY2YQ3EokN6lCD6bnWMl5Gwk7RjBbpKLovlrH6X+DRokrPRAF3zQJl1hZUiLXfo2e9MrOt+udOnHCAmi5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.min.css" integrity="sha512-IXuoq1aFd2wXs4NqGskwX2Vb+I8UJ+tGJEu/Dc0zwLNKeQ7CW3Sr6v0yU3z5OQWe3eScVIkER4J9L7byrgR/fA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Popper and JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <!--<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.css">-->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <title>Dashboard</title>
    <style>
         
    </style>
</head>
<body>

<!-- Student Modal -->
<div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="studentModalLabel">Student Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Full Name</label> <span id="error_name" class="text-danger ms-3"></span>
            <input type="text" class="form-control name" placeholder="Enter Full Name">
        </div>
        <div class="form-group">
            <label>Email</label> <span id="error_email" class="text-danger ms-3"></span>
            <input type="email" class="form-control email" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label>Phone</label> <span id="error_phone" class="text-danger ms-3"></span>
            <input type="text" class="form-control phone" placeholder="Enter Phone Number">
        </div>
        <div class="form-group">
            <label>Course</label> <span id="error_course" class="text-danger ms-3"></span>
            <input type="text" class="form-control course" placeholder="Enter Course">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary ajaxstudent-save">Save</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 my-4">

        <?php 
            if(session()->getFlashdata('status')) {
                echo "<h4>".session()->getFlashdata('status')."</h4>";
            }
        ?>

            <h1 class="text-center">jQuery Ajax CRUD Application - in Codeigniter 4</h1>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>jQuery Ajax CRUD - Student Data</h4>
                    <a href="#" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#studentModal" >Add Student</a>
                </div>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Data Table JS-->
<script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script> 

    <script type="text/javascript">
        /* Data Table */
        $(document).ready(function(){
            $('#mydatatable').DataTable();
        });

        /* Save Student Data */
        $(document).ready(function () {

            $(document).on('click','.ajaxstudent-save', function () {
                
                // Form Validation
                if($.trim($('.name').val()).length == 0) {
                    error_name = 'Please enter full name';
                    $('#error_name').text(error_name);
                } else {
                    error_name = '';
                    $('#error_name').text(error_name);
                }

                if($.trim($('.email').val()).length == 0) {
                    error_email = 'Please enter email ID';
                    $('#error_email').text(error_email);
                } else {
                    error_email = '';
                    $('#error_email').text(error_email);
                }

                if($.trim($('.phone').val()).length == 0) {
                    error_phone = 'Please enter phone number';
                    $('#error_phone').text(error_phone);
                } else {
                    error_phone = '';
                    $('#error_phone').text(error_phone);
                }

                if($.trim($('.course').val()).length == 0) {
                    error_course = 'Please enter course name';
                    $('#error_course').text(error_course);
                } else {
                    error_course = '';
                    $('#error_course').text(error_course);
                }

                // Save the data
                if(error_name != '' || error_email != '' || error_phone != '' || error_course != '') {
                    return false;
                } else {
                    var data = {
                        'name': $('.name').val(),
                        'email': $('.email').val(),
                        'phone': $('.phone').val(),
                        'course': $('.course').val(),
                    };
                    $.ajax({
                        method: "POST",
                        url: "/ajax-student/store",
                        data: data,
                        success: function (response) {
                            // Close the Modal before showing the success message
                            $('#studentModal').modal('hide');
                            $('#studentModal').find('input').val('');   // make the input field null

                           // Success message with alertify
                            alertify.set('notifier','position','top-right');
                            alertify.success(response.status);
                        }
                    });
                }


            });

        });

    </script>
    <!-- Alertify CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js" integrity="sha512-JnjG+Wt53GspUQXQhc+c4j8SBERsgJAoHeehagKHlxQN+MtCCmFDghX9/AcbkkNRZptyZU4zC8utK59M5L45Iw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.js" integrity="sha512-eOUPKZXJTfgptSYQqVilRmxUNYm0XVHwcRHD4mdtCLWf/fC9XWe98IT8H1xzBkLL4Mo9GL0xWMSJtgS5te9rQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
</body>
</html>