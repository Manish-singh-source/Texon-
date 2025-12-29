<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Enquiry</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f4f4f4;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f4f4f4; padding: 20px 0;">
        <tr>
            <td align="center">
                <!-- Main Container -->
                <table width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">

                    <!-- Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #0b57d0 0%, #004a77 100%); padding: 40px 30px; text-align: center;">
                            <h1 style="margin: 0; color: #ffffff; font-size: 28px; font-weight: 600;">Thank You!</h1>
                            <p style="margin: 10px 0 0 0; color: #ffffff; font-size: 16px; opacity: 0.9;">We've received your enquiry</p>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px 30px;">
                            <p style="margin: 0 0 20px 0; color: #333333; font-size: 16px; line-height: 1.6;">
                                Dear <strong>{{ $enquiry->user_name }}</strong>,
                            </p>
                            <p style="margin: 0 0 30px 0; color: #666666; font-size: 15px; line-height: 1.6;">
                                Thank you for submitting your enquiry. We have received your details and our team will get back to you as soon as possible.
                            </p>

                            <!-- Enquiry Details Table -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="border: 1px solid #e0e0e0; border-radius: 6px; overflow: hidden; margin-bottom: 30px;">
                                <tr>
                                    <td colspan="2" style="background-color: #f8f9fa; padding: 15px 20px; border-bottom: 2px solid #667eea;">
                                        <h2 style="margin: 0; color: #333333; font-size: 18px; font-weight: 600;">Enquiry Details</h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px 20px; border-bottom: 1px solid #e0e0e0; background-color: #fafafa; width: 35%; font-weight: 600; color: #555555; font-size: 14px;">
                                        Enquiry ID
                                    </td>
                                    <td style="padding: 15px 20px; border-bottom: 1px solid #e0e0e0; color: #333333; font-size: 14px;">
                                        {{ $enquiry->enquiry_id }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px 20px; border-bottom: 1px solid #e0e0e0; background-color: #fafafa; width: 35%; font-weight: 600; color: #555555; font-size: 14px;">
                                        Product
                                    </td>
                                    <td style="padding: 15px 20px; border-bottom: 1px solid #e0e0e0; color: #333333; font-size: 14px;">
                                        {{ $enquiry->product->product_name ?? 'N/A' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px 20px; border-bottom: 1px solid #e0e0e0; background-color: #fafafa; width: 35%; font-weight: 600; color: #555555; font-size: 14px;">
                                        Name
                                    </td>
                                    <td style="padding: 15px 20px; border-bottom: 1px solid #e0e0e0; color: #333333; font-size: 14px;">
                                        {{ $enquiry->user_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px 20px; border-bottom: 1px solid #e0e0e0; background-color: #fafafa; width: 35%; font-weight: 600; color: #555555; font-size: 14px;">
                                        Email
                                    </td>
                                    <td style="padding: 15px 20px; border-bottom: 1px solid #e0e0e0; color: #333333; font-size: 14px;">
                                        {{ $enquiry->user_email }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px 20px; border-bottom: 1px solid #e0e0e0; background-color: #fafafa; width: 35%; font-weight: 600; color: #555555; font-size: 14px;">
                                        Phone
                                    </td>
                                    <td style="padding: 15px 20px; border-bottom: 1px solid #e0e0e0; color: #333333; font-size: 14px;">
                                        {{ $enquiry->user_phone }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px 20px; {{ $enquiry->message ? 'border-bottom: 1px solid #e0e0e0;' : '' }} background-color: #fafafa; width: 35%; font-weight: 600; color: #555555; font-size: 14px;">
                                        Company
                                    </td>
                                    <td style="padding: 15px 20px; {{ $enquiry->message ? 'border-bottom: 1px solid #e0e0e0;' : '' }} color: #333333; font-size: 14px;">
                                        {{ $enquiry->company }}
                                    </td>
                                </tr>
                                @if($enquiry->message)
                                <tr>
                                    <td style="padding: 15px 20px; background-color: #fafafa; width: 35%; font-weight: 600; color: #555555; font-size: 14px; vertical-align: top;">
                                        Message
                                    </td>
                                    <td style="padding: 15px 20px; color: #333333; font-size: 14px;">
                                        {{ $enquiry->message }}
                                    </td>
                                </tr>
                                @endif
                            </table>

                            <p style="margin: 0 0 10px 0; color: #666666; font-size: 15px; line-height: 1.6;">
                                We appreciate your interest and will respond as soon as possible.
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #f8f9fa; padding: 30px; text-align: center; border-top: 1px solid #e0e0e0;">
                            <p style="margin: 0 0 10px 0; color: #333333; font-size: 16px; font-weight: 600;">
                                Best regards,
                            </p>
                            <p style="margin: 0; color: #667eea; font-size: 18px; font-weight: 700;">
                                {{ config('app.name') }} Team
                            </p>
                        </td>
                    </tr>

                </table>

                <!-- Footer Note -->
                <table width="600" cellpadding="0" cellspacing="0" style="margin-top: 20px;">
                    <tr>
                        <td style="text-align: center; padding: 0 30px;">
                            <p style="margin: 0; color: #999999; font-size: 12px; line-height: 1.5;">
                                This is an automated message. Please do not reply to this email.
                            </p>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
</body>
</html>