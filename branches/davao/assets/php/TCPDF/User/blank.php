<?php
require_once('tcpdf_include.php');
session_start();
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);


if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

$pdf->SetFont('dejavusans', '', 10);

$pdf->AddPage('P', 'A5');

        $r_id = $_SESSION['r_id'];
        $r_remark = $_SESSION['r_remark'];
        $r_cn = $_SESSION['r_cn'];
        $r_address = $_SESSION['r_address'];
        $r_contact = $_SESSION['r_contact'];
        $r_pdate = $_SESSION['r_pdate'];
        $r_ptime = $_SESSION['r_ptime'];
        $r_totototal = $_SESSION['totototal'];
        $r_pickordeliver = $_SESSION['r_pickordeliver'];

    $html = '<body onload="window.print();">';
    $html .='<table style="font-size:10px;" align="center" border="1">';
    $html .='       
                <div style="text-align:center; font-size:17px;">            
                    ---------------------------'.$r_pickordeliver.'---------------------------
                </div>
                
                <div style="text-align:left;">            
                    Job Order #:'.$r_id.' <br>
                    Pick-up/Deliver Date: '.$r_pdate.'<br>
                    Pick-up/Deliver Time: '.$r_ptime.' <br>
                    Customer Name : '.$r_cn.' <br>
                    Address : '.$r_address.'<br>
                    Contact : '.$r_contact.'<br>
                </div>
                <br>
                <thead>
                            <tr>
                                <th style="">Type/<br>Description</th>
                                <th style="">Items</th>
                                <th style="">Kilos</th>
                                <th style="">Pieces</th>
                                <th style="">Status</th>
                                <th style="">Subtotal</th>
                            </tr>
                    <thead>';
        
        include '../../function/connection/connect.php';
        $result = mysqli_query($connect,"SELECT * FROM `addtocart`");
        while ($row = mysqli_fetch_array($result)) {
                $html .= '<tbody>
                            <tr>  
                                <td style="text-align:center;">'.$row['type'].'<br>'.$row['description'].'</td>
                                <td style="text-align:center;">'.$row['items'].'</td>
                                <td style="text-align:center;">'.$row['kilos'].'</td>
                                <td style="text-align:center;">'.$row['pieces'].'</td>
                                <td style="text-align:center;">'.$row['status'].'</td>
                                <td style="text-align:center;">'.$row['subtotal'].'</td>

                            </tr>
                        <tbody>
                            ';
                        }

            $html .= '</table>';


            $html .= '<h4 style="text-align:right; font-size:17px;">Total : '.$r_totototal.'</h4>';
            $html .= '</body>';
$pdf->writeHTML($html, true, false, true, false, '');
	
$pdf->lastPage();

$pdf->Output('Plain.pdf', 'I');
