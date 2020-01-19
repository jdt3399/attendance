<?php 
        $title = 'Success';
        require_once 'includes/header.php'; 
        require_once 'db/conn.php';

        if(isset($_POST['submit'])){
            //extract values from the $_POST array
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $dob = $_POST['dob'];
            $email = $_POST['email'];
            $contact = $_POST['phone'];
            $specialty = $_POST['specialty'];
            //Call function to insert and track if success or not
            $isSuccess = $crud->insertAttendees($fname,$lname,$dob,$email,$contact,$specialty);

            if($isSuccess){
                #echo '<h1 class="text-center text-success">You have been registered</h1>';
                include 'includes/successmessage.php';
            } else {
                #echo '<h1 class="text-center text-danger">There was an error in processing</h1>';
                include 'includes/errormessage.php';
            }

        }

    ?>

    

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
            <?php echo $_POST['firstname'].' '. $_POST['lastname']; ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
            <?php echo $_POST['specialty']; ?>
            </h6>
            <p class="card-text">
                Date Of Birth: <?php echo $_POST['dob']; ?>
            </p>
            <p class="card-text">
                Email Address: <?php echo $_POST['email']; ?>
            </p>
            <p class="card-text">
                Contact Number: <?php echo $_POST['phone']; ?>
            </p>
        </div>
    </div>

    <?php 
        #echo $_GET['firstName'];
        #echo $_GET['lastName'];
        #echo $_GET['dob'];
        #echo $_GET['specialty'];
        #echo $_GET['email'];
        #echo $_GET['phone'];
    ?>

<br>
    <?php require_once 'includes/footer.php'; 
    ?>