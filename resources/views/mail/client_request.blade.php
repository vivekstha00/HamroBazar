<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Request Notification</title>
</head>
<body style="margin:0; padding:0; background:#f8f9fa; font-family: Arial, Helvetica, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background:#f8f9fa; padding:24px 0;">
        <tr>
            <td align="center">

                <!-- Container -->
                <table width="600" cellpadding="0" cellspacing="0" style="max-width:600px; width:100%; background:#ffffff; border:1px solid #e9ecef; border-radius:12px; overflow:hidden;">

                    <!-- Header -->
                    <tr>
                        <td style="background:#0d6efd; padding:18px 24px;">
                            <h2 style="margin:0; color:#ffffff; font-size:20px; font-weight:700;">
                                HamroBazar Admin Notification
                            </h2>
                            <p style="margin:6px 0 0; color:#dbeafe; font-size:14px;">
                                A new client has requested to list their business.
                            </p>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding:24px;">
                            <h3 style="margin:0 0 10px; color:#212529; font-size:18px;">
                                New Store / Restaurant Request
                            </h3>

                            <p style="margin:0 0 18px; color:#6c757d; font-size:14px; line-height:1.6;">
                                A client has submitted a request to list their store/restaurant on HamroBazar.
                                Please review the details below.
                            </p>

                            <!-- Card -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="border:1px solid #e9ecef; border-radius:12px;">
                                <tr>
                                    <td style="padding:16px 18px;">
                                        <table width="100%" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td style="color:#6c757d; font-size:13px; width:35%; padding:8px 0;">Client Name</td>
                                                <td style="color:#212529; font-size:13px; padding:8px 0; font-weight:600;">
                                                    {{ $client->client_name }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="color:#6c757d; font-size:13px; padding:8px 0;">Shop Name</td>
                                                <td style="color:#212529; font-size:13px; padding:8px 0; font-weight:600;">
                                                    {{ $client->shop_name }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="color:#6c757d; font-size:13px; padding:8px 0;">Contact</td>
                                                <td style="color:#212529; font-size:13px; padding:8px 0; font-weight:600;">
                                                    {{ $client->contact }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="color:#6c757d; font-size:13px; padding:8px 0;">Email</td>
                                                <td style="color:#212529; font-size:13px; padding:8px 0; font-weight:600;">
                                                    {{ $client->email }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="color:#6c757d; font-size:13px; padding:8px 0;">Address</td>
                                                <td style="color:#212529; font-size:13px; padding:8px 0; font-weight:600;">
                                                    {{ $client->address }}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                            <!-- Button row -->
                            <table cellpadding="0" cellspacing="0" style="margin-top:18px;">
                                <tr>
                                    <td>
                                        <a href="{{ url('/') }}"
                                           style="display:inline-block; background:#0d6efd; color:#ffffff; text-decoration:none; padding:10px 16px; border-radius:10px; font-size:14px; font-weight:600;">
                                            Open Website
                                        </a>
                                    </td>
                                </tr>
                            </table>

                            <!-- Note -->
                            <p style="margin:18px 0 0; color:#6c757d; font-size:12px; line-height:1.6;">
                                Note: This is an automated email from HamroBazar.
                                Please do not share client details publicly.
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background:#f1f3f5; padding:14px 24px; text-align:center;">
                            <p style="margin:0; color:#6c757d; font-size:12px;">
                                © {{ date('Y') }} HamroBazar — Admin Panel Notification
                            </p>
                        </td>
                    </tr>

                </table>
                <!-- /Container -->

            </td>
        </tr>
    </table>

</body>
</html>
