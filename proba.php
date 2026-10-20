<?php
$company_name = "Strazar";
$foundingYear = 2022;
$package_price = 149.90;
$worksToday = true;

echo "Welcome to my website.";
?>

<h1>News</h1>

<?php
echo '<p>Last change dd/mm/yyyy</p>';

echo $company_name;
echo "<p>Founded $foundingYear.</p>";
echo "<p>Package: " . $package_price . " euro.</p>";
?>
