
<?php
class Courses {
    private $courseCode;
    private $courseName;
    private $courseDescription;
    private $grade;

    public function setCourseCode($courseCode) {
        $this->courseCode = $courseCode;
    }

    public function getCourseCode() {
        return $this->courseCode;
    }

    public function setCourseName($courseName) {
        $this->courseName = $courseName;
    }

    public function getCourseName() {
        return $this->courseName;
    }

    public function setCourseDescription($courseDescription) {
        $this->courseDescription = $courseDescription;
    }

    public function getCourseDescription() {
        return $this->courseDescription;
    }

    public function setGrade($grade) {
        $this->grade = $grade;
    }

    public function getGrade() {
        return $this->grade;
    }

    public function isA() {
        if($this->grade == "A") {
            return true;
        } else {
            return false;
        }
    }

    public function getCourseDetails() {
        return "Course Code: " . $this->courseCode . "<br>Course Name: " . $this->courseName . "<br>Course Description: " . $this->courseDescription . "<br>Grade: " . $this->grade;
    }
}

$course1 = new Courses();
$course1->setCourseCode("CIS202");
$course1->setCourseName("structures");
$course1->setCourseDescription("data structures");
$course1->setGrade("A");

$course2 = new Courses();
$course2->setCourseCode("Swe202");
$course2->setCourseName("softwer engineering");
$course2->setCourseDescription("Introduction to softwer engineering ");
$course2->setGrade("B");

$course3 = new Courses();
$course3->setCourseCode("PHYS");
$course3->setCourseName("Physics");
$course3->setCourseDescription("Introduction to Physics");
$course3->setGrade("C");

$courses = array($course1, $course2, $course3);

echo "<table>";
echo "<tr><th>Course Code</th><th>Course Name</th><th>Course Description</th><th>Grade</th></tr>";
foreach($courses as $course) {
    if($course->isA()) {
        echo "<tr style='background-color: pink'>";
    } else {
        echo "<tr>";
    }
    echo "<td>" . $course->getCourseCode() . "</td><td>" . $course->getCourseName() . "</td><td>" . $course->getCourseDescription() . "</td><td>" . $course->getGrade() . "</td></tr>";
}
echo "</table>";
?>