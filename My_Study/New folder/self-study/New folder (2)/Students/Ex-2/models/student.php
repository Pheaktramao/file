<?php

// TODO: Include database.php here

/**
 * To get all genders  
 * @return array of genders
 */
function getGenders(){
    global $database;
    $query = "SELECT * FROM genders ORDER BY genderCode DESC";
    $statement = $database->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}

/**
 * To get all classes  
 * @return array of classes
 */
function getClasses(){
    global $database;
    $query = "SELECT * FROM classes ORDER BY classCode DESC";
    $statement = $database->prepare($query);
    $statement->execute();

    return $statement->fetchAll();
}

/**
 * To get all students  
 * @return array of students
 */
function getStudents(){
    // TODO 
}

/**
 * To get a signle student 
 * @param integer $studentID :  the student id
 * @return the student related to given student id
 */
function getStudent($studentID){
    // TODO 
}

/**
 * To check if email already exists 
 * @param integer $email :  The email address of a single student
 * @return The boolean true if email already exists, false otherwise.
 */
function emailExists($email){
    // TODO 
}


/**
 * To check if student ID is exists in a record 
 * @param integer $studentID :  The email address of a single student
 * @return The boolean true if the student ID is exists, false otherwise.
 */
function idNotFound($studentID){
    // TODO 
}

/**
* Create a product 
* @param string $studentName    :  		the student name
* @param integer $genderCode    :  		the gender code
* @param integer $classCode     :  		the class code
* @param integer $studentHobby  :  		the student hobbies
* @param integer $studentEmail  :   	the student email

* @return none
*/
function addStudent($studentName,$genderCode,$classCode,$studentHobby,$studentEmail){
    // TODO 
}

/**
* edit a student given its id and attibutes 
* @param integer $studentID     :       the student id
* @param string $studentName    :  		the student name
* @param integer $genderCode    :  		the gender code
* @param integer $classCode     :  		the class code
* @param integer $studentHobby  :  		the student hobbies
* @param integer $studentEmail  :   	the student email

* @return true if deletion was successful, false otherwise
*/
function editStudent($studentID,$studentName,$genderCode,$classCode,$studentHobby,$studentEmail){
    // TODO 
}

/**
 * Remove   student related to given student id
 * @param integer $studentID :  the student id
 * @return true if deletion was successful, false otherwise
 */
function deleteStudent($studentID){
    // TODO 
}