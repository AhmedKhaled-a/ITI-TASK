<html>

<head>
    <style>
        .input {
            margin-bottom: 15px;
        }

        .required {
            color: red;
            margin-left: 10px;
        }
    </style>
</head>

<body>

<?php 

$name = $email = $group = $classDetails = $gender = $courses = $agree = "";
$nameErr = $emailErr = $genderErr = $coursesErr = $agreeErr = "";

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["group"])) {
        $group = "";
    } else {
        $group = test_input($_POST["group"]);
    }

    if (empty($_POST["classDetails"])) {
        $classDetails = "";
    } else {
        $classDetails = test_input($_POST["classDetails"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["courses"])) {
        $coursesErr = "At least one course must be selected.";
    } else {
        $courses = $_POST["courses"];
    }

    if (empty($_POST["agree?"])) {
        $agreeErr = "you must agree to the terms";
    } else {
        $agree = test_input($_POST["agree?"]);
    }
}
?>

    <form action="<?php $_PHP_SELF ?>" method="POST">
        <div class="input">
            <label for="">Name: </label>
            <input type="text" name="name" value="<?php echo $name ?>">
            <span class="required">* <?php echo $nameErr;?></span>
            
        </div>

        <div class="input">
            <label for="">Email: </label>
            <input type="email" name="email" value="<?php echo $email ?>">
            <span class="required">* <?php echo $emailErr;?></span>
            
        </div>

        <div class="input">
            <label for="">Group: </label>
            <input type="text" name="group" value="<?php echo $group ?>">
        </div>

        <div class="input">
            <label for="">Class details: </label>
            <textarea name="classDetails" cols="20" rows="3" ><?php echo $classDetails ?></textarea>
        </div>

        <div class="input">
            <label for="">gender: </label>
            <input type="radio" name="gender" value="male" <?php if (isset($gender) && $gender=="male") echo "checked";?>>
            <label>Male</label>
            <input type="radio" name="gender" value="female" <?php if (isset($gender) && $gender=="female") echo "checked";?>>
            <label>Female</label>
            <span class="required">* <?php echo $genderErr;?></span>
            
        </div>

        <div class="input">
            <label for="">Select Courses : </label>
            <select name="courses[]" multiple>
                <option value="PHP" <?php if(!empty($courses)){
                    foreach ($courses as $option) {
                        if ($option  == 'PHP') {echo "selected";}
                    }
                }?>>PHP</option>
                <option value="javascript" <?php if(!empty($courses)){
                    foreach ($courses as $option) {
                        if ($option  == 'javascript') {echo "selected";}
                    }
                }?>>javascript</option>
                <option value="MySQL" <?php if(!empty($courses)){
                    foreach ($courses as $option) {
                        if ($option  == 'MySQL') {echo "selected";}
                    }
                }?>>MySQL</option>
                <option value="HTML" <?php if(!empty($courses)){
                    foreach ($courses as $option) {
                        if ($option  == 'HTML') {echo "selected";}
                    }
                }?>>HTML</option>
            </select>
            <span class="required">* <?php echo $coursesErr;?></span>
        </div>

        <div class="input">
            Agree : <input type="checkbox" name="agree?" <?php if(!empty($agree)){echo "checked"; } ?>>
            <span class="required">* <?php echo $agreeErr;?></span>
        </div>

        <input type="submit" value="sumbit" name="submitButton">
    </form>
</body>

</html>

<?php
// print_r($_REQUEST);

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = test_input($_POST["name"]);
//     $email = test_input($_POST["email"]);
//     $group = test_input($_POST["group"]);
//     $classDetails = test_input($_POST["classDetails"]);
//     $gender = test_input($_POST["gender"]);
//     $courses = test_input($_POST["courses"]);
//     $agree = test_input($_POST["agree?"]);
// }





if (isset($_REQUEST['submitButton'])) {
    if ($_REQUEST['name'] && $_REQUEST['email'] && $_REQUEST['group']  && $_REQUEST['gender'] && $_REQUEST['courses'] && $_REQUEST['agree?']) {
        echo "<h1>Your given values are :</h1> <br>";
        echo "Name: " . $_REQUEST['name'] . "<br>";
        echo "Email: " . $_REQUEST['email'] . "<br>";
        echo "Group: " . $_REQUEST['group'] . "<br>";
        echo "Class details: " . $_REQUEST['classDetails'] . "<br>";
        echo "Gender: " . $_REQUEST['gender'] . "<br>";
        echo "Your courses are: ";
        if (!empty($_REQUEST['courses'])) {
            // print_r($_REQUEST['courses']);
            foreach ($_REQUEST['courses'] as $option) {
                echo $option . ' ';
            }
        }
        // if(isset($_POST['courses'])){
        //     if (!empty($POST['courses'])){
        //         foreach ($POST['courses'] as $option) {
        //             echo $option . ' ';
        //         }
        //     }
        // }
    }
}

?>