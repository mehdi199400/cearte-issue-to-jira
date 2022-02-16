<?php
require 'vendor/autoload.php';

use JiraRestApi\Issue\IssueService;
use JiraRestApi\Issue\IssueField;
use JiraRestApi\JiraException;

function issuefield(
    $setProjectKey,
    $setSummary,
    $setAssigneeName,
    $setPriorityName,
    $setIssueType,
    $setDescription
) {
    // try{
    $issueField = new IssueField();

    $issueField
        ->setProjectKey($setProjectKey)
        ->setSummary($setSummary)
        ->setAssigneeName($setAssigneeName)
        ->setPriorityName($setPriorityName)
        ->setIssueType($setIssueType)
        ->setDescription($setDescription);
    $issueService = new IssueService();
    $ret = $issueService->create($issueField);
    //If success, Returns a link to the created issue.
    var_dump($ret);
}

$setDate = date("d");
switch ($setDate) {
    case 'day':
        issueField('TesT', 'install phpmyadmin', 'lesstif', 'Critical', 'Task', 'Full description for issue');
    case 'day':
        issueField('TesT', 'install phpmyadmin', 'lesstif', 'Critical', 'Task', 'Full description for issue');
    case 'day':
        issueField('TesT', 'install phpmyadmin', 'lesstif', 'Critical', 'Task', 'Full description for issue');
    default:
        "No information available for that day.";
        break;
}
