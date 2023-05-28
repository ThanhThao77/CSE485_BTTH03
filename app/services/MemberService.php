<?php
require_once APP_ROOT . "/app/libs/DBConnect.php";
require_once APP_ROOT . '/app/models/Member.php';
class MemberService
{
    public static function getAllMembers()
    {
        $pdo = new DBConnect();
        $conn = $pdo->getConnection();
        $sql = "select * from member order by id desc ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $members = [];
        while ($row = $stmt->fetch()) {
            $member = new Member($row['id'],$row['forename'],$row['surname'],$row['email'],$row['password'],$row['joined'],$row['picture']);
            $members[] = $member;
        }
        return $members;
    }
}