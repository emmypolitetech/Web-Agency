# Kurios Baseloue Technology Limited Website

A responsive website for Kurios Baseloue Technology Limited showcasing their import/export and technology services.

## Features

- Responsive design optimized for all devices
- Modern and clean user interface
- Service showcase sections
- Contact form with email integration
- Mobile-friendly navigation
- Fast loading and optimized performance
- SEO-friendly structure

## Requirements

- PHP 7.4 or higher
- Apache web server with mod_rewrite enabled
- SSL certificate for HTTPS
- SMTP server for email functionality

## Installation

1. Clone this repository to your web server directory:
```bash
git clone https://github.com/your-username/kurios-baseloue.git
```

2. Configure your web server to point to the project directory

3. Update email settings in `includes/config.php`:
   - Set your SMTP server details
   - Update company information
   - Configure site URLs

4. Set up SSL certificate for HTTPS

5. Ensure proper permissions:
```bash
chmod 755 -R /path/to/project
chmod 644 .htaccess
```

## Directory Structure

```
├── index.php              # Main entry point
├── css/
│   └── style.css         # Main stylesheet
├── js/
│   └── main.js           # JavaScript functionality
├── images/               # Image assets
├── includes/
│   ├── config.php        # Configuration file
│   └── contact.php       # Contact form handler
└── .htaccess            # Apache configuration
```

## Configuration

1. Email Settings:
   - Open `includes/config.php`
   - Update SMTP settings
   - Set company email and contact information

2. Company Information:
   - Update company details in `includes/config.php`
   - Replace logo in `images/` directory
   - Update contact information in footer

## Security Features

- HTTPS enforcement
- XSS protection headers
- File access restrictions
- Directory listing disabled
- Sensitive file protection

## Maintenance

- Regularly update PHP version
- Keep Apache modules updated
- Monitor error logs
- Backup website data regularly

## Support

For support or inquiries, contact:
- Email: info@kuriosbaseloue.com
- Phone: +234 123 456 7890

## License

Copyright © 2024 Kurios Baseloue Technology Limited. All rights reserved. 