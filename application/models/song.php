<?php

require_once APP . 'core/model.php';
require_once APP . 'database/connection.php';

/**
 * - Songs
 *
 * @property int id
 * @property string artist
 * @property string track
 * @property string link
 */

class Song extends Model
{
  /**
   * Get all songs from database
   */
  public static function getAllSongs()
  {
    $connection = Connection::getConnection();
    $sql = "SELECT id, artist, track, link FROM song";
    $query = $connection->prepare($sql);
    $query->execute();

    // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
    // core/controller.php! If you prefer to get an associative array as the result, then do
    // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
    // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
    return $query->fetchAll();
  }

  /**
   * Add a song to database
   * TODO put this explanation into readme and remove it from here
   * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
   * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
   * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
   * in the views (see the views for more info).
   * @param string $artist Artist
   * @param string $track Track
   * @param string $link Link
   */
  public static function addSong($artist, $track, $link)
  {
    $connection = Connection::getConnection();
    $sql = "INSERT INTO song (artist, track, link) VALUES (:artist, :track, :link)";
    $query = $connection->prepare($sql);
    $parameters = array(':artist' => $artist, ':track' => $track, ':link' => $link);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }

  /**
   * Delete a song in the database
   * Please note: this is just an example! In a real application you would not simply let everybody
   * add/update/delete stuff!
   * @param int $song_id Id of song
   */
  public static function deleteSong($song_id)
  {
    $connection = Connection::getConnection();
    $sql = "DELETE FROM song WHERE id = :song_id";
    $query = $connection->prepare($sql);
    $parameters = array(':song_id' => $song_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }

  /**
   * Get a song from database
   */
  public static function getSong($song_id)
  {
    $connection = Connection::getConnection();
    $sql = "SELECT id, artist, track, link FROM song WHERE id = :song_id LIMIT 1";
    $query = $connection->prepare($sql);
    $parameters = array(':song_id' => $song_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);

    // fetch() is the PDO method that get exactly one result
    return $query->fetch();
  }

  /**
   * Update a song in database
   * // TODO put this explaination into readme and remove it from here
   * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
   * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
   * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
   * in the views (see the views for more info).
   * @param string $artist Artist
   * @param string $track Track
   * @param string $link Link
   * @param int $song_id Id
   */
  public static function updateSong($artist, $track, $link, $song_id)
  {
    $connection = Connection::getConnection();
    $sql = "UPDATE song SET artist = :artist, track = :track, link = :link WHERE id = :song_id";
    $query = $connection->prepare($sql);
    $parameters = array(':artist' => $artist, ':track' => $track, ':link' => $link, ':song_id' => $song_id);

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
  }

  /**
   * Get simple "stats". This is just a simple demo to show
   * how to use more than one model in a controller (see application/controller/songs.php for more)
   */
  public static function getAmountOfSongs()
  {
    $connection = Connection::getConnection();
    $sql = "SELECT COUNT(id) AS amount_of_songs FROM song";
    $query = $connection->prepare($sql);
    $query->execute();

    // fetch() is the PDO method that get exactly one result
    return $query->fetch()->amount_of_songs;
  }
}