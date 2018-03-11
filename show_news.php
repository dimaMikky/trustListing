<?
$today = date("Y-m-d");
$typeLenta = (isset($typeLenta)) ? $typeLenta : "std" ;
$page = (isset($_GET['page'])) ? $_GET['page'] : 1 ;
$newsonpage = 3;
$startlimit = ($page-1)*$newsonpage;
include("admin/connect.php");
$result = mysql_query("SELECT * FROM mining WHERE 1 ORDER BY id DESC");
$row = mysql_fetch_row($result);
$total = $row[0];
// Страничная навигация
$total_page = ceil( $total / $newsonpage );
if ($total_page>1) {
  echo '<div class="pagination"><ul>';
  for( $i=1;$i<$total_page+1;$i++ ) {	echo "<li ".($page==$i ? "class=\"active\"":"")."><a href=\"?page=$i\">".$i."</a></li>";}
  echo '</ul></div>';
  //echo 'Всего новостей='.$total.'  Страниц= '.ceil( $total / $newsonpage ).' Страница N'.$page ;
}
$num_rows = mysql_num_rows($result);
If ($num_rows>0) {
  while ($row=mysql_fetch_object($result)) {
    // НОВИНА
    
  };
};
// Страничная навигация
if ($total_page>1) {
  echo '<div class="pagination"><ul>';
  $total_page = ceil( $total / $newsonpage );
  for( $i=1;$i<$total_page+1;$i++ ) {echo "<li ".($page==$i ? "class=\"active\"":"")."><a href=\"?page=$i\">".$i."</a></li>";}
  echo '</ul></div>';
}
?>
