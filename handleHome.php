<?php

switch($_POST['type']) {
    case "getDataChart":
        echo json_encode(getDataPaymentReceiptChart($_POST['year'], $_POST['language']));
        break;
    default:
}

function getDataPaymentReceiptChart($year = '', $language) {
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ais_mindx";
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    $payment = array(
        't1' => 0,
        't2' => 0,
        't3' => 0,
        't4' => 0,
        't5' => 0,
        't6' => 0,
        't7' => 0,
        't8' => 0,
        't9' => 0,
        't10' => 0,
        't11' => 0,
        't12' => 0,
    );
    $receipt = array(
        't1' => 0,
        't2' => 0,
        't3' => 0,
        't4' => 0,
        't5' => 0,
        't6' => 0,
        't7' => 0,
        't8' => 0,
        't9' => 0,
        't10' => 0,
        't11' => 0,
        't12' => 0,
    );
    $sql_payment = "SELECT MONTH(date_payment) AS month, SUM(amount) AS total
     FROM a_payments
     WHERE YEAR(date_payment) = '$year' AND deleted = 0 AND status = 'DaChi'
     GROUP BY MONTH(date_payment)";
    $rs_payment = mysqli_query($conn, $sql_payment);
    while($rows_p = mysqli_fetch_assoc($rs_payment)) {
        $payment['t'.$rows_p[month]] = intval($rows_p['total']);
    }

    $sql_receipt = "SELECT MONTH(date_receipt) AS month, SUM(amount) AS total
     FROM a_receipts
     WHERE YEAR(date_receipt) = '$year' AND deleted = 0 AND status = 'DaThu'
     GROUP BY MONTH(date_receipt)";
    $rs_receipt = mysqli_query($conn, $sql_receipt);
    while($rows_r = mysqli_fetch_assoc($rs_receipt)) {
        $receipt['t'.$rows_r[month]] = intval($rows_r['total']);
    }
    $title = "";
    $month = array();
    $Income = "Income";
    $Expense = "Chi tiêu";
    $select_year = "Select year";
    if($language == "en_us") {
        $title = "Income and Expense Chart by Year";
        $month = array(
            "t1" => "January",
            "t2" => "February",
            "t3" => "March",
            "t4" => "April",
            "t5" => "May",
            "t6" => "June",
            "t7" => "July",
            "t8" => "August",
            "t9" => "September",
            "t10" => "October",
            "t11" => "November",
            "t12" => "December",
        );
        $Income = "Income";
        $Expense = "Expense";
        $select_year = "Select Year";
    } elseif ($language == "vn_vn") {
        $title = "Biểu đồ thu nhập và chi tiêu theo năm";
        $month = array(
            "t1" => "Tháng 1",
            "t2" => "Tháng 2",
            "t3" => "Tháng 3",
            "t4" => "Tháng 4",
            "t5" => "Tháng 5",
            "t6" => "Tháng 6",
            "t7" => "Tháng 7",
            "t8" => "Tháng 8",
            "t9" => "Tháng 9",
            "t10" => "Tháng 10",
            "t11" => "Tháng 11",
            "t12" => "Tháng 12",
        );
        $Income = "Thu thập";
        $Expense = "Chi tiêu";
        $select_year = "Chọn năm";
    }

    return array(
        'payment' => array(
            't1' => $payment['t1'],
            't2' => $payment['t2'],
            't3' => $payment['t3'],
            't4' => $payment['t4'],
            't5' => $payment['t5'],
            't6' => $payment['t6'],
            't7' => $payment['t7'],
            't8' => $payment['t8'],
            't9' => $payment['t9'],
            't10' => $payment['t10'],
            't11' => $payment['t11'],
            't12' => $payment['t12'],
        ),
        'receipt' => array(
            't1' => $receipt['t1'],
            't2' => $receipt['t2'],
            't3' => $receipt['t3'],
            't4' => $receipt['t4'],
            't5' => $receipt['t5'],
            't6' => $receipt['t6'],
            't7' => $receipt['t7'],
            't8' => $receipt['t8'],
            't9' => $receipt['t9'],
            't10' => $receipt['t10'],
            't11' => $receipt['t11'],
            't12' => $receipt['t12'],
        ),
        'title' => $title,
        'month' => $month,
        'income' => $Income,
        'expense' => $Expense,
        'select_year' => $select_year,
    );
}