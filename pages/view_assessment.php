<!-- Student will give their assessments on this page -->
<?php include('../backend/auth/session.php'); ?>
<?php include('../templates/htmlhead.php') ?>
<?php include('../templates/header.php'); ?>
<?php
    include('../config/db_connect.php');

    $internship_id = $_GET['internship_id'];
    $student_id = $_GET['student_id'];
    $user_id = $_GET['user_id'];

    $sql = "SELECT question_id, question FROM questions WHERE internship_id=$internship_id";
    $result = mysqli_query($conn, $sql);
    $questions = mysqli_fetch_all($result);

    $sql2 = "SELECT question_id, answer FROM assessment WHERE student_id=$student_id";
    $result2 = mysqli_query($conn, $sql2);
    $answers = mysqli_fetch_all($result2);

    $num_questions = count($questions);

    $curr_ques = 0;
    $ques_str = "";
    
?>
<div class="mx-24 my-8">
    <div class="my-2">
        <?php for( $i = 0; $i<count($questions); $i++) { ?>
            <?php 
                $curr_ques = $questions[$i][0];
                $ques_str .= strval($curr_ques) . ","; 
                $label_id = "ques_" . strval($curr_ques);
                $ans_id = "ans_" . strval($curr_ques);
            ?>
            <input type="hidden" name="<?php echo $label_id ?>" id="<?php echo $label_id ?>" value="<?php echo $curr_ques ?>" >
            <label class="block text-gray-700 text-sm font-bold mb-2" for="<?php echo $ans_id ?>"><?php echo $questions[$i][1] ?></label>
            <textarea readonly name="<?php echo $ans_id ?>" id="<?php echo $ans_id ?>" class="w-full border border-gray-400 p-3" rows="10"><?php print_r($answers[$i][1])?></textarea>
        <?php } ?>
        <input type="hidden" name="internship_id" id="internship_id" value="<?php echo $internship_id; ?>">
        <input type="hidden" name="ques_ids" id="ques_ids" value="<?php echo $ques_str; ?>">
    </div>
    <div class="text-center text-white mt-8 mb-16">
        <?php
            $sql3 = "SELECT * FROM user WHERE uuid='$user_id'";
            $result3 = mysqli_query($conn, $sql3);
            $user = mysqli_fetch_assoc($result3);
            $username = $user['email'];
        ?>
        <a target="_blank" href="mailto:<?php echo $username;?>" class="btn bg-green-500 rounded-full px-8 py-3">Contact Student</a>    
    </div>
</div>

<?php include('../templates/footer.php') ?>
<?php include('../templates/htmlfoot.php'); ?>