<?php
require("./data.php");

//* array_map
$updatedStudents = array_map(function ($student) {
  $student["role"] = 'student';
  return $student;
}, $students);

// echo "<pre>";
// print_r($updatedStudents);
// echo "</pre>";

//* array_filter
$highScores = array_filter($students, function ($student) {
  // if ($student["score"] >= 80) {
  //   return $student;
  // }

  // if ($student["score"] >= 80) return $student;
  // //? voir description mdn array_filter php
  return $student["score"] >= 80;
});

// echo "<pre>";
// print_r($highScores);
// echo "</pre>";

$averageScore =
  array_reduce($students, function ($scoresTotal, $student) {
    return $scoresTotal + $student["score"];
  }, 0) / count($students);

// echo "<pre>";
// print_r($averageScore);
// echo "</pre>";

//* reduce #2
$survey = array_reduce($students, function ($survey, $student) {
  $favSubject = $student["favoriteSubject"];

  if (array_key_exists($favSubject, $survey)) {
    $survey[$favSubject] += 1;
  } else {
    $survey[$favSubject] = 1;
  }

  return $survey;
}, []);

echo "<pre>";
print_r($survey);
echo "</pre>";
