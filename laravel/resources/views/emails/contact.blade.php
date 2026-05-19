<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message</title>
</head>
<body style="margin: 0; padding: 0; background-color: #050505; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #ffffff; -webkit-font-smoothing: antialiased;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #050505; padding: 40px 20px;">
        <tr>
            <td align="center">
                <!-- Inner Container -->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; background-color: #0b0b0f; border: 1px solid rgba(255, 255, 255, 0.06); border-radius: 24px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.5);">
                    
                    <!-- Decorative Top Border Gradient -->
                    <tr>
                        <td height="6" style="background: linear-gradient(90deg, #00f2fe 0%, #4facfe 33%, #f5576c 66%, #f09819 100%);"></td>
                    </tr>

                    <!-- Header -->
                    <tr>
                        <td style="padding: 40px 40px 20px 40px; text-align: center;">
                            <div style="display: inline-flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                                <!-- Infinity Logo Accent -->
                                <span style="font-size: 28px; font-weight: bold; letter-spacing: -0.5px; color: #ffffff;">Aura Infotech</span>
                            </div>
                            <h1 style="margin: 0; font-size: 24px; font-weight: 700; letter-spacing: -0.5px; color: #ffffff; line-height: 1.3;">New Inquiry Received</h1>
                            <p style="margin: 8px 0 0 0; font-size: 14px; color: #88888e;">You have a new submission from the contact form.</p>
                        </td>
                    </tr>

                    <!-- Info Table -->
                    <tr>
                        <td style="padding: 20px 40px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: separate; border-spacing: 0 12px;">
                                
                                <!-- Name -->
                                <tr>
                                    <td width="30%" style="vertical-align: top; font-size: 13px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; color: #6b6b75; padding-top: 4px;">Full Name</td>
                                    <td width="70%" style="font-size: 15px; color: #ffffff; font-weight: 500;">{{ $data['name'] ?? 'N/A' }}</td>
                                </tr>

                                <!-- Email -->
                                <tr>
                                    <td style="vertical-align: top; font-size: 13px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; color: #6b6b75; padding-top: 4px;">Email</td>
                                    <td style="font-size: 15px; color: #00e5ff; font-weight: 500;"><a href="mailto:{{ $data['email'] ?? '' }}" style="color: #00e5ff; text-decoration: none;">{{ $data['email'] ?? 'N/A' }}</a></td>
                                </tr>

                                <!-- Phone -->
                                <tr>
                                    <td style="vertical-align: top; font-size: 13px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; color: #6b6b75; padding-top: 4px;">Phone</td>
                                    <td style="font-size: 15px; color: #ffffff; font-weight: 500;">{{ $data['phone'] ?? 'N/A' }}</td>
                                </tr>

                                <!-- Service -->
                                <tr>
                                    <td style="vertical-align: top; font-size: 13px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; color: #6b6b75; padding-top: 4px;">Service</td>
                                    <td style="font-size: 14px; color: #ffffff; font-weight: 600; display: inline-block; padding: 4px 12px; background-color: rgba(0, 229, 255, 0.1); border: 1px solid rgba(0, 229, 255, 0.2); border-radius: 8px;">
                                        @if(($data['service'] ?? '') === 'app')
                                            App Development
                                        @elseif(($data['service'] ?? '') === 'uiux')
                                            UI/UX Design
                                        @elseif(($data['service'] ?? '') === 'seo')
                                            SEO & Digital Presence
                                        @else
                                            Web Development
                                        @endif
                                    </td>
                                </tr>

                                <!-- Divider -->
                                <tr>
                                    <td colspan="2" style="padding: 10px 0;"><div style="border-top: 1px solid rgba(255, 255, 255, 0.08); height: 1px; width: 100%;"></div></td>
                                </tr>

                                <!-- Message -->
                                <tr>
                                    <td colspan="2" style="font-size: 13px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; color: #6b6b75; padding-bottom: 8px;">Message Details</td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="font-size: 14.5px; line-height: 1.6; color: #d1d1d6; background-color: #050508; border: 1px solid rgba(255,255,255,0.04); border-radius: 12px; padding: 18px; white-space: pre-line;">{{ $data['message'] ?? 'No message provided.' }}</td>
                                </tr>

                            </table>
                        </td>
                    </tr>

                    <!-- Footer Info -->
                    <tr>
                        <td style="padding: 30px 40px 40px 40px; text-align: center; background-color: #08080c; border-top: 1px solid rgba(255, 255, 255, 0.04);">
                            <p style="margin: 0; font-size: 12px; color: #4e4e54; line-height: 1.5;">This email was sent securely via Aura Infotech's automated lead notification system.<br>Copyright &copy; 2026 Aura Infotech. All Rights Reserved.</p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
