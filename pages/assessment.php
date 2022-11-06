<!-- Student will give their assessments on this page -->
<?php error_reporting(0); ?>
<?php include('../backend/auth/session.php'); ?>
<?php include('../templates/htmlhead.php') ?>
<?php include('../templates/header.php'); ?>
<?php
    include('../config/db_connect.php');

    $internship_id = $_GET['internship_id'];
    
    $sql = "SELECT question_id, question FROM questions WHERE internship_id=$internship_id";
    $result = mysqli_query($conn, $sql);
    $questions = mysqli_fetch_all($result);

    $num_questions = count($questions);

    $curr_ques = 0;
    $ques_str = "";
?>
<div class="mx-24 my-8">
    <form action="../backend/applications/create.php" method="POST">
        <div class="my-2">
            <?php foreach ($questions as $question) { ?>
                <?php 
                    $curr_ques = $question[0];
                    $ques_str .= strval($curr_ques) . ","; 
                    $label_id = "ques_" . strval($curr_ques);
                    $ans_id = "ans_" . strval($curr_ques);
                ?>
                <input type="hidden" name="<?php echo $label_id ?>" id="<?php echo $label_id ?>" value="<?php echo $curr_ques ?>" >
                <label class="block text-gray-700 text-sm font-bold mb-2" for="<?php echo $ans_id ?>"><?php echo $question[1] ?></label>
                <textarea name="<?php echo $ans_id ?>" id="<?php echo $ans_id ?>" class="w-full border border-gray-400 p-3" rows="10"></textarea>
            <?php } ?>
            <input type="hidden" name="internship_id" id="internship_id" value="<?php echo $internship_id; ?>">
            <input type="hidden" name="ques_ids" id="ques_ids" value="<?php echo $ques_str; ?>">
        </div>
        <div class="text-center text-white mt-8 mb-16">
            <input type="submit" class="btn bg-green-500 rounded-full px-8 py-3" value="Submit" name="apply" id="apply">    
        </div>
    </form>
</div>

<?php include('../templates/footer.php') ?>
<?php include('../templates/htmlfoot.php'); ?>