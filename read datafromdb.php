<body>
<section>
<!-- TABLE CONSTRUCTION -->
<table>
<tr>
<th>GFG UserHandle</th>
<th>Practice Problems</th>
<th>Coding Score</th>
<th>GFG Articles</th>
</tr>
<!-- PHP CODE TO FETCH DATA FROM ROWS -->
<?php 
while($rows=$result->fetch_assoc())
{
?>
<tr>
<!-- FETCHING DATA FROM EACH
ROW OF EVERY COLUMN -->
<td><?php echo $rows['username'];?></td>
<td><?php echo $rows['problems'];?></td>
<td><?php echo $rows['score'];?></td>
<td><?php echo $rows['articles'];?></td>
</tr>
<?php
}
?>
</table>
</section>
</body>
</html>
