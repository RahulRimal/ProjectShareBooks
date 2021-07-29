<?php

class Post
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function getSellingPostsCount($uid)
    {
        $this->db->query("SELECT * FROM post WHERE userId = :userId
                          AND postType = :postTypeTag    
                        ");

        $this->db->bind(':userId', $uid);
        $this->db->bind(':postTypeTag', 0);

        $rows = $this->db->resultset();

        return $this->db->rowCount();
    }

    public function getBuyingPostsCount($uid)
    {
        $this->db->query("SELECT * FROM post WHERE userId = :userId
                          AND postType = :postTypeTag    
                        ");

        $this->db->bind(':userId', $uid);
        $this->db->bind(':postTypeTag', 1);

        $rows = $this->db->resultset();

        return $this->db->rowCount();
    }


    public function getUserAllPosts($uid)
    {
        $this->db->query("SELECT * FROM post WHERE userId = :userId ");
        $this->db->bind(':userId', $uid);

        $rows = $this->db->resultset();

        return $rows;
    }

    public function getAllPosts()
    {
        $this->db->query("SELECT * FROM post");

        $rows = $this->db->resultset();

        return $rows;
    }


    public function getPost($pid)
    {
        $this->db->query("SELECT * FROM post WHERE id = :postId ");
        $this->db->bind(':postId', $pid);

        $row = $this->db->single();

        return $row;
    }





    public function userIdFromPost($pid)
    {
        $this->db->query("SELECT userId FROM post WHERE id = :postId");

        $this->db->bind(':postId', $pid);

        $row = $this->db->single();

        return $row->userId;
    }



}
?>