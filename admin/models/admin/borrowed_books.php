<?php

    include "connection.php";

    $qry = "select * from books where borrowed_by != 'NULL'";
    $res = $con->query($qry);

    $result = "<div class = 'vv'>";
    $result .= "<table class='table table-striped'>";
    $result .= "<thead> <tr>            
        
        <th>Book Name</th>
        <th>Author</th>
        <th>Book ID</th>
                    
        <th>Borrowed By</th>
        </tr> </thead>" ;
    
    $result .= "<tbody> <tr>";

    while($row = $res->fetch_assoc()) {
        $result .= "<td>".$row['title']. "</td>
                    <td>" .$row['author']. "</td>
                    <td>" .$row['book_id']. "</td>
                    <td>" .$row['borrowed_by']. "</td>
                    </tr>";
    }
    $result .= " </tbody> </table>
    </table> </div> </div> ";
    echo $result;
?>