<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New contact enquiry</title>
</head>
<body style="margin:0;padding:0;background:#eef3f8;font-family:Arial,Helvetica,sans-serif;color:#0b1522;">
  <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background:#eef3f8;padding:28px 12px;">
    <tr>
      <td align="center">
        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="max-width:620px;background:#ffffff;border-radius:18px;overflow:hidden;border:1px solid #d7e0ea;">
          <tr>
            <td style="background:linear-gradient(135deg,#0b1522 0%,#162536 100%);padding:28px 28px 24px;">
              <p style="margin:0 0 8px;font-size:12px;letter-spacing:0.12em;text-transform:uppercase;color:#f0c419;font-weight:700;">Caretaz Healthcare</p>
              <h1 style="margin:0;font-size:24px;line-height:1.25;color:#ffffff;font-weight:700;">New contact enquiry</h1>
              <p style="margin:10px 0 0;font-size:14px;line-height:1.5;color:rgba(255,255,255,0.78);">A visitor submitted the Contact Us form on your website.</p>
            </td>
          </tr>

          <tr>
            <td style="padding:22px 28px 8px;">
              <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background:#fffdf3;border:1px solid #f0d56a;border-radius:12px;">
                <tr>
                  <td style="padding:14px 16px;">
                    <p style="margin:0;font-size:12px;letter-spacing:0.08em;text-transform:uppercase;color:#9a7a00;font-weight:700;">Subject</p>
                    <p style="margin:6px 0 0;font-size:17px;font-weight:700;color:#0b1522;">{{ $enquiry->subject }}</p>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <tr>
            <td style="padding:12px 28px 6px;">
              <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
                <tr>
                  <td style="padding:12px 0;border-bottom:1px solid #e8eef5;width:140px;vertical-align:top;font-size:13px;color:#5b6b7c;font-weight:700;">Full name</td>
                  <td style="padding:12px 0;border-bottom:1px solid #e8eef5;font-size:15px;color:#0b1522;">{{ $enquiry->name }}</td>
                </tr>
                <tr>
                  <td style="padding:12px 0;border-bottom:1px solid #e8eef5;vertical-align:top;font-size:13px;color:#5b6b7c;font-weight:700;">Email</td>
                  <td style="padding:12px 0;border-bottom:1px solid #e8eef5;font-size:15px;">
                    <a href="mailto:{{ $enquiry->email }}" style="color:#1f8f8a;text-decoration:none;">{{ $enquiry->email }}</a>
                  </td>
                </tr>
                <tr>
                  <td style="padding:12px 0;border-bottom:1px solid #e8eef5;vertical-align:top;font-size:13px;color:#5b6b7c;font-weight:700;">Phone</td>
                  <td style="padding:12px 0;border-bottom:1px solid #e8eef5;font-size:15px;">
                    <a href="tel:{{ preg_replace('/\s+/', '', $enquiry->phone) }}" style="color:#0b1522;text-decoration:none;">{{ $enquiry->phone }}</a>
                  </td>
                </tr>
                <tr>
                  <td style="padding:12px 0;border-bottom:1px solid #e8eef5;vertical-align:top;font-size:13px;color:#5b6b7c;font-weight:700;">Received</td>
                  <td style="padding:12px 0;border-bottom:1px solid #e8eef5;font-size:15px;color:#0b1522;">{{ $enquiry->created_at?->format('d M Y, H:i') }}</td>
                </tr>
              </table>
            </td>
          </tr>

          <tr>
            <td style="padding:18px 28px 28px;">
              <p style="margin:0 0 8px;font-size:12px;letter-spacing:0.08em;text-transform:uppercase;color:#5b6b7c;font-weight:700;">Message</p>
              <div style="background:#f5f8fc;border:1px solid #d7e0ea;border-radius:12px;padding:16px;font-size:15px;line-height:1.6;color:#0b1522;white-space:pre-wrap;">{{ $enquiry->message }}</div>

              <table role="presentation" cellspacing="0" cellpadding="0" style="margin-top:22px;">
                <tr>
                  <td style="border-radius:10px;background:#f0c419;">
                    <a href="{{ route('admin.contact-us.index') }}" style="display:inline-block;padding:12px 18px;font-size:14px;font-weight:700;color:#0b1522;text-decoration:none;">Open Contact Us inbox</a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <tr>
            <td style="background:#0b1522;padding:16px 28px;font-size:12px;line-height:1.5;color:rgba(255,255,255,0.65);">
              This notification was sent automatically by the Caretaz Healthcare website.
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
