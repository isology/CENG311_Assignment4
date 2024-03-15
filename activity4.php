<!DOCTYPE html>
<!-- Ismail Alper KOYUNCU 21050111056 -->
<!-- Ali ŞEN 20050111066 -->
<html lang="en">
<head>
    <title>Java Jam Coffee House</title>
    <meta name="description" content="CENG 311 Inclass Activity 1" />
</head>

<body>

	<form action="activity4.php" method="GET">
		<table>
			<tr>
				<td>
					From:
				</td>
				<td>
					<input type="text" name="amount"/>
				</td>
				<td>
					Currency:
				</td>
				<td>
					<select name="from_currency">
						<option value="USD">USD</option>
						<option value="CAD">CAD</option>
						<option value="EUR">EUR</option>
					</select>
				</td>	
			</tr>
			<tr>
				<td>
					To:
				</td>
				<td>
					<?php
                    if(isset($_GET['convert'])) {
                        $from_currency = $_GET['from_currency'];
                        $to_currency = $_GET['to_currency'];
                        $amount = $_GET['amount'];                        
                        $exchange_rates = array(
                            "USDCAD" => 1.25, 
                            "USDEUR" => 0.85, 
                            "CADUSD" => 0.8,   
                            "CADEUR" => 0.68, 
                            "EURUSD" => 1.18,  
                            "EURCAD" => 1.47  
                        );

                        $exchange_rate_key = $from_currency . $to_currency;
                        if (array_key_exists($exchange_rate_key, $exchange_rates)) {
                            $exchange_rate = $exchange_rates[$exchange_rate_key];
                            $converted_amount = $amount * $exchange_rate;
                            echo "<input type='text' name='converted_amount' value='$converted_amount' readonly/>";
                        } else {
                            echo "Invalid conversion.";
                        }
                    } else {
                        echo "<input type='text' name='converted_amount' readonly/>";
                    }
                    ?>
				</td>
				<td>
					Currency:
				</td>
				<td>
					<select name="to_currency">
						<option value="USD">USD</option>
						<option value="CAD">CAD</option>
						<option value="EUR">EUR</option>
					</select>
				</td>	
			</tr>
				<tr>
				<td>
					
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
				<td>
					<input type="submit" name="convert" value="Convert"/>
				</td>	
			</tr>
		</table>
		
	</form>		
</body>
</html>
