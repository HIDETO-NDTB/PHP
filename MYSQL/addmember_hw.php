<?php
    include'./config.php';

    /*$stmt = $conn->prepare("INSERT INTO Students(username,age,email,gender) VALUES(?,?,?,?);");
    $stmt->bind_param("siss",$username,$age,$email,$gender);

    $username = "SEI";
    $age = "26";
    $email = "sei@yahoo.co.jp";
    $gender = "male";
    $stmt->execute();

    $username = "DAIKI";
    $age = "23";
    $email = "daiki@yahoo.co.jp";
    $gender = "male";
    $stmt->execute();

    $username = "KUMIKO";
    $age = "32";
    $email = "kumiko@yahoo.co.jp";
    $gender = "female";
    $stmt->execute();

    $username = "KANAKO";
    $age = "23";
    $email = "kanako@yahoo.co.jp";
    $gender = "female";
    $stmt->execute();

    $username = "SHO";
    $age = "22";
    $email = "shou@yahoo.co.jp";
    $gender = "male";
    $stmt->execute();

    $username = "HUKUCHAN";
    $age = "22";
    $email = "fukuchan@yahoo.co.jp";
    $gender = "male";
    $stmt->execute();

    $username = "SHIRAISHI";
    $age = "35";
    $email = "siraishi@yahoo.co.jp";
    $gender = "female";
    $stmt->execute();

    $username = "HIDETO";
    $age = "42";
    $email = "hideto@yahoo.co.jp";
    $gender = "male";
    $stmt->execute();*/

    $stmt = $conn->prepare("INSERT INTO prizes(prize_type,studentID) VALUES(?,?);");
    $stmt->bind_param("si",$prize_type,$studentID);

    $prize_type = "Silver";
    $studentID = "7";
    $stmt->execute();

    $prize_type = "Bronze";
    $studentID = "2";
    $stmt->execute();

    $prize_type = "Gold";
    $studentID = "5";
    $stmt->execute();

    $prize_type = "Gold";
    $studentID = "11";
    $stmt->execute();

    $prize_type = "Silver";
    $studentID = "8";
    $stmt->execute();

    $prize_type = "Silver";
    $studentID = "5";
    $stmt->execute();

    $prize_type = "Bronze";
    $studentID = "2";
    $stmt->execute();

    $prize_type = "Gold";
    $studentID = "7";
    $stmt->execute();

    $prize_type = "Silver";
    $studentID = "11";
    $stmt->execute();

    $prize_type = "Bronze";
    $studentID = "5";
    $stmt->execute();

    echo "New records inserted<br>";

    $stmt->close();
    $conn->close();

?>