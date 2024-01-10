<?php
require_once 'authentication.php';


function displayPendingComments() {
    $pendingComments = getPendingComments();
    foreach ($pendingComments as $comment) {
        echo '<div>';
        echo '<p>' . $comment['text'] . '</p>';
        echo '<form method="post" action="approve_comment.php">';
        echo '<input type="hidden" name="comment_id" value="' . $comment['id'] . '">';
        echo '<input type="submit" value="Approve Comment">';
        echo '</form>';
        echo '<form method="post" action="reject_comment.php">';
        echo '<input type="hidden" name="comment_id" value="' . $comment['id'] . '">';
        echo '<input type="submit" value="Reject Comment">';
        echo '</form>';
        echo '</div>';
    }
}

function displayRejectedComments() {
    $rejectedComments = getRejectedComments();
    foreach ($rejectedComments as $comment) {
        echo '<div>';
        echo '<p>' . $comment['text'] . '</p>';
        echo '<form method="post" action="approve_comment.php">';
        echo '<input type="hidden" name="comment_id" value="' . $comment['id'] . '">';
        echo '<input type="submit" value="Approve Comment">';
        echo '</form>';
        echo '</div>';
    }
}
?>


