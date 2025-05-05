<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
</head>
<body style="background-color: #f9f9f9; font-family: sans-serif; padding: 20px; color: #333;">
  <div style="max-width: 600px; margin: auto; background-color: #fff3e6; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.05);">
    <div style="text-align: center; margin-bottom: 20px;">
      <a href="https://imgbb.com/"><img src="https://i.ibb.co/HpLr1mPg/logo.png" alt="logo" height="50" style="display: inline-block;" border="0" ></a>
    </div>
    <div>
      <h2 style="text-align: center; margin-bottom: 20px; font-size: 20px;">Password Reset Request</h2>
      <p>Hello {{ $user->name ?? 'User' }},</p>
      <p>You recently requested to reset your password. Click the button below to proceed:</p>

      <div style="text-align: center; margin: 30px 0;">
        <a href="{{ $resetUrl }}" style="display: inline-block; padding: 12px 25px; background-color: #212529; color: #fff; text-decoration: none; border-radius: 4px; font-weight: bold;">Reset Password</a>
      </div>

      <p>This password reset link will expire in <span style="text-decoration: underline;">5 minutes</span>.</p>
      <p>If you did not request this, you can safely ignore this email.</p>

      <p style="margin-top: 30px;">Regards,  
        <br><strong>Kupal Team</strong>
      </p>
    </div>

    <!-- Footer -->
    <div style="text-align: center; color: #888; margin-top: 40px; font-size: 12px;">
      <p>Christine Kate | Lamut, Ifugao</p>
      <p>&copy; {{ date('Y') }} KUPAL KA BA. All rights reserved.</p>
    </div>
  </div>
</body>
</html>
