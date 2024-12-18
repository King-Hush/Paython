<?php
require_once 'classes/Fee.class.php';
require_once 'classes/AcademicPeriod.php';

// Ensure proper content type
header('Content-Type: application/json');

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 0);

try {
    if (!isset($_GET['org_id'])) {
        throw new Exception('Organization ID is required');
    }

    $orgId = $_GET['org_id'];
    
    // Get current academic period
    $academicPeriod = new AcademicPeriod();
    $currentPeriod = $academicPeriod->getCurrentAcademicPeriod();

    if (!$currentPeriod) {
        throw new Exception("No active academic period found");
    }

    // Log the incoming request
    error_log("Fetching payments for org_id: " . $orgId);

    $fee = new Fee();
    $payments = $fee->getOrganizationPayments($orgId, $currentPeriod['school_year'], $currentPeriod['semester']);
    
    // Log the result
    error_log("Payments found: " . json_encode($payments));

    echo json_encode($payments);

} catch (Exception $e) {
    error_log("Error in get_org_payments.php: " . $e->getMessage());
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
} 