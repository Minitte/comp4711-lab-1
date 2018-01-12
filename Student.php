<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Davis
 */
class Student {
    
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /**
     * Adjust or adds the email to the student's list of emails
     * @param type $which index for the email
     * @param type $address email address to be inserted
     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    /**
     * Adds a grade to the list of grades for this student
     * @param type $grade the grade to be added
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /**
     * Calculates the average grade of this student 
     * @return float
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    /**
     * Formats the student's information 
     * @return string
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname . "\n";
        $result .= 'Average Grade: ' . $this->average() . "\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
