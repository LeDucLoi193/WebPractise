<html>
<head>
  <title>Date and Time Processing</title>
</head>
<body>
  <font size="5" color="black">Gen date and time</font>
  <br>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
    <table>
      <tr>
        <td>Your name: </td>
        <td>
          <input type="text" name="name" placeholder="Your name..." />
        </td>
      </tr>

      <tr>
        <td>Date:</td>
        <td>
          <select name="day">
            <?php 
              for ($i = 1; $i < 31; ++$i) {
                print("<option>$i</option>");
              }
            ?>
          </select>
        </td>
        <td>
          <select name="month">
            <?php 
              for ($i = 1; $i < 12; ++$i) {
                print("<option>$i</option>");
              }
            ?>
          </select>
        </td>
        <td>
          <select name="year">
            <?php 
              for ($i = 1000; $i < 10000; ++$i) {
                print("<option>$i</option>");
              }
            ?>
          </select>
        </td>
      </tr>

      <tr>
        <td>Time:</td>
        <td>
          <select name="hour">
            <?php 
              for ($i = 1; $i < 25; ++$i) {
                print("<option>$i</option>");
              }
            ?>
          </select>
        </td>
        <td>
          <select name="minute">
            <?php 
              for ($i = 0; $i < 61; ++$i) {
                print("<option>$i</option>");
              }
            ?>
          </select>
        </td>
        <td>
          <select name="second">
            <?php 
              for ($i = 0; $i < 61; ++$i) {
                print("<option>$i</option>");
              }
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td align="right">
          <input type="submit" value="Submit" />
        </td>
        <td align="left">
          <input type="reset" value="Reset" />
        </td>
      </tr>
    </table>

    <table>
      <h4>
        Hi <?php 
          if (array_key_exists("name", $_GET))
            echo $_GET["name"]
        ?>
      </h4>
      <p>You have choose an appointment on 
        <?php
          $hour = $_GET["hour"];
          $minute = $_GET["minute"];
          $second = $_GET["second"];
          $day = $_GET["day"];
          $month = $_GET["month"];
          $year = $_GET["year"];
          echo $hour.":".$minute.":".$second.", ".$day."/".$month."/".$year;
        ?>
      </p>
      <p>More infomation</p>
      <p>In 12 hours, the time and date is 
        <?php
          $hour = $_GET["hour"];
          $minute = $_GET["minute"];
          $second = $_GET["second"];
          $day = $_GET["day"];
          $month = $_GET["month"];
          $year = $_GET["year"];

          if ($hour > 12) {
            $hour = 24 - $hour;
          }

          echo $hour.":".$minute.":".$second." PM, ".$day."/".$month."/".$year;
        ?>
      </p>

      <p>
        This month has 
        <?php
          $month = $_GET["month"];
          $year = $_GET["year"];
          if ($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12) {
              echo "31 days.";
            } 
            else if ($month == 4 || $month == 6 || $month == 9 || $month == 11) {
              echo "30 days.";
          } else {
            if ($year % 100 == 0) {
              if ($year % 400 == 0)
                echo "29 days.";
              else 
                echo "28 days.";
            }
            else if ($year % 4 == 0 && $year % 100 != 0){
              echo "29 days.";
            }
          }
          
        ?>
      </p>
    </table>
  </form>

</body>
</html>