<?php

    function uploadPDF($resume, $username) {
        $resume_link = "";

        if ( isset( $resume ) ) {
            if ($resume['type'] == "application/pdf") {
                $source_file = $resume['tmp_name'];
                $dest_file = "/interno/assets/resume/" . $username;

                move_uploaded_file( $source_file, $dest_file ) or die ("Error!!");

                if($resume['error'] == 0) {
                    $resume_link .= $dest_file;
                }

            }
            else {
                echo "<script>alert('File Type Not Supported');</script>";
            }
        }

        return $resume_link;
    }

?>