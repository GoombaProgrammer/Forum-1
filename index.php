<?php
include 'connect.php';
include 'header.php';
 
$sql = "SELECT
            categories.cat_id,
            categories.cat_name,
            categories.cat_description
            FROM
            categories";
 
$result = mysqli_query($connection, $sql);
 
if(!$result)
{
    echo 'The categories could not be displayed, please try again later.'.mysqli_error($connection);
}
else
{
    if(mysqli_num_rows($result) == 0)
    {
        echo 'No categories defined yet.';
    }
    else
    {
          echo '<table border="1">
              <tr>
                <th>Category</th>
              </tr>'; 
             
        while($row = mysqli_fetch_assoc($result))
        {               
            echo '<tr>';
                echo '<td class="leftpart">';
                    echo '<h3><a href="category.php?cat_id= '. $row["cat_id"].' ">'.$row["cat_name"] . '</a></h3>' . $row["cat_description"];
                echo '</td>';
                echo '</tr>';
        }
    }
}

include ("footer.php");
?>