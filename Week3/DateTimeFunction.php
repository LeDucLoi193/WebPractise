<!DOCTYPE html>
<html>
<head>
  <title>Date time - birthday</title>
</head>
<body>
  <font size="4" color="black">Enter information</font>

  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
    <input type="text" name="name1" placeholder="Name person 1..." />
    <label>Birthday: </label>
    <select name="day1">
      <?php 
        for ($i = 1; $i <= 31; ++$i) {
          print("<option>$i</option>");
        }
      ?>
    </select>
    <select name="month1">
      <?php 
        for ($i = 1; $i <= 12; ++$i) {
          print("<option>$i</option>");
        }
      ?>
    </select>
    <select name="year1">
      <?php 
        for ($i = 1900; $i < 2021; ++$i) {
          print("<option>$i</option>");
        }
      ?>
    </select>
    <br>
    <input type="text" name="name2" placeholder="Name person 2..." />
    <label>Birthday: </label>
    <select name="day2">
      <?php 
        for ($i = 1; $i <= 31; ++$i) {
          print("<option>$i</option>");
        }
      ?>
    </select>
    <select name="month2">
      <?php 
        for ($i = 1; $i <= 12; ++$i) {
          print("<option>$i</option>");
        }
      ?>
    </select>
    <select name="year2">
      <?php 
        for ($i = 1900; $i < 2021; ++$i) {
          print("<option>$i</option>");
        }
      ?>
    </select>
    <br>
    <input type="submit" value="Submit"/>
    <input type="reset" value="Reset"/>
  </form>

  <?php
    # not check for nam nhuan :v
    function validateBirthday($day, $month) {
      if ($month == 2) {
        if ($day == 29 || $day == 30 || $day == 31) {
          echo "<p>Day must be smaller than 29.</p>";
          return false;
        }

      } else if ($month == 4 || $month == 6 || $month == 9 || $month == 11) {
        if ($day == 31) {
          echo "<p>Day must be smaller than 31.</p>";
          return false;
        }
      }

      return true;
    }

    function printInLetter($day, $month, $year) {
      if ($month == 1) {
        echo "<p>Date of birth: January ".$day.", ".$year."</p>";
      } else if ($month == 2) {
        echo "<p>Date of birth: February ".$day.", ".$year."</p>";
      } else if ($month == 3) {
        echo "<p>Date of birth: March ".$day.", ".$year."</p>";
      } else if ($month == 4) {
        echo "<p>Date of birth: April ".$day.", ".$year."</p>";
      } else if ($month == 5) {
        echo "<p>Date of birth: May ".$day.", ".$year."</p>";
      } else if ($month == 6) {
        echo "<p>Date of birth: June ".$day.", ".$year."</p>";
      } else if ($month == 7) {
        echo "<p>Date of birth: July ".$day.", ".$year."</p>";
      } else if ($month == 8) {
        echo "<p>Date of birth: August ".$day.", ".$year."</p>";
      } else if ($month == 9) {
        echo "<p>Date of birth: September ".$day.",".$year."</p>";
      } else if ($month == 10) {
        echo "<p>Date of birth: Octorber ".$day.", ".$year."</p>";
      } else if ($month == 11) {
        echo "<p>Date of birth: November ".$day.", ".$year."</p>";
      } else if ($month == 12) {
        echo "<p>Date of birth: December ".$day.", ".$year."</p>";
      }
    }

    // not calculate for nam nhuan :v
    function diffDays($day1, $month1, $day2, $month2) {
      if ($month1 == 2) {
        $total1 = $day1 + 28 + 365;
      } else if ($month1 == 4 || $month1 == 6 || $month1 == 9 || $month1 == 11) {
        $total1 = $day1 + 30 + 365;
      } else {
        $total1 = $day1 + 31 + 365;
      }

      if ($month2 == 2) {
        $total2 = $day2 + 28 + 365;
      } else if ($month2 == 4 || $month2 == 6 || $month2 == 9 || $month2 == 11) {
        $total2 = $day2 + 30 + 365;
      } else {
        $total2 = $day2 + 31 + 365;
      }

      $diff = $total2 - $total1;
      if ($diff < 0) 
        $diff = - $diff;

      echo "<p>Diffent days between 2 birthdays are ".$diff."</p>";
    }

    function age($year1, $year2) {
      $age1 = 2020 - $year1;
      $age2 = 2020 - $year2; 
      $diff = $age1 - $age2;
      if ($diff < 0) 
        $diff = - $diff;
 
      echo "<p>Person 1 is ".$age1." years old.</p>";
      echo "<p>Person 2 is ".$age2." years old.</p>";
      echo "<p>Diffent years between 2 persons are ".$diff."</p>";
    }
        
    if (array_key_exists("name1", $_GET))
      echo "<p>Person1: ".$_GET["name1"]."</p>";
    if (array_key_exists("name2", $_GET))
      echo "<p>Person2: ".$_GET["name2"]."</p>";

    $day1 = $_GET["day1"];
    $month1 = $_GET["month1"];
    $year1 = $_GET["year1"];
    $day2 = $_GET["day2"];
    $month2 = $_GET["month2"];
    $year2 = $_GET["year2"];

    if (!validateBirthday($day1, $month1) || !validateBirthday($day2, $month2)) {
      echo "Exit...";
    } else {
      printInLetter($day1, $month1, $year1);
      printInLetter($day2, $month2, $year2);
      diffDays($day1, $month1, $day2, $month2);
      age($year1, $year2);
    }
  ?>

</body>
</html>