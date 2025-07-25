<?php
use Deleon\Gs\Models\StudentModels;

require 'vendor/autoload.php';

$student = new StudentModels;

$student->id=1516;
$student->name="Rap";
$student->course="BSIT";
$student->year_level=1;
$student->section="C";

$student->create();
