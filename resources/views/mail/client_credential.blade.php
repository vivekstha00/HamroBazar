{{-- resources/views/mail/client_credential.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Client Credentials</title>
</head>
<body style="margin:0; padding:0; background:#f8f9fa; font-family: Arial, Helvetica, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background:#f8f9fa; padding:24px 0;">
    <tr>
        <td align="center">

            <!-- Container -->
            <table width="600" cellpadding="0" cellspacing="0"
                   style="max-width:600px; width:100%; background:#ffffff; border:1px solid #e9ecef; border-radius:12px; overflow:hidden;">

                <!-- Header -->
                <tr>
                    <td style="background:#0d6efd; padding:18px 24px;">
                        <h2 style="margin:0; color:#ffffff; font-size:20px; font-weight:700;">
                            HamroBazar — Account Approved
                        </h2>
                        <p style="margin:6px 0 0; color:#dbeafe; font-size:14px; line-height:1.5;">
                            Your store has been approved. Use the credentials below to log in.
                        </p>
                    </td>
                </tr>

                <!-- Body -->
                <tr>
                    <td style="padding:24px;">

                        <h3 style="margin:0 0 10px; color:#212529; font-size:18px;">
                            Hello {{ $client->client_name }},
                        </h3>

                        <p style="margin:0 0 18px; color:#6c757d; font-size:14px; line-height:1.6;">
                            Congratulations! Your listing request for <strong style="color:#212529;">{{ $client->shop_name }}</strong>
                            has been approved. You can now access your client dashboard.
                        </p>

                        <!-- Credentials Card -->
                        <table width="100%" cellpadding="0" cellspacing="0" style="border:1px solid #e9ecef; border-radius:12px;">
                            <tr>
                                <td style="padding:16px 18px;">
                                    <p style="margin:0 0 12px; color:#212529; font-size:14px; font-weight:700;">
                                        Your Login Credentials
                                    </p>

                                    <table width="100%" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td style="color:#6c757d; font-size:13px; width:35%; padding:8px 0;">
                                                Login Email
                                            </td>
                                            <td style="color:#212529; font-size:13px; padding:8px 0; font-weight:600;">
                                                {{ $client->email }}
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="color:#6c757d; font-size:13px; padding:8px 0;">
                                                Temporary Password
                                            </td>
                                            <td style="padding:8px 0;">
                                                <span style="display:inline-block; background:#f1f3f5; border:1px solid #e9ecef; padding:8px 10px; border-radius:10px; font-size:13px; font-weight:700; color:#212529; letter-spacing:1px;">
                                                    {{ $password }}
                                                </span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="color:#6c757d; font-size:13px; padding:8px 0;">
                                                Status
                                            </td>
                                            <td style="color:#212529; font-size:13px; padding:8px 0; font-weight:600;">
                                                Approved
                                            </td>
                                        </tr>
                                    </table>

                                    <p style="margin:14px 0 0; color:#6c757d; font-size:12px; line-height:1.6;">
                                        For security, please log in and change your password immediately.
                                    </p>
                                </td>
                            </tr>
                        </table>

                        <!-- Button row -->
                        <table cellpadding="0" cellspacing="0" style="margin-top:18px;">
                            <tr>
                                <td>
                                    <a href="{{ url('/client/login') }}"
                                       style="display:inline-block; background:#0d6efd; color:#ffffff; text-decoration:none; padding:10px 16px; border-radius:10px; font-size:14px; font-weight:600;">
                                        Login to Dashboard
                                    </a>
                                </td>
                            </tr>
                        </table>

                        <!-- Help / Note -->
                        <p style="margin:18px 0 0; color:#6c757d; font-size:12px; line-height:1.6;">
                            If you didn’t request this account or you face issues logging in, please contact support.
                            <br>
                            Note: This is an automated email from HamroBazar. Do not share your password with anyone.
                        </p>

                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td style="background:#f1f3f5; padding:14px 24px; text-align:center;">
                        <p style="margin:0; color:#6c757d; font-size:12px;">
                            © {{ date('Y') }} HamroBazar — Client Access
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
