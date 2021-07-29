<?php require('core/init.php');?>


<?php

    $template = new Template('templates/post-page.php');

    $post = new Post();
    $user = new User();

    $postId = isset($_GET['post']) ? $_GET['post'] : null;

    if($postId != null)
    {
        $uid = $post->userIdFromPost($postId);

        
        $template->userInfo = $user->getUserInfo($uid);
        
        $template->followers = $user->userFollowersCount($uid);
        $template->userRating = $user->userOverallRating($uid);

        $template->post = $post->getPost($postId);

    }
    else
    {
        redirect('index.php');
    }



    

    echo $template;

?>