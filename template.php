<!doctype html>
<html lang="en">

<head>
    <!--Required Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <!-- Title Of Site -->
    <title>CREDIT FORM</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
    <style>
        *,
        ::before,
        ::after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        a:hover {
            opacity: 0.88;
        }
    </style>
</head>

<body style="width:95%; text-align:center;margin:auto; " width="95%">
    <table style="background-color:#fff; width:100%; " width="100%" cellspacing="0" cellpadding="0" bgcolor="#fff;">
        <tbody>
            <tr>
                <td align="center">
                    <table style="margin:0px auto;width:100%;" width="100%" cellspacing="0" cellpadding="0"
                        bgcolor="#fff;">
                        <tbody>
                            <tr>
                                <td align="center" style=" width:100%; padding:0;" width="100%">
                                    <table width="100%" cellspacing="0" cellpadding="0" border="0"
                                        style="background:#fff; padding:20px 30px 20px 30px; width:100%;">
                                        <tbody>
                                            <tr>
                                                <td align="left" style="padding:0 0;">
                                                    <img style="text-decoration:none; height:auto; border:0; width:100%; max-width:250px; display:block; margin:0 ;"
                                                        title="logo" alt="logo"
                                                        src="https://pentacodesdemo.com/triniti/web/images/logo.png"
                                                        width="250" border="0" align="middle">
                                                </td>
                                                <td align="right" style="padding:0;">
                                                    <p
                                                        style="color:#696666; font-family:'Roboto', Arial, Helvetica, sans-serif; font-size:15px; letter-spacing:0.5px; line-height:1.5; text-align:right; margin:0 0 2px;">
                                                        TRINITI CARE</p>
                                                    <p
                                                        style="color:#696666; font-family:'Roboto', Arial, Helvetica, sans-serif; font-size:15px;  letter-spacing:0.5px; line-height:1.6; text-align:right; margin:0 0 0;">
                                                        {!!$contact->address!!}</p>
                                                    <p
                                                        style="color:#696666; font-family:'Roboto', Arial, Helvetica, sans-serif; font-size:15px; letter-spacing:0.5px; line-height:1.5; text-align:right; margin:0 0 0;">
                                                        <a href="mailto:{{$contact->email_id}}"
                                                            style="color:#696666;text-decoration:none;">{{$contact->email_id}}</a>
                                                    </p>
                                                    <p
                                                        style="color:#696666; font-family:'Roboto', Arial, Helvetica, sans-serif; font-size:15px; letter-spacing:0.5px; line-height:1.5; text-align:right; margin:0 0 0;">
                                                        <a href="tel:{{$contact->phone_number}}"
                                                            style="color:#696666;text-decoration:none;">{{$contact->phone_number}}</a>
                                                    </p>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </td>
                            </tr>

                            <tr>
                                <td align="center" style=" padding:0;">
                                    <table width="100%" cellspacing="0" cellpadding="0" border="0"
                                        style="background:#fff; padding:0px 0px 0;">
                                        <tbody>
                                            <tr>
                                                <td align="center">
                                                    <img src="https://pentacodesdemo.com/triniti/web/images/line.png"
                                                        style="width: 100%;" alt="">

                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" style=" padding:0;">
                                    <table width="100%" cellspacing="0" cellpadding="0" border="0"
                                        style="background:#fff; padding:30px 20px 0;">
                                        <tbody>
                                            <tr>
                                                <td align="center">
                                                    <h3
                                                        style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif; font-size:25px; font-weight: 600; letter-spacing:0.5px; line-height:1; text-align:center; margin:0 0 10px;">
                                                        <strong>REFERRAL FORM</strong></h3>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <!-- <tr>
                                <td align="center" style=" padding:0;">
                                    <table width="100%" cellspacing="0" cellpadding="0" border="0"
                                        style="background:#fff; padding:10px 30px 0;">
                                        <tbody>
                                            <tr>
                                                <td align="center">
                                                    <h3
                                                        style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif; font-size:18px; font-weight: 600; letter-spacing:0.5px; line-height:1; text-align:left; margin:0px 0px 20px 0px;">
                                                        <strong style="
                                                            color: #196332;
                                                        ">Directors Details</strong></h3>

                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr> -->

                            <tr>
                                <td align="center" style="padding:0px 30px 30px 30px;" style="background:#fff;"
                                    bgcolor="#fff">

                                    <table width="100%" cellspacing="0" cellpadding="0" border="1"
                                        style="background:#fff;border-collapse:collapse;">
                                        <tbody>

                                            <tr>

                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    Are you referring yourself?</td>
                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    :</td>
                                                <td
                                                    style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight:500; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                </td>
                                            </tr>
                                            <tr>

                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    Would you like to refer for another service?</td>
                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    :</td>
                                                <td
                                                    style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight:500; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                </td>
                                            </tr>
                                            <tr>

                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    What other service are you referring for?</td>
                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    :</td>
                                                <td
                                                    style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight:500; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                </td>
                                            </tr>
                                            <tr>

                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    What is the primary service you are referring for?</td>
                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    :</td>
                                                <td
                                                    style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight:500; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                </td>
                                            </tr>
                                            <tr>

                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    How did you hear about us?</td>
                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    :</td>
                                                <td
                                                    style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight:500; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                </td>
                                            </tr>
                                            <tr>

                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    Full Name</td>
                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    :</td>
                                                <td
                                                    style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight:500; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                </td>
                                            </tr>
                                            <tr>

                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    E-mail Id</td>
                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    :</td>
                                                <td
                                                    style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight:500; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                </td>
                                            </tr>
                                            <tr>

                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    Gender</td>
                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    :</td>
                                                <td
                                                    style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight:500; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                </td>
                                            </tr>
                                            <tr>

                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    Phone Number</td>
                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    :</td>
                                                <td
                                                    style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight:500; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                </td>
                                            </tr>
                                            <tr>

                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    Pincode</td>
                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    :</td>
                                                <td
                                                    style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight:500; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                </td>
                                            </tr>
                                            <tr>

                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    Customer age range</td>
                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    :</td>
                                                <td
                                                    style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight:500; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                </td>
                                            </tr>
                                            <tr>

                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    Primary Contact Name</td>
                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    :</td>
                                                <td
                                                    style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight:500; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                </td>
                                            </tr>

                                            <tr>

                                                <td
                                                    style="border-right: 1px solid transparent;color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    E-mail Id </td>
                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    :</td>

                                                <td
                                                    style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight:500; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                </td>
                                            </tr>
                                            <tr>

                                                <td
                                                    style="border-right: 1px solid transparent;color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    Contact phone </td>
                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    :</td>

                                                <td
                                                    style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight:500; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                </td>
                                            </tr>
                                            <tr>

                                                <td
                                                    style="border-right: 1px solid transparent;color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    Funding amount or number of service hours required</td>
                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    :</td>

                                                <td
                                                    style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight:500; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                </td>
                                            </tr>

                                            <tr>

                                                <td
                                                    style="border-right: 1px solid transparent;color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    Does the client have a history of behaviour we should be aware of?
                                                </td>
                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    :</td>

                                                <td
                                                    style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight:500; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                </td>
                                            </tr>

                                            <tr>

                                                <td
                                                    style="border-right: 1px solid transparent;color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    Are there any pets at the property? </td>
                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    :</td>

                                                <td
                                                    style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight:500; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                </td>
                                            </tr>

                                            <tr>

                                                <td
                                                    style="border-right: 1px solid transparent;color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    Is there anything else we need to be aware of that may put you or us
                                                    in any type of danger?</td>
                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    :</td>

                                                <td
                                                    style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight:500; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                </td>
                                            </tr>

                                            <tr>

                                                <td
                                                    style="border-right: 1px solid transparent;color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    Will any other people be present at the property during the
                                                    appointment?</td>
                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    :</td>

                                                <td
                                                    style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight:500; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">

                                                </td>
                                            </tr>
                                            <tr>

                                                <td
                                                    style="border-right: 1px solid transparent;color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    Is there anything we need to know for access to the property?</td>
                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    :</td>

                                                <td
                                                    style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight:500; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">

                                                </td>
                                            </tr>
                                            <tr>

                                                <td
                                                    style="border-right: 1px solid transparent;color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    How is the Participant's NDIS plan managed?</td>
                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    :</td>

                                                <td
                                                    style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight:500; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">

                                                </td>
                                            </tr>
                                            <tr>

                                                <td
                                                    style="border-right: 1px solid transparent;color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    Contact person to organise sessions</td>
                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    :</td>

                                                <td
                                                    style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight:500; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">

                                                </td>
                                            </tr>
                                            <tr>

                                                <td
                                                    style="border-right: 1px solid transparent;color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    How urgently does the participant need support?</td>
                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    :</td>

                                                <td
                                                    style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight:500; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">

                                                </td>
                                            </tr>
                                            <tr>

                                                <td
                                                    style="border-right: 1px solid transparent;color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    Additional information or comments</td>
                                                <td
                                                    style="border-right: 1px solid transparent; color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">
                                                    :</td>

                                                <td
                                                    style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif;   border-collapse:collapse; font-size:14px; font-weight:500; letter-spacing:0.5px; line-height:1.5; text-align:left; padding:10px; margin:0 0 0;">

                                                </td>
                                            </tr>

                                         
                                        </tbody>

                                    </table>
                                </td>
                            </tr>

                            <!-- <tr>
                                <td align="center" style=" padding:0;">
                                    <table width="100%" cellspacing="0" cellpadding="0" border="0"
                                        style=" padding:0px 30px 30px 30px;    background: #fff;">
                                        <tbody>
                                            <tr>
                                                <td align="left">
                                                    <h3
                                                        style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif; font-size:16px; font-weight: 600; letter-spacing:0.5px; line-height:1; text-align:left; margin:0 0 10px;">
                                                        <strong>Submitted Date</strong></h3>
                                                    <p
                                                        style="color:#000; font-family:'Roboto', Arial, Helvetica, sans-serif; font-size:15px; font-weight: 600; letter-spacing:0.5px; line-height:1.6; text-align:left; margin:0 0 2px;">
                                                        <strong>{{ date("d-M-Y", strtotime($lead->created_at))  }}</strong>
                                                    </p>
                                                </td>
                                                @if($lead->signature!=NULL)
                                                <td align="right" style="padding-top: 20px;">
                                                    <p
                                                        style="color:#666; font-family:'Roboto', Arial, Helvetica, sans-serif; font-size:15px; font-weight: 600; letter-spacing:0.5px; line-height:1.5; text-align:right; margin:0 0 2px;">
                                                        <strong style="color:#000;">Signature</strong></p>
                                                    <img src="{{asset($lead->signature)}}" alt="" width="200">
                                                </td>
                                                @endif
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr> -->

                        </tbody>
                    </table>
                </td>
            </tr>
         

        </tbody>
    </table>
</body>

</html>