<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Enquiry Received</title>
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
                            <h1 style="margin: 0; color: #ffffff; font-size: 28px; font-weight: 600;">🔔 New Enquiry Received</h1>
                            <p style="margin: 10px 0 0 0; color: #ffffff; font-size: 16px; opacity: 0.9;">A customer has submitted a new enquiry</p>
                        </td>
                    </tr>

                    <!-- Alert Badge -->
                    <tr>
                        <td style="padding: 20px 30px 0 30px;">
                            <div style="background-color: #fff3cd; border-left: 4px solid #ffc107; padding: 15px; border-radius: 4px; margin-bottom: 20px;">
                                <p style="margin: 0; color: #856404; font-size: 14px; font-weight: 600;">
                                    ⚠️ Action Required: Please review and respond to this enquiry promptly.
                                </p>
                            </div>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding: 0 30px 40px 30px;">
                            <p style="margin: 0 0 30px 0; color: #666666; font-size: 15px; line-height: 1.6;">
                                A new enquiry has been submitted through the website. Please review the details below and take appropriate action.
                            </p>

                            <!-- Enquiry Details Table -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="border: 1px solid #e0e0e0; border-radius: 6px; overflow: hidden; margin-bottom: 30px;">
                                <tr>
                                    <td colspan="2" style="background-color: #f8f9fa; padding: 15px 20px; border-bottom: 2px solid #f5576c;">
                                        <h2 style="margin: 0; color: #333333; font-size: 18px; font-weight: 600;">Enquiry Details</h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px 20px; border-bottom: 1px solid #e0e0e0; background-color: #fafafa; width: 35%; font-weight: 600; color: #555555; font-size: 14px;">
                                        Enquiry ID
                                    </td>
                                    <td style="padding: 15px 20px; border-bottom: 1px solid #e0e0e0; color: #333333; font-size: 14px;">
                                        <span style="background-color: #e3f2fd; color: #1976d2; padding: 4px 12px; border-radius: 12px; font-weight: 600; font-size: 13px;">
                                            {{ $enquiry->enquiry_id }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px 20px; border-bottom: 1px solid #e0e0e0; background-color: #fafafa; width: 35%; font-weight: 600; color: #555555; font-size: 14px;">
                                        Product
                                    </td>
                                    <td style="padding: 15px 20px; border-bottom: 1px solid #e0e0e0; color: #333333; font-size: 14px; font-weight: 600;">
                                        {{ $enquiry->product->product_name ?? 'N/A' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px 20px; border-bottom: 1px solid #e0e0e0; background-color: #fafafa; width: 35%; font-weight: 600; color: #555555; font-size: 14px;">
                                        Status
                                    </td>
                                    <td style="padding: 15px 20px; border-bottom: 1px solid #e0e0e0; color: #333333; font-size: 14px;">
                                        <span style="background-color: #fff3cd; color: #856404; padding: 4px 12px; border-radius: 12px; font-weight: 600; font-size: 13px; text-transform: uppercase;">
                                            {{ $enquiry->status }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px 20px; border-bottom: 1px solid #e0e0e0; background-color: #fafafa; width: 35%; font-weight: 600; color: #555555; font-size: 14px;">
                                        Submitted At
                                    </td>
                                    <td style="padding: 15px 20px; border-bottom: 1px solid #e0e0e0; color: #333333; font-size: 14px;">
                                        {{ $enquiry->created_at->format('d M Y H:i') }}
                                    </td>
                                </tr>
                            </table>

                            <!-- Customer Information Table -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="border: 1px solid #e0e0e0; border-radius: 6px; overflow: hidden; margin-bottom: 30px;">
                                <tr>
                                    <td colspan="2" style="background-color: #f8f9fa; padding: 15px 20px; border-bottom: 2px solid #f5576c;">
                                        <h2 style="margin: 0; color: #333333; font-size: 18px; font-weight: 600;">Customer Information</h2>
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
                                        <a href="mailto:{{ $enquiry->user_email }}" style="color: #1976d2; text-decoration: none;">
                                            {{ $enquiry->user_email }}
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px 20px; border-bottom: 1px solid #e0e0e0; background-color: #fafafa; width: 35%; font-weight: 600; color: #555555; font-size: 14px;">
                                        Phone
                                    </td>
                                    <td style="padding: 15px 20px; border-bottom: 1px solid #e0e0e0; color: #333333; font-size: 14px;">
                                        <a href="tel:{{ $enquiry->user_phone }}" style="color: #1976d2; text-decoration: none;">
                                            {{ $enquiry->user_phone }}
                                        </a>
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
                                    <td style="padding: 15px 20px; color: #333333; font-size: 14px; line-height: 1.6;">
                                        {{ $enquiry->message }}
                                    </td>
                                </tr>
                                @endif
                            </table>

                            <!-- Action Button -->
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td align="center" style="padding: 20px 0;">
                                        <a href="{{ url('/admin/enquiries') }}" style="display: inline-block; background: linear-gradient(135deg, #0b57d0 0%, #004a77 100%); color: #ffffff; text-decoration: none; padding: 14px 40px; border-radius: 6px; font-weight: 600; font-size: 16px; box-shadow: 0 4px 12px rgba(245, 87, 108, 0.3);">
                                            View in Admin Panel
                                        </a>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #f8f9fa; padding: 30px; text-align: center; border-top: 1px solid #e0e0e0;">
                            <p style="margin: 0; color: #666666; font-size: 14px; line-height: 1.6;">
                                This is an automated notification from <strong>{{ config('app.name') }}</strong>
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