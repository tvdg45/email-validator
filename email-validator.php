<?php
			$message = '';
			
			$message .= "Do not reply to this message.\r\n";
			
			//To send HTML mail, the Content-type header must be set
			$headers[] = 'MIME-Version: 1.0';
			$headers[] = 'Content-type: text; charset=iso-8859-1';
			
			// Additional headers
			$headers[] = 'From: Ruff Ruff <info@ruff-ruff.com>';
			$headers[] = 'Reply-To: info@ruff-ruff.com';
			$headers[] = 'X-Mailer: PHP/' . phpversion();
			
			$vendor_text_email = 'timvdg45@gmail.com,2175086775@vtext.com,2175086775@txt.att.net';
			
			//Mail it
			
				
				foreach (explode(',', $vendor_text_email) as $each_vendor_text_email) {
					
					if (mail($each_vendor_text_email, ('You have an inquiry from a customer.'), $message, implode("\r\n", $headers))) {
						
						break;
					} else {
						
						mail($each_vendor_text_email, ('You have an inquiry from a customer.'), $message, implode("\r\n", $headers));
					}
				}
