<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$data.="<h1>ABOUT URBAN AMENITIES</h1>";
$data.="<p>URBAN AMENITIES provides a platform that allows skilled and experienced professionals to connect with users looking for specific services. All the professionals, though experienced and skilled, undergo intensive training modules before being allowed to list their services on the platform. The providers are certified and trained to serve our customers.</p>";
$data.="<p>We help customers book reliable home services like beauty services, massage therapy, cleaning, plumbing, carpentry, appliance repair, painting etc. We offer home maintenance, repair services, home beauty and wellness services. Thereby empowering service providers to showcase their work .</p>";
$mpdf->WriteHTML($data);
$mpdf->Output('ABOUT URBAN AMENITIES.pdf','D');
echo '<script>alert("NEWSLETTER SUBSCRIBED SUCCESSFULLY");</script>';
echo '<script>window.location = "index.html";</script>';
?>
