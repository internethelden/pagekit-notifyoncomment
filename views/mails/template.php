<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    
    <!--[if mso]>
    <style>
        * {
            font-family: sans-serif !important;
        }
    </style>
    <![endif]-->
    
    <!--[if !mso]><!-->

    <!--<![endif]-->
    
    <style>
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }
        
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        
        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }
        
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
        
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }
        
        img {
            -ms-interpolation-mode:bicubic;
        }
        
        *[x-apple-data-detectors],  /* iOS */
        .x-gmail-data-detectors,    /* Gmail */
        .x-gmail-data-detectors *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }
        
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }
        img.g-img + div {
            display: none !important;
        }
        
        .button-link {
            text-decoration: none !important;
        }
        
        /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
            .email-container {
                min-width: 320px !important;
            }
        }
        /* iPhone 6, 6S, 7, 8, and X */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            .email-container {
                min-width: 375px !important;
            }
        }
        /* iPhone 6+, 7+, and 8+ */
        @media only screen and (min-device-width: 414px) {
            .email-container {
                min-width: 414px !important;
            }
        }
    
    </style>
    
    <style>
        
        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }
        .button-td:hover,
        .button-a:hover {
            background: #555555 !important;
            border-color: #555555 !important;
        }
        
        @media screen and (max-width: 600px) {
            
            .email-container {
                width: 100% !important;
                margin: auto !important;
            }
            
            .fluid {
                max-width: 100% !important;
                height: auto !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }
            
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }
            .stack-column-center {
                text-align: center !important;
            }
            
            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                margin-left: auto !important;
                margin-right: auto !important;
                float: none !important;
            }
            table.center-on-narrow {
                display: inline-block !important;
            }
            
            .email-container p {
                font-size: 17px !important;
            }
        }
    
    </style>
    
    <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->

</head>
<body width="100%" bgcolor="#222222" style="margin: 0; mso-line-height-rule: exactly;">
<center style="width: 100%; background: #222222; text-align: left;">
	
    <div style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
        <?= __('A new comment has been created on %sitename%.', ['%sitename%' => $sitename]); ?>
    </div>
    
    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container">
        <tr>
            <td style="padding: 20px 0; text-align: center">
            </td>
        </tr>
    </table>
    
    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container">
        
        <tr>
            <td bgcolor="#ffffff" align="center">
            </td>
        </tr>
        
        <tr>
            <td bgcolor="#ffffff" style="padding: 40px 40px 20px; text-align: center;">
                <h1 style="margin: 0; font-family: sans-serif; font-size: 24px; line-height: 125%; color: #333333; font-weight: normal;"><?= $title; ?></h1>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" style="padding: 0 40px 40px; font-family: sans-serif; font-size: 15px; line-height: 140%; color: #555555; text-align: center;">
                <p style="margin: 0;"><?= $content ?></p>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" style="padding: 0 40px 40px; font-family: sans-serif; font-size: 15px; line-height: 140%; color: #555555;">
                <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto">
                    <tr>
                        <td style="border-radius: 3px; background: #222222; text-align: center;" class="button-td">
                            <a href="<?= $url ?>" style="background: #222222;
                            border: 15px solid #222222; font-family: sans-serif; font-size: 13px; line-height: 110%; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;" class="button-a">
                                &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#ffffff;"><?= __('Moderate comments'); ?>
	                            </span>&nbsp;
	                            &nbsp;&nbsp;&nbsp;
                            </a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td aria-hidden="true" height="40" style="font-size: 0; line-height: 0;">
                &nbsp;
            </td>
        </tr>
	    <tr>
		    <td bgcolor="#ffffff">
			    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
				    <tbody>
					    <tr>
						    <td style="padding: 40px; font-family: sans-serif; font-size: 15px; line-height: 140%; color: #555555;">
								<?= __('Author:') ?> <?= $author ?>
						    </td>
						    <td style="padding: 40px; font-family: sans-serif; font-size: 15px; line-height: 140%; color: #555555;">
							    <?= __('IP:') ?> <?= $ip ?>
						    </td>
					    </tr>
				    </tbody>
			    </table>
		    </td>
	    </tr>
    </table>
</center>
</body>
</html>