<?php
class Work
{
  public $team_id;
  public $team_name;
  public function __construct($row) {
    $this->team_id = intval($row['team_id']);
    $this->team_name = $row['team_name'];
  }
  public static function findAll() {
    // 1. Connect to the database
    $db = new PDO(DB_SERVER, DB_USER, DB_PW);
    // 2. Prepare the query
    $sql = 'SELECT * FROM Team';
    $statement = $db->prepare($sql);
    // 3. Run the query
    $success = $statement->execute();
    // 4. Handle the results
    $arr = [];
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      // 4.a. For each row, make a new work object
      $teamItem =  new Team($row);
      array_push($arr, $teamItem);
    }
    // 4.b. return the array of work objects
    return $arr;
  }
}
